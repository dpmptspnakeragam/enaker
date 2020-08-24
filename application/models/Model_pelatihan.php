<?php

class Model_pelatihan extends CI_model
{
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$this->db->order_by('tahun', 'DESC');
		$query = $this->db->get();
		return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_pelatihan', 'idmax');
		$this->db->from('pelatihan');
		$query = $this->db->get();
		return $query;
	}

	public function input($data)
	{
		$this->db->insert('pelatihan', $data);
	}

	public function update($data, $id)
	{
		$this->db->where('id_pelatihan', $id);
		$this->db->update('pelatihan', $data);
	}

	public function delete($id_pelatihan)
	{
		$this->db->where('id_pelatihan', $id_pelatihan);
		$this->db->delete('pelatihan');
	}

	public function tampil_pelatihan_pagination($limit, $start)
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$where = "status='BUKA'";
		$this->db->where($where);
		$this->db->order_by('id_pelatihan', 'desc');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

	public function hitung_pelatihan()
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$where = "tahun='2020' and status='BUKA'";
		$this->db->where($where);
		$query = $this->db->get()->num_rows();
		return $query;
	}
}
