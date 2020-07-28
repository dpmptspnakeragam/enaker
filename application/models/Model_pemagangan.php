<?php

class Model_pemagangan extends CI_model
{
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('pemagangan');
		$query = $this->db->get();
		return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_magang', 'idmax');
		$this->db->from('pemagangan');
		$query = $this->db->get();
		return $query;
	}

	public function input($data)
	{
		$this->db->insert('pemagangan', $data);
	}

	public function update($data, $id_magang)
	{
		$this->db->where('id_magang', $id_magang);
		$this->db->update('pemagangan', $data);
	}

	public function delete($id_magang)
	{
		$this->db->where('id_magang', $id_magang);
		$this->db->delete('pemagangan');
	}
}
