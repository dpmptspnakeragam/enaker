<?php

class Model_profil_blk extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('profile');  
        $this->db->where('id', '2'); 
        $query = $this->db->get();
        return $query;
	}

	public function update($data, $id){
		$this->db->where('id', $id);
		$this->db->update('profile', $data);
	}
}