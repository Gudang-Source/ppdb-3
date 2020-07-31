
<?php

use Dompdf\Dompdf;

defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/dompdf/autoload.inc.php';

class Buktidaftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Pendaftaran_model');
    }

    public function generate()
    {
        $dompdf = new Dompdf();
        $data['biodata'] = $this->User_model->getBioData($this->session->userdata('id'));
        $data['raport'] = $this->Pendaftaran_model->getNilaiRaport();
        $html = $this->load->view('dokumen/buktidaftar', $data, TRUE);

        // Load HTML content 
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 
        $dompdf->setPaper('A4', 'potrait');

        // Render the HTML as PDF 
        $dompdf->render();

        // Output the generated PDF to Browser 
        $dompdf->stream('Bukti-Pendaftaran.pdf', ['Attachment' => FALSE]);
    }
}
