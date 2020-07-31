<?php

class Pendaftaran_model extends CI_Model
{

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
