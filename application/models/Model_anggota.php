<?php

class Model_anggota extends CI_model {
	public function tampil_data()
	{
		return $this->db->get('anggota')->result_array(); 
	}
}