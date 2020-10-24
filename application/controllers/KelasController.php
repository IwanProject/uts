<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
    }

    public function index()
    {
        $data['title'] = "Halaman Kelas";
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $this->load->view('templates/header', $data);
        $this->load->view('kelas', $data);
        $this->load->view('templates/footer');
    }



    public function tambah()
    {
        $this->Kelas_model->tambahItemKelas();
        redirect('Kelas');
    }
}
