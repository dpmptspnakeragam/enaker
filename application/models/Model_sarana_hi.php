<?php

class Model_sarana_hi extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('saranahi');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_sarana', 'idmax');
		$this->db->from('saranahi');  
        $query = $this->db->get();
        return $query;
	}

	public function tambah_data($data){
		$this->db->insert('saranahi', $data);
	}

	public function update_data($data, $id_sarana){
		$this->db->where('id_sarana', $id_sarana);
		$this->db->update('saranahi', $data);
	}

	public function delete($id) {
	$this->db->where('id_sarana', $id);
	$this->db->delete('saranahi');
	}
}