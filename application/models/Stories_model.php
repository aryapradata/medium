<?php

class Stories_model extends CI_Model{
    public function getStoryById($id)
    {
        $this->db->where('content_id',$id);
        return $this->db->get('content')->result_array();
    }

    public function getAllStories()
    {
        return $this->db->get('content')->result_array();
    }

    public function getStoryByTitleId($title,$id)
    {
        $this->db->where('title',$title);
        $this->db->where('content_id',$id);
        return $this->db->get('content')->result_array();
    }

    public function createStories()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media')
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesTitleNull()
    {
        $data = [
            'title' => "No Title",
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media')
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesContentNull()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => "No Content",
            'media' => $this->input->post('media')
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesMediaNull()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => "No Media"
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
}