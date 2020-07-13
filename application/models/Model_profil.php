<?php

class Model_profil extends CI_model {
	public function tampil_data_profil()
	{
		$this->db->select('*'); 
        $this->db->from('profile');   
		$this->db->where('id','1');
        $query = $this->db->get();
        return $query;
	}
	public function tampil_data_pejabat()
	{
		$this->db->select('*'); 
        $this->db->from('penjabat');   
		$this->db->order_by('id');
        $query = $this->db->get();
        return $query;
	}
	public function tampil_data_anggota()
	{
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->join('penjabat', 'anggota.id = penjabat.id');
		$query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_anggota', 'idmax');
		$this->db->from('anggota');  
        $query = $this->db->get();
        return $query;
	}

	public function input_anggota($data)
	{
	    $this->db->insert('anggota', $data);
 	}

	public function delete_anggota($id_anggota) 
	{
		$this->db->where('id_anggota', $id_anggota);
		$this->db->delete('anggota');
	}

	public function update_profil($data, $id){
		$this->db->where('id', $id);
		$this->db->update('profile', $data);
	}

	public function update_pejabat($data, $id){
		$this->db->where('id', $id);
		$this->db->update('penjabat', $data);
	}

	public function update_anggota($data, $id_anggota){
		$this->db->where('id_anggota', $id_anggota);
		$this->db->update('anggota', $data);
	}

	public function tampil_anggota_by_id($id){
		$this->db->select('*'); 
        $this->db->from('penjabat');  
        $this->db->join('anggota', 'penjabat.id=anggota.id');
        $where ="penjabat.id=$id";
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function tampil_pejabat_by_id($id){
		$this->db->select('*'); 
        $this->db->from('penjabat');  
        $where ="penjabat.id=$id";
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}
}