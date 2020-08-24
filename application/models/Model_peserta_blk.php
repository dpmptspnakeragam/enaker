<?php

class Model_peserta_blk extends CI_model
{
	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('pesertablk');
		$this->db->join('pelatihan', 'pesertablk.pelatihan = pelatihan.id_pelatihan');
		$this->db->order_by('pesertablk.pelatihan', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function idmax()
	{
		$this->db->select_max('id_peserta', 'idmax');
		$this->db->from('pesertablk');
		$query = $this->db->get();
		return $query;
	}

	public function tambah_data($data)
	{
		$this->db->insert('pesertablk', $data);
	}

	public function ubah_data($data, $id_peserta)
	{
		$this->db->where('id_peserta', $id_peserta);
		$this->db->update('pesertablk', $data);
	}

	public function delete($id_peserta)
	{
		$this->db->where('id_peserta', $id_peserta);
		$this->db->delete('pesertablk');
	}

	public function tampil_pelatihan()
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$where = "tahun='2020' and status='BUKA'";
		$this->db->where($where);
		$query = $this->db->get();
		return $query;
	}
}
