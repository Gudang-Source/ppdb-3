<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['index'] = $this->db->get('user')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/hal_footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['index'] = $this->db->get('user')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/hal_footer');
    }

    public function cari()
    {
        $data['title'] = 'Detail Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['index'] = $this->db->get('user')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/hal_footer');
    }
}
