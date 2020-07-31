<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = 'Data Pendaftar';

        $data['biodata'] = $this->User_model->getUsersBiodata();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/index', $data);
        $this->load->view('templates/hal_footer');
    }

    public function detail($user_id)
    {
        $data['title'] = 'Detail Siswa';
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $user_id])->row_array();
        $data['raport'] = $this->Pendaftaran_model->getNilaiRaportbyId($user_id);
        $data['user_id'] = $user_id;
        $data['file_raport'] = $this->Pendaftaran_model->getFileRaportbyId($user_id);
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

    public function hasilseleksi()
    {
        
    }
}
