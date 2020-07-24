<?php

class Model_penempatan_kerja extends CI_model
{
    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('penempatan_kerja');
        $query = $this->db->get();
        return $query;
    }
    public function idmax()
    {
        $this->db->select_max('id_penempatan', 'idmax');
        $this->db->from('penempatan_kerja');
        $query = $this->db->get();
        return $query;
    }

    public function tambah_data($data)
    {
        $this->db->insert('penempatan_kerja', $data);
    }

    public function ubah_data($data, $id_penempatan)
    {
        $this->db->where('id_penempatan', $id_penempatan);
        $this->db->update('penempatan_kerja', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_penempatan', $id);
        $this->db->delete('penempatan_kerja');
    }
}
