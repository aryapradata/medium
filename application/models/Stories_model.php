<?php

class Stories_model extends CI_Model{
    public function getAllStories()
    {
        return $this->db->get('content')->result_array();
    }

    public function getStoryById($id)
    {
        $this->db->select('content.*, user.first_name, user.last_name');
        $this->db->from('user');
        $this->db->join('content', 'content.username = user.username');
        $this->db->where('status_stories',1);
        $this->db->where('content_id',$id);
        return $this->db->get()->result_array();
    }

    public function getStoriesByUsernameStatus0()
    {
        $this->db->where('username',$this->session->userdata('username'));
        $this->db->where('status_stories',0);
        return $this->db->get('content')->result_array();
    }

    public function getStoriesByUsernameStatus1()
    {
        $this->db->where('username',$this->session->userdata('username'));
        $this->db->where('status_stories',1);
        return $this->db->get('content')->result_array();
    }

    public function getStoriesByStatus()
    {
        $this->db->select('content.*, user.first_name, user.last_name');
        $this->db->from('user');
        $this->db->join('content', 'content.username = user.username');
        $this->db->where('status_stories',1);
        return $this->db->get()->result_array();
    }

    public function createStories()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media'),
            'status_stories' => 0
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesTitleNull()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => "No Title",
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media'),
            'status_stories' => 0
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesContentNull()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => "No Content",
            'media' => $this->input->post('media'),
            'status_stories' => 0
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesMediaNull()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => "No Media",
            'status_stories' => 0
        ];

        $this->db->insert('content',$data);
    }

    public function updateStories($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media')
        ];

        $this->db->where('content_id',$id);
        $this->db->update('content',$data);
    }

    public function updateStoriesTitleNull($id)
    {
        $data = [
            'title' => "No Title",
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media')
        ];

        $this->db->where('content_id',$id);
        $this->db->update('content',$data);
    }

    public function updateStoriesContentNull($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => "No Content",
            'media' => $this->input->post('media')
        ];

        $this->db->where('content_id',$id);
        $this->db->update('content',$data);
    }

    public function updateStoriesMediaNull($id)
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => "No Media"
        ];

        $this->db->where('content_id',$id);
        $this->db->update('content',$data);
    }

    public function deleteStories($id)
    {
        $this->db->where('content_id',$id);
        $this->db->delete('content');
    }

    public function publish($id)
    {
        $this->db->where('content_id',$id);
        $this->db->update('content',['status_stories' => 1]);
    }

}