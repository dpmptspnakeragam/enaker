<?php

class Model_alumni_lpks extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('alumnilpk');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_alumni', 'idmax');
        $this->db->from('alumnilpk');  
        $query = $this->db->get();
        return $query;
	}

	public function tambah_data($data){
		$this->db->insert('alumnilpk', $data);
	}

	public function ubah_data($data, $id_alumni){
		$this->db->where('id_alumni', $id_alumni);
		$this->db->update('alumnilpk', $data);
	}

	public function delete($id) {
	$this->db->where('id_alumni', $id);
	$this->db->delete('alumnilpk');
	}
}