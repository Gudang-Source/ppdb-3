<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
    }
    public function index()
    {
        $data['title'] = 'Biodata';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['biodata'] = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();

        $this->load->view('templates/hal_header', $data);
        $this->load->view('templates/hal_sidebar', $data);
        $this->load->view('templates/hal_topbar', $data);
        $this->load->view('pendaftaran/index', $data);
        $this->load->view('templates/hal_footer');
    }

    public function Biodata()
    {
        // get biodata user
        $biodata = $this->db->get_where('biodata', ['user_id' => $this->session->userdata('id')])->row_array();

        if ($biodata['verified'] == 1) {
            redirect('pendaftaran');
        }

        $data['title'] = 'Isi Biodata Calon Peserta Didik';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nopen'] = $biodata['nopen'];
        $data['biodata'] = $biodata;

        $this->form_validation->set_rules('nopen', 'Nopen');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|trim');
        $this->form_validation->set_rules('school', 'Sekolah Asal', 'required|trim');
        $this->form_validation->set_rules('year_graduated', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('noun', 'NoUN', 'required|trim');
        $this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('born_place', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('date', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');

        $this->form_validation->set_rules('father_name', 'Nama Ayah', 'required|trim');
        $this->form_validation->set_rules('father_address', 'Alamat Ayah', 'required|trim');
        $this->form_validation->set_rules('father_job', 'Pekerjaan Ayah', 'required|trim');
        $this->form_validation->set_rules('father_phone', 'No Hp Ayah', 'required|trim');

        $this->form_validation->set_rules('mother_name', 'Nama Ibu', 'required|trim');
        $this->form_validation->set_rules('mother_address', 'Alamat Ibu', 'required|trim');
        $this->form_validation->set_rules('mother_job', 'Pekerjaan Ibu', 'required|trim');
        $this->form_validation->set_rules('mother_phone', 'No Hp Ibu', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/hal_header', $data);
            $this->load->view('templates/hal_sidebar', $data);
            $this->load->view('templates/hal_topbar', $data);
            $this->load->view('pendaftaran/biodata', $data);
            $this->load->view('templates/hal_footer');
        } else {

            $this->Pendaftaran_model->tambahDataBiodata(); {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Biodata Berhasil Disimpan!
                </div>');
            redirect('pendaftaran/biodata');
            }
        }
    }

    public function raport()
    {
        $data['title'] = 'Raport';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $nilai = $this->Pendaftaran_model->getNilaiRaport();
        $data['nilai'] = $nilai;
        $data['file_raport'] = $this->Pendaftaran_model->getFileRaport();

        $this->form_validation->set_rules('agama1', 'agama1', 'required|numeric');

        // Validasi untuk nilai agama
        $this->form_validation->set_rules('agama1', 'agama1', 'required|numeric');
        $this->form_validation->set_rules('agama2', 'agama2', 'required|numeric');
        $this->form_validation->set_rules('agama3', 'agama3', 'required|numeric');
        $this->form_validation->set_rules('agama4', 'agama4', 'required|numeric');
        $this->form_validation->set_rules('agama5', 'agama5', 'required|numeric');

        // Validasi untuk nilai ppkn
        $this->form_validation->set_rules('ppkn1', 'ppkn1', 'required|numeric');
        $this->form_validation->set_rules('ppkn2', 'ppkn2', 'required|numeric');
        $this->form_validation->set_rules('ppkn3', 'ppkn3', 'required|numeric');
        $this->form_validation->set_rules('ppkn4', 'ppkn4', 'required|numeric');
        $this->form_validation->set_rules('ppkn5', 'ppkn5', 'required|numeric');

        // Validasi untuk nilai bahasa indonesia
        $this->form_validation->set_rules('b_indonesia1', 'b_indonesia1', 'required|numeric');
        $this->form_validation->set_rules('b_indonesia2', 'b_indonesia2', 'required|numeric');
        $this->form_validation->set_rules('b_indonesia3', 'b_indonesia3', 'required|numeric');
        $this->form_validation->set_rules('b_indonesia4', 'b_indonesia4', 'required|numeric');
        $this->form_validation->set_rules('b_indonesia5', 'b_indonesia5', 'required|numeric');

        // Validasi untuk nilai matematika
        $this->form_validation->set_rules('matematika1', 'matematika1', 'required|numeric');
        $this->form_validation->set_rules('matematika2', 'matematika2', 'required|numeric');
        $this->form_validation->set_rules('matematika3', 'matematika3', 'required|numeric');
        $this->form_validation->set_rules('matematika4', 'matematika4', 'required|numeric');
        $this->form_validation->set_rules('matematika5', 'matematika5', 'required|numeric');

        // Validasi untuk nilai ipa
        $this->form_validation->set_rules('ipa1', 'ipa1', 'required|numeric');
        $this->form_validation->set_rules('ipa2', 'ipa2', 'required|numeric');
        $this->form_validation->set_rules('ipa3', 'ipa3', 'required|numeric');
        $this->form_validation->set_rules('ipa4', 'ipa4', 'required|numeric');
        $this->form_validation->set_rules('ipa5', 'ipa5', 'required|numeric');

        // Validasi untuk nilai ips
        $this->form_validation->set_rules('ips1', 'ips1', 'required|numeric');
        $this->form_validation->set_rules('ips2', 'ips2', 'required|numeric');
        $this->form_validation->set_rules('ips3', 'ips3', 'required|numeric');
        $this->form_validation->set_rules('ips4', 'ips4', 'required|numeric');
        $this->form_validation->set_rules('ips5', 'ips5', 'required|numeric');

        // Validasi untuk nilai bahasa inggris
        $this->form_validation->set_rules('b_inggris1', 'b_inggris1', 'required|numeric');
        $this->form_validation->set_rules('b_inggris2', 'b_inggris2', 'required|numeric');
        $this->form_validation->set_rules('b_inggris3', 'b_inggris3', 'required|numeric');
        $this->form_validation->set_rules('b_inggris4', 'b_inggris4', 'required|numeric');
        $this->form_validation->set_rules('b_inggris5', 'b_inggris5', 'required|numeric');


        // validasi data
        // jika gagal maka tampilkan halaman raport
        // jika berhasil add data raport

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('templates/hal_header', $data);
            $this->load->view('templates/hal_sidebar', $data);
            $this->load->view('templates/hal_topbar', $data);
            $this->load->view('pendaftaran/raport', $data);
            $this->load->view('templates/hal_footer');
        } else {
            if ($this->input->post('mode') == 'create') {
                $this->Pendaftaran_model->tambahDataRaport();
                if ($this->input->post('raport')) {
                    $this->uploadRaport('create');
                }
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Nilai Raport Berhasil Ditambahkan!</div>'
                );
                redirect('pendaftaran/raport');
            } else if ($this->input->post('mode') == 'update') {
                $this->Pendaftaran_model->updateDataRaport();
                $this->uploadRaport('update');

                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">Nilai Raport Berhasil Diperbarui!</div>'
                );
                redirect('pendaftaran/raport');
            }
        }
    }

    public function uploadRaport($mode)
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'pdf';
        $this->load->library('upload', $config);

        

        if (!$this->upload->do_upload('raport')) {
  
            $this->session->set_flashdata(
                'upload_status',
                "<div class='alert alert-danger' role='alert'>File Raport Gagal Diupload! <br> ". $this->upload->display_errors() ." <br> </div>"
            );

        } else {
            $filename = $this->upload->data("file_name");

            if ($mode == 'update') {
                $raport = $this->Pendaftaran_model->getFileRaport();

                if ($raport != null) {
                    unlink($config['upload_path'] . $raport['filename']);
                }

                $this->Pendaftaran_model->updateScanRaport($filename);
                
            } else {
                $this->Pendaftaran_model->insertScanRaport($filename);
            }
            $this->session->set_flashdata(
                'upload_status',
                '<div class="alert alert-success" role="alert">File Raport Berhasil Diupload!</div>'
            );
           
        }
    }

    public function download_raport() {
        $raport = $this->Pendaftaran_model->getFileRaport();

        force_download('uploads/'.$raport['filename'],NULL);
    }
}
