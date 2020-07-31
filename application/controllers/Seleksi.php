<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seleksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        $this->load->model('Pendaftaran_model');
        $this->load->model('User_model');
        $this->load->model('Seleksi_model');
    }

    public function index()
    {
        $data['title'] = 'Data Pendaftar';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $config['total_rows'] = $this->db->count_all('user');
        $config['per_page'] = 10;
        $data['role'] = $this->session->userdata('role_id');

        $config['base_url'] = site_url('seleksi/index');
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        

        $this->pagination->initialize($config);
        
        $limit = $config['per_page'];
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        $data['biodata'] = $this->User_model->getPaginatedUsersBiodata($limit, $start);

        $data['i'] = $start + 1;

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/index', $data);
        $this->load->view('templates/hal_footer');
    }

    public function detail($user_id)
    {
        $data['role'] = $this->session->userdata('role_id');
        $data['title'] = 'Detail Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
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
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Siswa';
        $data['biodata'] = $this->db->get_where('biodata', ['nopen' => $this->input->post('cari')])->row_array();
        $data['role'] = $this->session->userdata('role_id');
        $user_id = $data['biodata']['user_id'];
        $data['raport'] = $this->Pendaftaran_model->getNilaiRaportbyId($user_id);
        $data['user_id'] = $user_id;
        $data['file_raport'] = $this->Pendaftaran_model->getFileRaportbyId($user_id);
        
        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/detail', $data);
        $this->load->view('templates/hal_footer');
    }

    public function carifromhasil()
    {
        $data['title'] = 'Hasil Seleksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->Seleksi_model->cari();
        $data['role'] = $this->session->userdata('role_id');
        $data['i'] = 1;

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/hasilseleksi', $data);
        $this->load->view('templates/hal_footer');
    }

    public function prosesseleksi()
    {
        $this->Seleksi_model->proses();
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">Proses seleksi sukses dijalankan!</div>'
        );
        redirect('seleksi/hasilseleksi');
    }

    public function hasilseleksi()
    {
        $data['title'] = 'Hasil Seleksi';
        $data['role'] = $this->session->userdata('role_id');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        // Buat configurasi untuk pagination
        $config['total_rows'] = $this->db->count_all('user');
        $config['per_page'] = 10;
        $config['base_url'] = site_url('seleksi/hasilseleksi');
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        

        $this->pagination->initialize($config);
        
        $limit = $config['per_page'];

        // jika ada angka pada uri segment ke 3 maka data dimulai dari angka tersebut
        // jika tidak ada maka data dimulai dari 0
        $start = $this->uri->segment(3) ? $this->uri->segment(3) : 0;

        $data['users'] = $this->Seleksi_model->getHasil($limit, $start);

        $data['i'] = $start + 1;

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/hasilseleksi', $data);
        $this->load->view('templates/hal_footer');
    }

    public function hasiluser()
    {
        $user_id = $this->session->userdata('id');
        $data['role'] = $this->session->userdata('role_id');
        $data['user'] = $this->User_model->getUser($user_id);
        $data['biodata'] = $this->User_model->getBioData($user_id);
        $data['title'] = 'Hasil Seleksi';

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('seleksi/hasiluser', $data);
        $this->load->view('templates/hal_footer');
}
}
