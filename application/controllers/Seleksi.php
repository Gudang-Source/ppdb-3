<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Data Pendaftar';
        $data['biodata'] = $this->db->get_where('biodata', ['nopen' => $this->session->userdata('nopen')])->row_array();

        $data['index'] = $this->db->get('biodata')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/index', $data);
        $this->load->view('templates/hal_footer');
    }

    public function detail()
    {
        $data['title'] = 'Detail Siswa';
        $data['biodata'] = $this->db->get_where('biodata', ['nopen' => $this->session->userdata('nopen')])->row_array();

        $data['index'] = $this->db->get('biodata')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/detail', $data);
        $this->load->view('templates/hal_footer');
    }

    public function cari()
    {
        $data['title'] = 'Detail Siswa';
        $data['biodata'] = $this->db->get_where('biodata', ['nopen' => $this->session->userdata('nopen')])->row_array();

        $data['index'] = $this->db->get('biodata')->result_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/detail', $data);
        $this->load->view('templates/hal_footer');
    }
}
