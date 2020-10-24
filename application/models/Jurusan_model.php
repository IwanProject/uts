<?php

class Jurusan_model extends CI_model
{
    public function getAllJurusan()
    {
        // proses mengambil data dari tabel jurusan kemudian di masukkan ke dalam array untuk ditampilkan sesuai urutan array
        return $this->db->get('jurusan')->result_array();
    }

    public function tambahItemJurusan()
    {
        //data di masukkan ke dalam bentuk array untuk proses insert data
        $data = [
            // name yang ada di database       //name yang ada di inputan
            "id_jurusan" => $this->input->post('id_jurusan', true),
            "nm_jurusan" => $this->input->post('nm_jurusan', true)

        ];
        // kemudian data dimasukkan ke function insert dengan parameter(nama tabel,datanya)
        $this->db->insert('jurusan', $data);
    }
}
