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
		if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesTitleNull();
			redirect('stories/view_all');
		}

		if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesContentNull();
			redirect('stories/view_all');
		}

		if($this->form_validation->set_rules('media','Media','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesMediaNull();
			redirect('stories/view_all');
		}
		
        else {
			$this->Stories_model->createStories();
			redirect('stories/view_all');
        }
	}

	public function update($id)
	{
		if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesTitleNull($id);
			redirect('stories/view_all');
		}

		if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesContentNull($id);
			redirect('stories/view_all');
		}

		if($this->form_validation->set_rules('media','Media','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesMediaNull($id);
			redirect('stories/view_all');
		}
		
        else {
			$this->Stories_model->updateStories($id);
			redirect('stories/view_all');
        }
	}

	public function view_all()
	{
		$data['stories'] = $this->Stories_model->getAllStories();
		$this->load->view('draft_stories',$data);
	}

	public function update_form($id)
	{
		$data['stories'] = $this->Stories_model->getStoryById($id);
		$this->load->view('update_stories',$data);
	}

	public function publish($title,$id)
	{

	}
}
