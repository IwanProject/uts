<?php

class Kelas_model extends CI_model
{
    public function getAllKelas()
    {
        return $this->db->get('kelas')->result_array();
    }

    public function tambahItemKelas()
    {
        $data = [
            "id_kls" => $this->input->post('id_kls', true),
            "nm_kls" => $this->input->post('nm_kls', true)

        ];

        $this->db->insert('kelas', $data);
    }
}
