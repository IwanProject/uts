<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JurusanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // mengeload atau memanggil model jurusan untuk digunakan ke beberapa function public
        $this->load->model('Jurusan_model'); // memanggil atau mengeload Jurusan model
    }

    public function index()
    {
        $data['title'] = "Halaman Jurusan"; // mendeklarasikan nama judul di halaman jurusan
        $data['jurusan'] = $this->Jurusan_model->getAllJurusan(); // memanggil function getAllJurusan di jurusan_model untuk ditampilkan di vew dengan parameter "jurusan"
        $this->load->view('templates/header', $data); // memanggil view bagian header
        $this->load->view('jurusan', $data); // memanggil view bagian body jurusan
        $this->load->view('templates/footer'); // memanggil view bagian footer
    }



    public function tambah()
    {
        $this->Jurusan_model->tambahItemJurusan(); // memanggil function getambahItemJurusan di jurusan_model untuk proses penambahan jurusan
        redirect('Jurusan'); // jika berhasil maka halaman akan di kembalikan ke halaman jurusan
    }
}
