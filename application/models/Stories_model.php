<?php


class Stories_model extends CI_Model
{
    public function getAllStories()
    {
        return $this->db->get('content')->result_array();
    }
  
    public function getStoriesById($id)
    {
        $this->db->select('content.*, user.first_name, user.last_name');
        $this->db->from('user');
        $this->db->join('content', 'content.username = user.username');
        $this->db->where('content_id',$id);
        return $this->db->get()->result_array();
    }

    public function getStoriesByMyUsernameStatus0()
    {
        $this->db->where('username',$this->session->userdata('username'));
        $this->db->where('status_stories',0);
        return $this->db->get('content')->result_array();
    }

    public function getStoriesByMyUsernameStatus1()
    {
        $this->db->where('username',$this->session->userdata('username'));
        $this->db->where('status_stories',1);
        return $this->db->get('content')->result_array();
    }

    public function getStoriesByStatus($search = null)
    {
        if($search)
        {
            $this->db->like('title',$search);
        }
        $this->db->select('content.*, user.first_name, user.last_name');
        $this->db->from('user');
        $this->db->join('content', 'content.username = user.username');
        $this->db->where('status_stories', 1);
        return $this->db->get()->result_array();
    }

    public function getCommentByContentId($id)
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media'),
            'status_stories' => 0,
            'clap' => 0
        ];

        $this->db->insert('content', $data);
    }

    
    public function insertImage(){
        $config['upload_path']='./images/';
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']='3000';
        $config['remove_space']= TRUE;

        $this->load->library('upload',$config);
        
        if($this->upload->do_upload('media')){
            $return = ['result'=>'success',
                        'file' => $this->upload->data(),
                        'error'=>''];
        }else{
            $return=['result'=>'failed',
                    'file'=>'',
                    'error'=>$this->upload->display_errors()];
        }
        
        return $return;
    }

    public function createStories($upload)
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media'=> $upload['file']['file_name'],
            'status_stories' => 0,
            'clap' => 0
        ];

        $this->db->insert('content', $data);
    }

    public function createStoriesMediaNull()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => "No Media",
            'status_stories' => 0,
            'clap' => 0
        ];
        $this->db->insert('content', $data);
    }

    // public function createStoriesTitleNull()
    // {
    //     $data = [
    //         'username' => $this->session->userdata('username'),
    //         'title' => "No Title",
    //         'content' => $this->input->post('content'),
    //         'media' => $this->input->post('media'),
    //         'status_stories' => 0
    //     ];

    //     $this->db->insert('content',$data);
    // }

    // public function createStoriesContentNull()
    // {
    //     $data = [
    //         'username' => $this->session->userdata('username'),
    //         'title' => $this->input->post('title'),
    //         'content' => "No Content",
    //         'media' => $this->input->post('media'),
    //         'status_stories' => 0
    //     ];

    //     $this->db->insert('content',$data);
    // }

    public function updateImage(){
        $config['upload_path']='./images/';
        $config['allowed_types']='jpg|png|jpeg';
        $config['max_size']='3000';
        $config['remove_space']= TRUE;

        $this->load->library('upload',$config);
        
        if($this->upload->do_upload('media')){
            $return = ['result'=>'success',
                        'file' => $this->upload->data(),
                        'error'=>''];
        }else{
            $return=['result'=>'failed',
                    'file'=>'',
                    'error'=>$this->upload->display_errors()];
        }
        
        return $return;
    }

    public function updateStories($id,$upload)
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media'=> $upload['file']['file_name']
        ];

        $this->db->where('content_id', $id);
        $this->db->update('content', $data);
    }

    // public function updateStoriesTitleNull($id)
    // {
    //     $data = [
    //         'title' => "No Title",
    //         'content' => $this->input->post('content'),
    //         'media' => $this->input->post('media')
    //     ];

    //     $this->db->where('content_id',$id);
    //     $this->db->update('content',$data);
    // }

    // public function updateStoriesContentNull($id)
    // {
    //     $data = [
    //         'title' => $this->input->post('title'),
    //         'content' => "No Content",
    //         'media' => $this->input->post('media')
    //     ];

    //     $this->db->where('content_id',$id);
    //     $this->db->update('content',$data);
    // }

    public function deleteStories($id)
    {
        $this->db->where('content_id',$id);
        $this->db->delete('content');
        $this->db->where('content_id',$id);
        $this->db->delete('comment');
    }

    public function publish($id)
    {
        $this->db->where('content_id',$id);
        $this->db->update('content',['status_stories' => 1]);
    }

    public function addComment($id)
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'content_id' => $id,
            'comment' => $this->input->post('comment')
        ];
        $this->db->insert('comment',$data);
    }

    public function deleteComment($contentid,$commentid)
    {
        $this->db->where('comment_id',$commentid);
        $this->db->delete('comment');
    }

    public function updateComment($contentid,$commentid)
    {
        $data = [
            'comment' => $this->input->post('comment')
        ];

        $this->db->where('comment_id',$commentid);
        $this->db->update('comment',$data);
    }


    public function insertCelap($data){
        return $this->db->insert('celap', $data);
    }
 
    public function updateCelap($data){
        return $this->db->update('celap', $data); 
    }

    public function getClap()
    {
        return $this->db->get('celap')->result_array();
    }
}

        

