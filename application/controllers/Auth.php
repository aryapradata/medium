<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'valid_email' => "Invalid email address!"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]', [
            'min_length' => "Password too short"
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Page";
            $this->load->view('auth/login', $data);
        } else {
            $this->login();
        }
    }

    private function login()
    {

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {

            if ($user['is_active'] == 1) {

                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'status' => 'login'
                    ];
                    $this->session->set_userdata($data);
                    redirect('stories');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  Password Invalid</div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  Email has not been activated</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  Email has not been registered</div>');
            redirect('Auth');
        }
    }


    public function registration()
    {

        if ($this->session->userdata('email')) {
            redirect('stories');
        }
        $this->form_validation->set_rules('first_name', 'First_Name', 'required|trim');
        $this->form_validation->set_rules('last_name', 'Last_Name', 'trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => "Invalid email address!",
            'is_unique' => "This email has already registered!"
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[8]|is_unique[user.username]', [
            'is_unique' => "This username has already registered!"
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = "REGISTRATION";
            $this->load->view('auth/registration', $data);
        } else {
            $data = [
                'first_name' => htmlspecialchars($this->input->post('first_name', true)),
                'last_name' => htmlspecialchars($this->input->post('last_name')),
                'email' => htmlspecialchars($this->input->post('email')),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'username' => htmlspecialchars($this->input->post('username')),
                'bio' => "Hey there! I'm " . $this->input->post('first_name') . "! Welcome to my Medium",
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  Congratulations! Your Account has been created! please Login!</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout Successful!</div>');
        redirect('Auth');
    }
}
