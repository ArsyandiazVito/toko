<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKategori extends CI_Model
{
    public function data_baju()
    {
        return $this->db->get_where('barang', array('kategori' => 'baju'))->result();
    }

    public function data_celana()
    {
        return $this->db->get_where('barang', array('kategori' => 'celana'))->result();
    }

    public function data_topi()
    {
        return $this->db->get_where('barang', array('kategori' => 'topi'))->result();
    }
}
