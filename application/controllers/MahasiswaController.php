<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MahasiswaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }


    public function index()
    {

        $data['title'] = "Halaman Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa', $data);
        $this->load->view('templates/footer');
    }





    public function upload()
    {
        // proses penyimpanan data ke dalam database   field di urutan sesuai dengan urutan yang ada di database
        $nim = $this->input->post('nim'); // variabel nim menampung data inputan post nim
        $nama = $this->input->post('nama'); // variabel nama menampung data inputan post nama
        $jenkel = $this->input->post('jenkel'); // variabel jenkel menampung data inputan post jenkel
        $angkatan = $this->input->post('angkatan'); // variabel angkatan menampung data inputan post angkatan


        // proses data di insert ke array dan di kirim ke Mahasiswa model
        $this->Mahasiswa_model->insert(array(
            'nim' => $nim,
            'nama' => $nama,
            'jenkel' => $jenkel,
            'angkatan' => $angkatan

        ));
        redirect('Mahasiswa');
    }
}
