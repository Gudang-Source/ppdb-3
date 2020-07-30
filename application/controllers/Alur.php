<?php
class Alur extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('alur/index');
        $this->load->view('templates/auth_footer');
    }
}
