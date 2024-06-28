<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->ModelBarang->getBarang()->result();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Data Barang';
        $this->load->view('temp_admin/header');
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/data_barang', $data);
        $this->load->view('temp_admin/footer');
    }

    public function tambahaksi()
    {
        $namabarang = $this->input->post('namabarang');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './img';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'namabarang' => $namabarang,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
        );

        $this->ModelBarang->tambah_barang($data, 'barang');
        redirect('data_barang');
    }



    public function edit($id)
    {

        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = '';
        $data['barang'] = $this->ModelBarang->getBarangById($id)->row();
        $this->load->view('temp_admin/header');
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('temp_admin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $namabarang = $this->input->post('namabarang');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './img';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "gagal";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'namabarang' => $namabarang,
            'harga' => $harga,
            'stok' => $stok,
            'deskripsi' => $deskripsi,
            'gambar' => $gambar,
        );

        $this->ModelBarang->update_barang($data, $id);
        redirect('data_barang');
    }

    public function hapus($id)
    {
        $this->ModelBarang->hapus_barang($id);
        redirect('data_barang');
    }
}
