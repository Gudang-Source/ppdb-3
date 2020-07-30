<?php

class Infosekolah extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('infosekolah/index');
        $this->load->view('templates/auth_footer');
    }
}
