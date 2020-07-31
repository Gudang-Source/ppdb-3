<?php

class User_model extends CI_Model
{
    public function getBioData($id)
    {
        $this->db->where('user_id', $id);
        return $this->db->get('biodata')->row_array();
    }

    public function setStatus($user_id, $status)
    {
        $this->db->where('id', $user_id);
        $this->db->update('user', ['status' => $status]);
    }

    public function getUsersBiodata()
    {
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('user', 'user.id = biodata.user_id');
        return $this->db->get()->result_array();
    }

    public function getPaginatedUsersBioData($limit, $start)
    {   
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('biodata');
        $this->db->join('user', 'user.id = biodata.user_id');
        return $this->db->get()->result_array();
    }
}