<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index() {
        if (!($this->session->userdata('email'))) {
            redirect('Auth');
        }
        $data['clap'] = $this->userGetClappedStories($this->session->userdata('username'));
        $data['comment'] = $this->User_model->getCommentByUsername($this->session->userdata('username'));
        $data['user'] = $this->User_model->getUserByEmail();
        $this->load->view('user/user_profile', $data);

    }

    public function get_data($id) {
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
        $this->form_validation->set_rules('first_name', 'First_Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last_Name', 'trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]|is_unique[user.username]', [
            'is_unique' => "This username has already registered!",
        ]);
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('user/edit_profile', $data);
    }

    public function edit_profile($id) {
        if (!$this->session->userdata('email')) {
            redirect('user');
        }

        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $username = $this->input->post('username');
        $bio = $this->input->post('bio');
        $comtemp = $this->db->get_where('comment', ['username' => $this->session->userdata('username')])->row_array();
        $claptemp = $this->db->get_where('clap', ['username' => $this->session->userdata('username')])->row_array();
        $contemp = $this->db->get_where('content', ['username' => $this->session->userdata('username')])->row_array();
        $qtemp = array('username' => $username);

        for ($i = 0; $i < count($contemp); $i++) {
            $this->db->get_where('content', ['username' => $this->session->userdata('username')]);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('content', $qtemp);
        };
        for ($i = 0; $i < count($claptemp); $i++) {
            $this->db->get_where('clap', ['username' => $this->session->userdata('username')]);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('clap', $qtemp);
        };
        for ($i = 0; $i < count($comtemp); $i++) {
            $this->db->get_where('comment', ['username' => $this->session->userdata('username')]);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->update('comment', $qtemp);
        }
        ;

        $temp = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'bio' => $bio,
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $temp);

        $this->session->set_userdata('username', $username);
        $data['user'] = $this->User_model->getUserById($id);
        redirect('user', $data);

    }

    public function get_user($username) {
        if (!$this->session->userdata('email')) {
            redirect('Auth');
        }
        $data['user'] = $this->User_model->getUserByUsername($username);
        $data['comment'] = $this->User_model->getCommentByUsername($username);
        $data['clap'] = $this->userGetClappedStories($username);
        if ($username == $this->session->userdata('username')) {
            redirect('user');
        } else {
            $data['published'] = $this->User_model->getStoriesByUsernameStatus1($username);
            $this->load->view('user/peek_profile', $data);
        }
    }

    public function userGetClappedStories($username) {
        $this->db->select('clap.*, content.title');
        $this->db->from('clap');
        $this->db->join('content', 'clap.content_id = content.content_id');
        $this->db->where('clap.username', $username);
        return $this->db->get()->result_array();
    }
}
