<?php

class Model_regulasi extends CI_model {
	public function tampil_peraturan()
	{
		$this->db->select('*'); 
        $this->db->from('peraturan');  
        $query = $this->db->get();
        return $query;
	}
	public function tampil_data_perencanaan()
	{
		$this->db->select('*'); 
        $this->db->from('renstra');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id', 'idmax');
		$this->db->from('peraturan');  
        $query = $this->db->get();
        return $query;
	}

	public function input($data)
	{
	    $this->db->insert('peraturan', $data);
 	}

 	public function update($data, $id){
		$this->db->where('id', $id);
		$this->db->update('peraturan', $data);
	}

	public function update_data_perencanaan($data, $id_perencanaan){
		$this->db->where('id_perencanaan', $id_perencanaan);
		$this->db->update('renstra', $data);
	}

	public function delete($id) 
	{
		$this->db->where('id', $id);
		$this->db->delete('peraturan');
	}
}