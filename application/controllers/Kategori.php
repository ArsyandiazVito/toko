<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKategori'); // Ensure the model is loaded
    }

    public function baju()
    {
        $data['judul'] = '';
        $data['baju'] = $this->ModelKategori->data_baju();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kategori/baju', $data);
        $this->load->view('templates/footer');
    }

    public function celana()
    {
        $data['judul'] = '';
        $data['celana'] = $this->ModelKategori->data_celana();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kategori/celana', $data);
        $this->load->view('templates/footer');
    }

    public function topi()
    {
        $data['judul'] = '';
        $data['topi'] = $this->ModelKategori->data_topi();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kategori/topi', $data);
        $this->load->view('templates/footer');
    }
}
