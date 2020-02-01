<?php

class Stories_model extends CI_Model{
    public function createStories()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'media' => $this->input->post('media')
        ];

        $this->db->insert('content',$data);
    }

    public function createStoriesNull()
    {
        $data = [
            'title' => "No Title",
            'content' => "No Content",
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

    public function updateStoriesNull($id)
    {
        $data = [
            'title' => "No Title",
            'content' => "No Content",
            'media' => "No Media"
        ];

        $this->db->where('content_id',$id);
        $this->db->insert('content',$data);
    }
}