<?php

class Model_penempatan_bkk extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('penempatan_bkk');
        $query = $this->db->get();
        return $query;
    }

    public function bursa_sekolah()
    {
        $sekolah = $_SESSION['nama'];
        $this->db->select('*');
        $this->db->from('penempatan_bkk');
        $this->db->where('nama_sekolah', $sekolah);
        $query = $this->db->get();
        return $query;
    }

    public function sekolah()
    {
        $sekolah = $_SESSION['nama'];
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->where('nama_sekolah', $sekolah);
        $query = $this->db->get()->result();
        return $query;
    }

    public function idmax()
    {
        $this->db->select_max('id_bkk', 'idmax');
        $this->db->from('penempatan_bkk');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_data($data)
    {
        $this->db->insert('penempatan_bkk', $data);
    }

    public function ubah_data($data, $id_bkk)
    {
        $this->db->where('id_bkk', $id_bkk);
        $this->db->update('penempatan_bkk', $data);
    }

    public function delete($id_bkk)
    {
        $this->db->where('id_bkk', $id_bkk);
        $this->db->delete('penempatan_bkk');
    }

    public function tampil_sekolah()
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $query = $this->db->get();
        return $query;
    }

    public function get_sekolah($sekolah)
    {
        $this->db->select('*');
        $this->db->from('sekolah');
        $this->db->where('nama_sekolah', $sekolah);
        $query = $this->db->get();
        return $query;
    }

    public function cetak_bk($sekolah, $tahun)
    {
        $this->db->select('*');
        $this->db->from('penempatan_bkk');
        $where = ['sekolah' => $sekolah, 'tahun' => $tahun];
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
}
