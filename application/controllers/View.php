<?php

class View extends CI_Controller {

    public function index ()
    {
        $this->load->view('index');
    }

    public function write ()
    {
        $this->load->view('write');
    }

    public function subscribe ()
    {
        $this->load->view('subscribe');
    }

}