<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stories extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Stories_model');
        $this->load->library('form_validation');
        if ($this->session->userdata('status') != "login") {
            redirect(base_url("auth"));
        }
    }

    public function index() {
        $data['stories'] = $this->Stories_model->getStoriesByStatus();
        $this->load->view('homepage', $data);
    }

    public function create_form() {
        $this->load->view('stories/create_stories');
    }

    public function create() {
        if ($this->form_validation->set_rules('title', 'Title', 'required')->run() == false) {
            $this->Stories_model->createStoriesTitleNull();
            redirect('stories/drafts');
        }

        if ($this->form_validation->set_rules('content', 'Content', 'required')->run() == false) {
            $this->Stories_model->createStoriesContentNull();
            redirect('stories/drafts');
        }

        if ($this->form_validation->set_rules('media', 'Media', 'required')->run() == false) {
            $this->Stories_model->createStoriesMediaNull();
            redirect('stories/drafts');
        } else {
            $this->Stories_model->createStories();
            redirect('stories/drafts');
        }
    }

    public function update($id) {
        if ($this->form_validation->set_rules('title', 'Title', 'required')->run() == false) {
            $this->Stories_model->updateStoriesTitleNull($id);
            redirect('stories/drafts');
        }

        if ($this->form_validation->set_rules('content', 'Content', 'required')->run() == false) {
            $this->Stories_model->updateStoriesContentNull($id);
            redirect('stories/drafts');
        }

        if ($this->form_validation->set_rules('media', 'Media', 'required')->run() == false) {
            $this->Stories_model->updateStoriesMediaNull($id);
            redirect('stories/drafts');
        } else {
            $this->Stories_model->updateStories($id);
            redirect('stories/drafts');
        }
    }

    public function drafts() {
        $data['stories'] = $this->Stories_model->getStoryByUsername();
        $this->load->view('stories/draft_stories', $data);
    }

    public function update_form($id) {
        $data['stories'] = $this->Stories_model->getStoryById($id);
        $this->load->view('stories/update_stories', $data);
    }

    public function open_stories($id) {
        $data['stories'] = $this->Stories_model->getStoryById($id);
        $this->load->view('stories/open_stories', $data);
    }

    public function delete($id) {
        $this->Stories_model->deleteStories($id);
        redirect('stories');
    }

    public function publish($id) {
        $this->Stories_model->publish($id);
        redirect('stories/open_stories/' . $id);
    }

    public function clap($id) {
        //select * from clap where username like zora
        $utempp = $this->db->get_where('clap', ['username' => $this->session->userdata('username'), 'content_id' => $id])->result();
        $utemp = count($utempp);
        $dataclap['user'] = $this->db->get_where('content', ['content_id' => $id])->row_array();
        $claptempcontent = $dataclap['user']['clap'] + 1;
        $sumclaptblclap = $this->db->get_where('clap', ['username' => $this->session->userdata('username'), 'content_id' => $id])->row_array();
        $claptempclap = $sumclaptblclap['clap'] + 1;
        if ($utemp == 0) {
            $dataa = [
                'username' => $this->session->userdata('username'),
                'content_id' => $id,
                'clap' => 1,
            ];
            $this->db->insert('clap', $dataa);
            $this->db->get_where('content', ['content_id' => $id])->row_array();
            $this->db->where('content_id', $id);
            $queryupdatetemp = array(
                'clap' => $claptempcontent,
            );
            $this->db->update('content', $queryupdatetemp);

        } else {
            $this->db->set(['clap' => $claptempclap]);
            $this->db->where('username', $this->session->userdata('username'));
            $this->db->where('content_id', $id);
            $this->db->update('clap');
            $this->db->set(['clap' => $claptempcontent]);
            $this->db->where('content_id', $id);
            $this->db->update('content');
        }
        redirect('stories/open_stories/' . $id);
    }

    function tambah_celap(){
        $data = array('clap'=>$this->input->post('clapCount'));
        
        if (isset($_POST['submit'])){
	        $data = array('clap'=>$this->input->post('clapCount'));
	       
		$this->Stories_model->updateCelap($data);
		
	}else{
            $data = array('clap'=>$this->input->post('clapCount'));
            $this->Stories_model->insertCelap($data);
		$id = $this->db->insert_id();
	}

    }
     
    function autosave_celap(){
            $data = array('clap'=>$this->input->post('clapCount'));
        $this->Stories_model->updateCelap($data);
        echo $this->input->post('clapCount');
    }

    function celap(){
        $data['clap'] = $this->Stories_model->getClap()[0]['clap'];
        
        $this->load->view('celap/celap', $data);
    }

}
