<?php

class View extends CI_Controller {

    public function index ()
    {
        $this->load->view('index');
    }

    public function login ()
    {
        $this->load->view('login');
    }

    public function write ()
    {
        $this->load->view('write');
    }
    public function isi1 ()
    {
        $this->load->view('isi1');
    }
    public function isi2 ()
    {
        $this->load->view('isi2');
    }

}