<?php

class User_model extends CI_Model{
    public function getCommentByUsername($username)
    {
        $this->db->select('comment.*, content.title');
        $this->db->from('comment');
        $this->db->join('content', 'comment.content_id = content.content_id');
        $this->db->where('comment.username',$username);
        return $this->db->get()->result_array();
    }

    public function getStoriesByUsernameStatus1($username)
    {
        $this->db->where('username',$username);
        $this->db->where('status_stories',1);
        return $this->db->get('content')->result_array();
    }

    public function getUserByEmail()
    {
        return $this->db->get_where('user', ['email' => $this->session->userdata('email')])->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['user_id' => $id])->result_array();
    }

    public function getUserByUsername($username)
    {
        return $this->db->get_where('user', ['username' => $username])->result_array();
    }
}