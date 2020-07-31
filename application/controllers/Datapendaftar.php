<?php

class Datapendaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Seleksi_model');
        $this->load->model('User_model');
        $this->load->library('pagination');
    }

    public function index()
    {   
        // panggil fungsi list agar dapat menampilkan data saat membuka halaman awal
        // atau saat membuka page lain pada pagination
        $this->list();
    }

    public function list()
    {
        $data['title'] = 'Data Pendaftar';

        // Buat configurasi untuk pagination
        $config['total_rows'] = $this->db->count_all('user');
        $config['per_page'] = 10;

        // set base url untuk paginasi
        $config['base_url'] = site_url('datapendaftar/list');
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

        $this->load->view('templates/auth_header');
        $this->load->view('datapendaftar/index', $data);
        $this->load->view('templates/auth_footer');
    }

}
