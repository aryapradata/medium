<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stories extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Stories_model');
		$this->load->library('form_validation');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		} 
	}

	public function index()
	{
		if($this->input->post('submit'))
		{
			$data['search'] = $this->input->post('search');
		}
		else
		{
			$data['search'] = null;
		}
		$data['stories'] = $this->Stories_model->getStoriesByStatus($data['search']);
		$this->load->view('homepage',$data);
	}

	public function create_form()
	{
		$this->load->view('stories/create_stories');
	}

	public function create()
	{
		if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesTitleNull();
			redirect('stories/drafts');
		}

		if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesContentNull();
			redirect('stories/drafts');
		}

		if($this->form_validation->set_rules('media','Media','required')->run() == FALSE)
		{
			$this->Stories_model->createStoriesMediaNull();
			redirect('stories/drafts');
		}
		
        else {
			$this->Stories_model->createStories();
			redirect('stories/drafts');
        }
	}

	public function update($id)
	{
		if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesTitleNull($id);
			redirect('stories/drafts');
		}

		if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesContentNull($id);
			redirect('stories/drafts');
		}

		if($this->form_validation->set_rules('media','Media','required')->run() == FALSE)
		{
			$this->Stories_model->updateStoriesMediaNull($id);
			redirect('stories/drafts');
		}
		
        else {
			$this->Stories_model->updateStories($id);
			redirect('stories/drafts');
        }
	}

	public function drafts()
	{
		$data['stories'] = $this->Stories_model->getStoriesByMyUsernameStatus0();
		$this->load->view('stories/draft_stories',$data);
	}

	public function update_form($id)
	{
		$data['stories'] = $this->Stories_model->getStoriesById($id);
		$this->load->view('stories/update_stories',$data);
	}

	public function open_stories($id)
	{
		$data['stories'] = $this->Stories_model->getStoriesById($id);
		$data['comment'] = $this->Stories_model->getCommentByContentId($id);
		$this->load->view('stories/open_stories',$data);
	}

	public function delete($id)
	{
		$this->Stories_model->deleteStories($id);
		redirect('stories');
	}

	public function publish($id)
	{
		$this->Stories_model->publish($id);
		redirect('stories/open_stories/' . $id);
	}

	public function published()
	{
		$data['published'] = $this->Stories_model->getStoriesByMyUsernameStatus1();
		$this->load->view('stories/published_stories', $data);
	}

	public function your_stories()
	{
		$this->load->view('stories/your_stories');
	}

	public function createComment($id)
	{
		$this->form_validation->set_rules('comment','Comment','required');
		
        if($this->form_validation->run() == FALSE) {
            $this->load->view('stories/open_stories');
        }
        else {
        	$this->Stories_model->addComment($id);
			redirect('stories/open_stories/' . $id);
        }
	}

	public function updateComment($contentid,$commentid)
	{
		$this->form_validation->set_rules('comment','Comment','required');
		
        if($this->form_validation->run() == FALSE) {
            $this->load->view('stories/open_stories');
        }
        else {
        	$this->Stories_model->updateComment($contentid,$commentid);
			redirect('stories/open_stories/' . $contentid);
        }
	}

	public function deleteComment($contentid,$commentid)
	{
		$this->Stories_model->deleteComment($contentid,$commentid);
		redirect('stories/open_stories/' . $contentid);
	}

}
