<?php

class Model_wajib_lapor_loker extends CI_model
{
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('perusahaan_naker');
		$query = $this->db->get();
		return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_perusahaan', 'idmax');
		$this->db->from('perusahaan_naker');
		$query = $this->db->get();
		return $query;
	}

	public function tambah_data($data)
	{
		$this->db->insert('perusahaan_naker', $data);
	}

	public function ubah_data($data, $id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		$this->db->update('perusahaan_naker', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_perusahaan', $id);
		$this->db->delete('perusahaan_naker');
	}

	public function company()
	{
		$this->db->select('*');
		$this->db->from('company');
		$query = $this->db->get();
		return $query;
	}

	public function tampil_perusahaan()
	{
		$perusahaan = $_SESSION['nama'];
		$this->db->select('*');
		$this->db->from('perusahaan_naker');
		$this->db->where('nama_perusahaan', $perusahaan);
		$query = $this->db->get();
		return $query;
	}

	public function nama_perusahaan()
	{
		$perusahaan = $_SESSION['nama'];
		$this->db->select('*');
		$this->db->from('company');
		$this->db->where('nama_company', $perusahaan);
		$query = $this->db->get()->result();
		return $query;
	}

	public function cetak_wl_loker($tgl_awal, $tgl_akhir)
	{
		$this->db->select('*');
		$this->db->from('perusahaan_naker');
		$this->db->where('tanggal >=', $tgl_awal);
		$this->db->where('tanggal <=', $tgl_akhir);
		$query = $this->db->get();
		return $query;
	}

	public function cetak_wl_loker_perusahaan($tgl_awal, $tgl_akhir, $perusahaan)
	{
		$this->db->select('*');
		$this->db->from('perusahaan_naker');
		$this->db->where('tanggal >=', $tgl_awal);
		$this->db->where('tanggal <=', $tgl_akhir);
		$this->db->where('perusahaan', $perusahaan);
		$query = $this->db->get();
		return $query;
	}
}
