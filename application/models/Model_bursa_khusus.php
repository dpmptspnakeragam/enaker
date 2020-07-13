<?php

class Model_bursa_khusus extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('bursa_khusus');  
        $query = $this->db->get();
        return $query;
	}

	public function bursa_sekolah()
	{
		$sekolah = $_SESSION['nama'];
		$this->db->select('*'); 
        $this->db->from('bursa_khusus');  
        $this->db->where('sekolah', $sekolah);  
        $query = $this->db->get();
        return $query;
	}

	public function sekolah()
	{
		$sekolah = $_SESSION['nama'];
		$this->db->select('*'); 
        $this->db->from('sekolah');  
        $this->db->where('nama_sekolah', $sekolah);  
        $query = $this->db->get()->result();
        return $query;
	}

	public function idmax()
	{
		$this->db->select_max('id_bk', 'idmax');
		$this->db->from('bursa_khusus');  
        $query = $this->db->get();
        return $query;
	}

	public function tambah_data($data){
		$this->db->insert('bursa_khusus', $data);
	}

	public function ubah_data($data, $id_bk){
		$this->db->where('id_bk', $id_bk);
		$this->db->update('bursa_khusus', $data);
	}

	public function delete($id) {
	$this->db->where('id_bk', $id);
	$this->db->delete('bursa_khusus');
	}

	public function tampil_sekolah()
	{
		$this->db->select('*'); 
        $this->db->from('sekolah');  
        $query = $this->db->get();
        return $query;
	}

	public function get_sekolah($sekolah)
	{
		$this->db->select('*'); 
        $this->db->from('sekolah');
        $this->db->where('nama_sekolah', $sekolah);    
        $query = $this->db->get();
        return $query;
	}

	public function cetak_bk($sekolah, $tahun)
	{
		$this->db->select('*'); 
        $this->db->from('bursa_khusus');  
        $where = ['sekolah' => $sekolah, 'tahun' => $tahun];
        $this->db->where($where); 
        $query = $this->db->get();
        return $query;
	}
}