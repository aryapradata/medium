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
        if ($this->input->post('submit')) {
            $data['search'] = $this->input->post('search');
        } else {
            $data['search'] = null;
        }
        $data['stories'] = $this->Stories_model->getStoriesByStatus($data['search']);
        $this->load->view('homepage', $data);
    }

    public function create_form() {
        $this->load->view('stories/create_stories');
    }

    public function createAction() {
        if ($this->input->post('submit')) {
            $upload = $this->Stories_model->insertImage();
            if ($upload['result'] == "success") {
                $this->Stories_model->createStories($upload);
                redirect('stories/drafts');
            } else {
                echo "Failed " . $upload['error'];
            }
        }
    }

    // public function create()
    // {
    //     if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
    //     {
    //         $this->Stories_model->createStoriesTitleNull();
    //         redirect('stories/drafts');
    //     }

    //     if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
    //     {
    //         $this->Stories_model->createStoriesContentNull();
    //         redirect('stories/drafts');
    //     }

    //     else {
    //         $this->Stories_model->createStories();
    //         redirect('stories/drafts');
    //     }
    // }

    public function updateAction($id) {
        if ($this->input->post('submit')) {
            $upload = $this->Stories_model->updateImage();
            if ($upload['result'] == "success") {
                $this->Stories_model->updateStories($id, $upload);
                redirect('stories/open_stories/' . $id);
            } else {
                echo "Failed " . $upload['error'];
            }
        }
    }

    // public function update($id)
    // {
    //     if($this->form_validation->set_rules('title','Title','required')->run() == FALSE)
    //     {
    //         $this->Stories_model->updateStoriesTitleNull($id);
    //         redirect('stories/open_stories/' . $id);
    //     }

    //     if($this->form_validation->set_rules('content','Content','required')->run() == FALSE)
    //     {
    //         $this->Stories_model->updateStoriesContentNull($id);
    //         redirect('stories/open_stories/' . $id);
    //     }

    //     else {
    //         $this->Stories_model->updateStories($id);
    //         redirect('stories/open_stories/' . $id);
    //     }
    // }

    public function drafts() {
        $data['stories'] = $this->Stories_model->getStoriesByMyUsernameStatus0();
        $this->load->view('stories/draft_stories', $data);
    }

    public function update_form($id) {
        $data['stories'] = $this->Stories_model->getStoriesById($id);
        $this->load->view('stories/update_stories', $data);
    }

    public function open_stories($id) {
        $data['stories'] = $this->Stories_model->getStoriesById($id);
        $data['comment'] = $this->Stories_model->getCommentByContentId($id);
        
        if($this->Stories_model->getCountClapbyUser($id) == 0){
            $data['clap'] = 0;
        } else {
            $data['clap'] = $this->Stories_model->getClapbyMyUsername($id);
        }
        

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

    // private function _uploadImage(){
    //     $config['upload_path'] = './assets/images/';
    //     $config['alloweed_types'] = 'jpg|png';
    //     $config['file_name'] = ;
    //     $config['overwrite'] = true;
    //     $config['max_size'] = 1024;

    //     $this->load->library('upload', $config);
    // }

    public function tambah_celap() {
        $data = array('clap' => $this->input->post('clapCount'));

        if (isset($_POST['submit'])) {
            $data = array('clap' => $this->input->post('clapCount'));

            $this->Stories_model->updateCelap($data);

        } else {
            $data = array('clap' => $this->input->post('clapCount'));
            $this->Stories_model->insertCelap($data);
            $id = $this->db->insert_id();
        }
    }

    public function autosave_celap($id) {
        $data = array('clap' => $this->input->post('clapCount'));
        
        echo $this->input->post('clapCount');


        if($this->Stories_model->getCountClapbyUser($id) != 0){   
            $this->Stories_model->updateCelap($data, $id);
        } else {
            $this->Stories_model->insertCelap($data, $id);
        }
    }

   

    public function celap() {
        $data['clap'] = $this->Stories_model->getClap()[0]['clap'];

        $this->load->view('celap/celap', $data);
    }

    public function published() {
        $data['published'] = $this->Stories_model->getStoriesByMyUsernameStatus1();
        $this->load->view('stories/published_stories', $data);
    }

    public function your_stories() {
        $this->load->view('stories/your_stories');
    }

    public function createComment($id) {
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('stories/open_stories');
        } else {
            $this->Stories_model->addComment($id);
            redirect('stories/open_stories/' . $id);
        }
    }

    public function updateComment($contentid, $commentid) {
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('stories/open_stories');
        } else {
            $this->Stories_model->updateComment($contentid, $commentid);
            redirect('stories/open_stories/' . $contentid);
        }
    }

    public function deleteComment($contentid, $commentid) {
        $this->Stories_model->deleteComment($contentid, $commentid);
        redirect('stories/open_stories/' . $contentid);
    }

}
