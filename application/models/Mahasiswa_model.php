<?php

class Mahasiswa_model extends CI_model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function insert($data)
    {
        $this->db->insert('mahasiswa', $data);
    }
}
