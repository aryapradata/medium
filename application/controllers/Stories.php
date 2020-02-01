<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Stories_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('create_stories');
	}

	public function create()
	{
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		$this->form_validation->set_rules('media','Media','required');
		
        if($this->form_validation->run() == FALSE) {
			$this->Stories_model->createStoriesNull();
			echo "berhasil ditambahkan (null)";
        }
        else {
			$this->Stories_model->createStories();
			echo "berhasil ditambahkan";
        }
	}

	public function update($id)
	{
		$this->form_validation->set_rules('title','Title','required');
		$this->form_validation->set_rules('content','Content','required');
		$this->form_validation->set_rules('media','Media','required');
		
        if($this->form_validation->run() == FALSE) {
			$this->Stories_model->updateStoriesNull($id);
			echo "berhasil ditambahkan (null)";
        }
        else {
			$this->Stories_model->updateStories($id);
			echo "berhasil ditambahkan";
        }
	}
}
