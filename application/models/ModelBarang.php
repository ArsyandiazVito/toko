<?php
class ModelBarang extends CI_Model
{
    public function getBarang()
    {
        return $this->db->get('barang');
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id' => $id]);
    }

    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_barang($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('barang', $data);
    }

    public function hapus_barang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }

    public function detail_brg($id)
    {
        $result = $this->db->where('id', $id)->get('barang');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function getTotalBarang()
    {
        return $this->db->count_all('barang');
    }
}
