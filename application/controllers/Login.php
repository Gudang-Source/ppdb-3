<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('home/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasi berhasil
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
  
        //jika usernya ada
        if ($user) {
            //jika usernya aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Password salah</div>');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email ini belum di aktivasi</div>');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
            Email belum pernah terdaftar</div>');
            redirect('login');
        }
    }




    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            ['is_unique' =>  'Email ini sudah terpakai!']
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'password dont match!',
                'min_length' => 'password too short!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('home/registration');
            $this->load->view('templates/auth_footer');
        } else {

            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $user_id = $this->db->insert_id();
            
            // Buat nomor pendaftaran
            $this->db->order_by('nopen', 'DESC');
            $query = $this->db->get('biodata', 1);
            $no_pendaftaran = date('Y') + "0001";
            if ($query->num_rows() > 0) {
                $result = $query->row();

                $no_pendaftaran = $result->nopen + 1;
            }

            $biodata = [
                'nopen' => $no_pendaftaran,
                'nik' => '',
                'school' => '',
                'noun' => '',
                'fullname' => '',
                'gender' => '',
                'born_place' => '',
                'date' => '',
                'alamat' => '',
                'user_id' => $user_id
            ];

            $this->db->insert('biodata', $biodata);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            Selamat akun anda sukses dibuat. silahkan login</div>');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
        Anda telah keluar</div>');
        redirect('login');
    }
    public function blocked()
    {
        $this->load->view('home/blocked');
    }
}
