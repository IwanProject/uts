<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{


    public function index()
    {
        $data['title'] = "Halaman Home";  // mendeklarasikan nama judul di halaman Home
        $this->load->view('templates/header', $data); // memanggil view bagian header
        $this->load->view('home', $data); // memanggil view bagian body Home
        $this->load->view('templates/footer'); // memanggil view bagian footer
    }
}
