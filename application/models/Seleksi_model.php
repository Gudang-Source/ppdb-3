<?php

class Seleksi_model extends CI_Model
{
    public function proses()
    {
        $this->db->order_by('score', 'DESC');
        $this->db->limit(30);
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('biodata', 'biodata.user_id = user.id');
        $results = $this->db->get()->result_array();
        
        $id = date('Y') . "0001";
        foreach ($results as $result) {
            $this->db->replace(
                'hasil_seleksi', 
                [
                    'id' => $id, 
                    'user_id' => $result['user_id'], 
                    'score' => $result['score']
                ]);
            $id = $id + 1;
        }
    }

    public function getHasil($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->order_by('score', 'DESC');
        $this->db->select('*');
        $this->db->from('hasil_seleksi');
        $this->db->join('biodata', 'biodata.user_id = hasil_seleksi.user_id');
        return $this->db->get()->result_array();
    }

    public function getUserHasil()
    {
        $this->db->where('hasil_seleksi.user_id', $this->session->userdata('id'));
        $this->db->select('*');
        $this->db->from('hasil_seleksi');
        $this->db->join('biodata', 'biodata.user_id = hasil_seleksi.user_id');
        $this->db->join('user', 'user.id = hasil_seleksi.user_id');
        $result =  $this->db->get();

        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return NULL;
        }
    }

    public function cari()
    {
        $this->db->where('nopen', $this->input->post('cari'));
        $this->db->select('*');
        $this->db->from('hasil_seleksi');
        $this->db->join('biodata', 'biodata.user_id = hasil_seleksi.user_id');
        return $this->db->get()->result_array();
    }
}