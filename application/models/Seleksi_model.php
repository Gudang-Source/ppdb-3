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

            // replace data di table hasil seleksi
            $this->db->replace(
                'hasil_seleksi', 
                [
                    'id' => $id, 
                    'user_id' => $result['user_id'], 
                    'score' => $result['score']
                ]);
            $id = $id + 1;

            // ubah status user yg lulus
            $this->db->where('id', $result['user_id']);
            $this->db->update('user', ['accepted' => true]);
        }
    }

    public function getHasil($limit, $start)
    {
        $this->db->limit($limit, $start);
        $this->db->order_by('user.score', 'DESC');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('biodata', 'biodata.user_id = user.id');
        return $this->db->get()->result_array();
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