<?php

class Model_alumni_pelatihan extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('alumni');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_alumni', 'idmax');
		$this->db->from('alumni');  
        $query = $this->db->get();
        return $query;
	}

	public function tambah_data($data){
		$this->db->insert('alumni', $data);
	}

	public function ubah_data($data, $id_alumni){
		$this->db->where('id_alumni', $id_alumni);
		$this->db->update('alumni', $data);
	}

	public function delete($id_alumni) {
	$this->db->where('id_alumni', $id_alumni);
	$this->db->delete('alumni');
	}
}