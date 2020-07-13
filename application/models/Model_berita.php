<?php

class Model_berita extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $query = $this->db->get();
        return $query;
	}

	public function tampil_berita()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis','1');
        $query = $this->db->get();
        return $query;
	}

	public function tampil_lowongan()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->join('jenis_berita', 'berita.id_jenis=jenis_berita.id_jenis');
        $where ="berita.id_jenis between 2 and 3 ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function tampil_jobfair()
	{
		
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->join('jenis_berita', 'berita.id_jenis=jenis_berita.id_jenis');
        $where ="berita.id_jenis between 4 and 5 ";
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}
	public function jenis_berita()
	{
		$this->db->select('*'); 
        $this->db->from('jenis_berita');  
        $query = $this->db->get();
        return $query;
	}
	public function idmax()
	{
		$this->db->select_max('id_berita', 'idmax');
		$this->db->from('berita');  
        $query = $this->db->get();
        return $query;
	}

	public function input($data)
	{
	    $this->db->insert('berita', $data);
 	}

 	public function update_bursa($data, $id_berita){
		$this->db->where('id_berita', $id_berita);
		$this->db->update('berita', $data);
	}

	public function update_info($data, $id_berita){
		$this->db->where('id_berita', $id_berita);
		$this->db->update('berita', $data);
	}

	public function delete($id_berita) 
	{
		$this->db->where('id_berita', $id_berita);
		$this->db->delete('berita');
	}

	public function tampil_berita_pagination($limit, $start)
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis','1');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
	}

	public function hitung_berita()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis','1');
        $query = $this->db->get()->num_rows();
        return $query;
	}

	public function berita_terbaru()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis','1');
        $this->db->order_by('tgl_berita','asc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query;
	}

	public function tampil_lowongan_pagination($limit, $start)
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $where ="id_jenis between 2 and 3 ";
        $this->db->where($where);
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
	}

	public function hitung_lowongan()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $where ="id_jenis between 2 and 3 ";
        $this->db->where($where);
        $query = $this->db->get()->num_rows();
        return $query;
	}

	public function lowongan_terbaru()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $where ="id_jenis between 2 and 3 ";
        $this->db->where($where);
        $this->db->order_by('tgl_berita','asc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query;
	}

	public function tampil_bursa_pagination($limit, $start)
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis', '4');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
	}

	public function hitung_bursa()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis', '4');
        $query = $this->db->get()->num_rows();
        return $query;
	}

	public function bursa_terbaru()
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_jenis', '4');
        $this->db->order_by('tgl_berita','asc');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query;
	}

	public function detail_berita($id_berita)
	{
		$this->db->select('*'); 
        $this->db->from('berita');  
        $this->db->where('id_berita', $id_berita);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query;
	}
}