<?php

class Model_peserta_magang extends CI_model
{
	public function tampil()
	{
		$this->db->select('*');
		$this->db->from('pesertamagang');
		$this->db->join('pemagangan', 'pemagangan.id_magang=pesertamagang.magang');
		$query = $this->db->get();
		return $query;
	}

	public function idmax()
	{
		$this->db->select_max('id_pesertamagang', 'idmax');
		$this->db->from('pesertamagang');
		$query = $this->db->get();
		return $query;
	}

	public function tambah_data($data)
	{
		$this->db->insert('pesertamagang', $data);
	}

	public function ubah_data($data, $id_pesertamagang)
	{
		$this->db->where('id_pesertamagang', $id_pesertamagang);
		$this->db->update('pesertamagang', $data);
	}

	public function delete($id_pesertamagang)
	{
		$this->db->where('id_pesertamagang', $id_pesertamagang);
		$this->db->delete('pesertamagang');
	}

	public function tampil_magang()
	{
		$this->db->select('*');
		$this->db->from('pemagangan');
		$query = $this->db->get();
		return $query;
	}
}
