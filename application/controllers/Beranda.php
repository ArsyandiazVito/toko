<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->ModelBarang->getBarang()->result();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = '';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('kategori/user', $data);
        $this->load->view('templates/footer', $data);
    }
    public function detail($id)
    {
        $data['barang'] = $this->ModelBarang->detail_brg($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar', $data);
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
