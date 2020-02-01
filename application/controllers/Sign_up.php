<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_up extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Signup_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
		
        if($this->form_validation->run() == FALSE) {
            $this->load->view('signup');
        }
        else {
        	$this->Signup_model->signUpFunc();
            echo "berhasil ditambahkan";
        }
	}
}
