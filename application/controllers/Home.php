<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('home/index');
        $this->load->view('templates/auth_footer');
    }
}
