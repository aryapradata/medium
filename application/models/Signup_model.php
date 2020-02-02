<?php

class Signup_model extends CI_Model{
    public function signUpFunc()
    {
        $data = [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'username' => $this->input->post('username')
        ];

        $this->db->insert('user',$data);
    }
}