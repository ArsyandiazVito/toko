<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->ModelBarang->getBarang()->result();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
         $data['total'] = $this->ModelUser->getTotalUsers();
         $data['totalbarang'] = $this->ModelBarang->getTotalBarang();
        $data['judul'] = '';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('temp_admin/footer', $data);
    }
    public function da()
    {
        $data['judul'] = 'Profil Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('temp_admin/footer');
    }
}
