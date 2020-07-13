<?php

class Model_profil_lpks extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('profillpk');  
        $query = $this->db->get();
        return $query; 
	}
	public function tampil_jumlah_latih()
	{
		$this->db->select('*'); 
        $this->db->from('jumlah_latih'); 
        $this->db->join('profillpk', 'jumlah_latih.nama_lembaga=profillpk.id_profil');   
        $query = $this->db->get();
        return $query; 
	}
	public function idmax()
	{
		$this->db->select_max('id_profil', 'idmax');
		$this->db->from('profillpk');  
        $query = $this->db->get();
        return $query;
	}

	public function input($data)
	{
	    $this->db->insert('profillpk', $data);
 	}

	public function delete($id_profil) 
	{
		$this->db->where('id_profil', $id_profil);
		$this->db->delete('profillpk');
	}

	public function update($data, $id_profil){
		$this->db->where('id_profil', $id_profil);
		$this->db->update('profillpk', $data);
	}

	public function tampil_profil_pagination($limit, $start)
	{
		$this->db->select('*'); 
        $this->db->from('profillpk'); 
        $this->db->order_by('nama_lpk','asc');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
	}

	public function hitung_profil()
	{
		$this->db->select('*'); 
        $this->db->from('profillpk');  
        $query = $this->db->get()->num_rows();
        return $query;
	}
}