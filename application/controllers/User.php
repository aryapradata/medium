<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if (!($this->session->userdata('email'))) {
            redirect('Auth');
        }
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
        $data['user'] = $this->db->get_where('user', ['user_id' => $id])->row_array();
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
        $temp = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'username' => $username,
            'bio' => $bio
        );
        $this->db->where('user_id', $id);
        $this->db->update('user', $temp);

        $data['user'] = $this->db->get_where('user', ['user_id' => $id])->row_array();
        redirect('user', $data);
    }

    public function get_user($username)
    {
        if (!$this->session->userdata('email')) {
            redirect('user');
        }
        $data['user'] = $this->db->get_where('user', ['username' => $username])->row_array();
        $this->load->view('user/peek_profile', $data);
    }
}
