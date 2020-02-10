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

    public function subscribes ()
    {
        $this->load->view('subscribes');
    }

}