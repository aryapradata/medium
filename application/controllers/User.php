<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        if (!($this->session->userdata('email'))) {
            redirect('Auth');
        }
        $data['comment'] = $this->User_model->getCommentByUsername($this->session->userdata('username'));
        $data['user'] = $this->User_model->getUserByEmail();
        $this->load->view('user/user_profile', $data);
    }

    public function get_data($id)
    {
        if (!$this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('first_name', 'First_Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last_Name', 'trim');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]|is_unique[user.username]', [
            'is_unique' => "This username has already registered!"
        ]);
        $data['user'] = $this->User_model->getUserById($id);
        $this->load->view('user/edit_profile', $data);
    }

    public function edit_profile($id)
    {
        if (!$this->session->userdata('email')) {
            redirect('user');
        }
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $username = $this->input->post('username');
        $bio = $this->input->post('bio');
        $utemp = $this->db->get_where('user', ['user_id' => $id])->row_array();
        $qtemp = array('username' => $username);
        for ($i = 0; $i < count($utemp); $i++) {
            $datatemp = $this->db->get_where('content', ['username' => $utemp['username']]);
            $this->db->where('username', $utemp['username']);
            $this->db->update('content', $qtemp);
        };
        $temp = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'bio' => $bio
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $temp);

        $data['user'] = $this->User_model->getUserById($id);
        redirect('user', $data);
    }

    public function get_user($username)
    {
        if (!$this->session->userdata('email')) {
            redirect('user');
        }
        $data['user'] = $this->User_model->getUserByUsername($username);

        if ($data['user'] == $this->session->userdata('email')) 
        {
            $data['comment'] = $this->User_model->getCommentByUsername($username);
            $this->load->view('user/user_profile', $data);
		    $this->load->view('user/peek_profile', $data);
        } 
        else 
        {
            $data['published'] = $this->User_model->getStoriesByUsernameStatus1($username);
            $this->load->view('user/peek_profile', $data);
        }

    }
}
