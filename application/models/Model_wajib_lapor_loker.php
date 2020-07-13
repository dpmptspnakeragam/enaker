<?php

class Model_wajib_lapor_loker extends CI_model {
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

	public function tambah_data($data){
		$this->db->insert('perusahaan_naker', $data);
	}

	public function ubah_data($data, $id_perusahaan){
		$this->db->where('id_perusahaan', $id_perusahaan);
		$this->db->update('perusahaan_naker', $data);
	}

	public function delete($id) {
	$this->db->where('id_perusahaan', $id);
	$this->db->delete('perusahaan_naker');
	}
}