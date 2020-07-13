<?php

class Model_galeri extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('galeri');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_galeri', 'idmax');
		$this->db->from('galeri');  
        $query = $this->db->get();
        return $query;
	}


	public function delete($id) {
	$this->db->where('id_galeri', $id);
	$this->db->delete('galeri');
	}
}