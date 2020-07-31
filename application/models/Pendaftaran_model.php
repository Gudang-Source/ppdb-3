<?php
include APPPATH . 'third_party/faker/autoload.php';

class Pendaftaran_model extends CI_Model
{
    // buat data seed untuk 50 pendaftar
    public function seed()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 50; $i++) {
            $user_data = array(
                'name' => $faker->name,
                'email' => $faker->email,
                'image' => 'default.jpg',
                'password' => password_hash('userpassword', PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'status' => 'pendaftar',
                'date_created' => time(),
                'score' => 0
            );
            $this->db->insert('user', $user_data);
            $user_id = $this->db->insert_id();

            $biodata = array(
                'nopen' => $this->getNomorPendaftaran(),
                'nik' => $faker->randomNumber(8),
                'nisn' => $faker->randomNumber(8),
                'noun' => $faker->randomNumber(8),
                'school' => $faker->company,
                'year_graduated' => $faker->numberBetween(2018, 2020),
                'fullname' => $faker->name,
                'gender' => $faker->randomElement($array = array('Male', 'Female')),
                'born_place' => $faker->randomElement($array = array('Bandung', 'Kab. Bandung', 'Cimahi')),
                'date' => $faker->numberBetween(1, 30) . $faker->monthName() . $faker->numberBetween(1998, 2004),
                'alamat' => $faker->address,
                'user_id' => $user_id,
                'verified' => 0,
                'father_name' => $faker->name('male'),
                'father_job' => $faker->jobTitle,
                'father_address' => $faker->address,
                'father_phone' => $faker->phoneNumber,
                'mother_name' => $faker->name('female'),
                'mother_job' => $faker->jobTitle,
                'mother_address' => $faker->address,
                'mother_phone' => $faker->phoneNumber,
            );

            $this->db->insert('biodata', $biodata);

            $scan_raport = array(
                'filename' => 'document.pdf',
                'user_id' => $user_id
            );
            $this->db->insert('scan_raport', $scan_raport);

            $nilai_agama = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'agama',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_agama);

            $nilai_ppkn = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'ppkn',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_ppkn);

            $nilai_b_indonesia = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'b_indonesia',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_b_indonesia);

            $nilai_matematika = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'matematika',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_matematika);

            $nilai_ipa = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'ipa',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_ipa);

            $nilai_ips = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'ips',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_ips);

            $nilai_b_inggris = array(
                'user_id' => $user_id,
                'mata_pelajaran' => 'b_inggris',
                'semester_1' => $faker->numberBetween(75, 95),
                'semester_2' => $faker->numberBetween(75, 95),
                'semester_3' => $faker->numberBetween(75, 95),
                'semester_4' => $faker->numberBetween(75, 95),
                'semester_5' => $faker->numberBetween(75, 95),
            );
            $this->db->insert('nilai_raport', $nilai_b_inggris);
        }

        $this->User_model->setStatus($user_id, 'terdaftar');
        $this->Pendaftaran_model->hitungScore($user_id);
        $this->Pendaftaran_model->verifikasiBiodata($user_id);

        echo "Data Seed Success!";
    }


    public function getNomorPendaftaran()
    {
        // Buat nomor pendaftaran
        $this->db->order_by('nopen', 'DESC');
        $query = $this->db->get('biodata', 1);
        $no_pendaftaran = date('Y') + "0001";
        if ($query->num_rows() > 0) {
            $result = $query->row();

            $no_pendaftaran = $result->nopen + 1;
        }
        return $no_pendaftaran;
    }

    public function tambahDataBiodata()
    {
        $data = [
            "nik" => $this->input->post('nik', true),
            "nisn" => $this->input->post('nisn', true),
            "school" => $this->input->post('school', true),
            "year_graduated" => $this->input->post('year_graduated', true),
            "noun" => $this->input->post('noun', true),
            "fullname" => $this->input->post('fullname', true),
            "gender" => $this->input->post('gender', true),
            "born_place" => $this->input->post('born_place', true),
            "date" => $this->input->post('date', true),
            "alamat" => $this->input->post('alamat', true),
            "father_name" => $this->input->post('father_name', true),
            "father_job" => $this->input->post('father_job', true),
            "father_address" => $this->input->post('father_address', true),
            "father_phone" => $this->input->post('father_phone', true),
            "mother_name" => $this->input->post('mother_name', true),
            "mother_job" => $this->input->post('mother_job', true),
            "mother_address" => $this->input->post('mother_address', true),
            "mother_phone" => $this->input->post('mother_phone', true),
        ];

        $this->db->where('nopen',  $this->input->post('nopen'));
        $this->db->update('biodata', $data);
    }

    public function verifikasiBiodata($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->update('biodata', ['verified' => 1]);
    }

    public function tambahDataRaport()
    {
        // insert nilai tiap mapel
        $this->insertNilai('agama');
        $this->insertNilai('ppkn');
        $this->insertNilai('b_indonesia');
        $this->insertNilai('matematika');
        $this->insertNilai('ipa');
        $this->insertNilai('ips');
        $this->insertNilai('b_inggris');
    }

    public function updateDataRaport()
    {
        // update nilai tiap mapel
        $this->updateNilai('agama');
        $this->updateNilai('ppkn');
        $this->updateNilai('b_indonesia');
        $this->updateNilai('matematika');
        $this->updateNilai('ipa');
        $this->updateNilai('ips');
        $this->updateNilai('b_inggris');
    }

    public function getNilaiRaport()
    {
        // get nilai raport untuk user yg sedang login

        $this->db->where('user_id', $this->session->userdata('id'));
        $result = $this->db->get('nilai_raport')->result_array();

        $data = [];

        // jika nilai raport belum di input return null
        if ($result == NULL) {
            return NULL;
        } else {

            // tambah nilai tiap mapel ke array data
            foreach ($result as $nilai) {
                $mapel = $nilai['mata_pelajaran'];

                for ($i = 1; $i <= 5; $i++) {
                    $data[$mapel . $i] = $nilai['semester_' . $i];
                }
            }
        }

        return $data;
    }

    public function getNilaiRaportbyId($user_id)
    {
        // get nilai raport untuk user yg sedang login

        $this->db->where('user_id', $user_id);
        $result = $this->db->get('nilai_raport')->result_array();

        $data = [];

        // jika nilai raport belum di input return null
        if ($result == NULL) {
            return NULL;
        } else {

            // tambah nilai tiap mapel ke array data
            foreach ($result as $nilai) {
                $mapel = $nilai['mata_pelajaran'];

                for ($i = 1; $i <= 5; $i++) {
                    $data[$mapel . $i] = $nilai['semester_' . $i];
                }
            }
        }

        return $data;
    }

    public function hitungScore($user_id)
    {
        // get nilai raport
        $raport = $this->getNilaiRaportbyId($user_id);

        $hasil = 0;
        $nilai_mapel = 0;

        // jumlahkan nilai tiap mapel per semester lalu hitung rata2 nya 
        // tambahkan rata2 nya ke variabel hasil
        for ($i = 1; $i <= 5; $i++) {
            $nilai_mapel = 0;

            $nilai_mapel += $raport['agama'.$i];
            $nilai_mapel += $raport['ppkn'.$i];
            $nilai_mapel += $raport['b_indonesia'.$i];
            $nilai_mapel += $raport['matematika'.$i];
            $nilai_mapel += $raport['ipa'.$i];
            $nilai_mapel += $raport['ips'.$i];
            $nilai_mapel += $raport['b_inggris'.$i];

            $average = $nilai_mapel / 7;
            $hasil += $average;
        }

        // insert hasil ke user record
        $this->db->where('id', $user_id);
        $this->db->update('user', ['score' => $hasil]);
    }

    public function insertScanRaport($filename)
    {
        $user_id = $this->session->userdata('id');
        $data['filename'] = $filename;
        $data['user_id'] = $user_id;
        $this->db->insert('scan_raport', $data);
    }

    public function updateScanRaport($filename)
    {
        $user_id = $this->session->userdata('id');
        $data['filename'] = $filename;
        $data['user_id'] = $user_id;
        $this->db->where('user_id', $user_id);
        $this->db->update('scan_raport', $data);
    }

    public function getFileRaport()
    {
        $this->db->where('user_id', $this->session->userdata('id'));
        $query = $this->db->get('scan_raport');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return NULL;
    }

    public function getFileRaportbyId($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('scan_raport');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        }

        return NULL;
    }


    private function insertNilai($mapel)
    {
        $data = [];

        $data['mata_pelajaran'] = $mapel;

        // add nilai matapelajaran tiap semester
        for ($i = 1; $i <= 5; $i++) {
            $data['semester_' . $i] = $this->input->post($mapel . $i, true);
        }

        $data['user_id'] = $this->session->userdata('id');

        $this->db->insert('nilai_raport', $data);
    }

    private function updateNilai($mapel)
    {
        $data = [];

        $data['mata_pelajaran'] = $mapel;
        $data['user_id'] = $this->session->userdata('id');
        // add nilai matapelajaran tiap semester
        for ($i = 1; $i <= 5; $i++) {
            $data['semester_' . $i] = $this->input->post($mapel . $i, true);
        }

        $this->db->where(['user_id' => $data['user_id'], 'mata_pelajaran' => $mapel]);
        $this->db->update('nilai_raport', $data);
    }
}
