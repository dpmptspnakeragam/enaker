<?php

class Model_pencaker extends CI_model {
	public function tampil_data()
	{
		$this->db->select('*'); 
        $this->db->from('nagari'); 
        $this->db->order_by('nama_nagari', 'ASC'); 
        $query = $this->db->get()->result();
        return $query;
	}

	public function id_nagari()
	{
		$this->db->select('*'); 
        $this->db->from('nagari'); 
        $query = $this->db->get()->result();
        return $query;
	}

	public function total_pencaker()
	{
		$this->db->select('Count(*) as total_pencaker'); 
        $this->db->from('penganggur'); 
        $query = $this->db->get()->row()->total_pencaker;
        return $query;
	}

	public function jumlahttsdlk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'Tidak Tamat SD', 'jk'=>'L', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahttsdpr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'Tidak Tamat SD', 'jk'=>'P', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsdlk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SD', 'jk'=>'L', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsdpr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SD', 'jk'=>'P','kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmplk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMP', 'jk'=>'L', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmppr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMP', 'jk'=>'P', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmalk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMA/MA', 'jk'=>'L', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmapr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMA/MA', 'jk'=>'P', 'kecamatan'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahdlk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D1', 'D2', 'D3') AND jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahdpr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D1', 'D2', 'D3') AND jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahslk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D4', 'S1') AND jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahspr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D4', 'S1') AND jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahplk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahppr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk1($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 15 and 19 AND jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr1($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 15 and 19 AND jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk2($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 20 and 29 AND jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr2($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 20 and 29 AND jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk3($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 30 and 44 AND jk='L' and kecamatan=".$id_nagari." ");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr3($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 30 and 44 AND jk='P' and kecamatan=".$id_nagari." ");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk4($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 45 and 54 AND jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr4($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 45 and 54 AND jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='L' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='P' and kecamatan=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}



	//----------------Kecamatan----------------------------------------------------



	public function tampil_kecamatan($id_nagari)
	{
		$this->db->select('*'); 
        $this->db->from('nagari2'); 
        $this->db->join('nagari', 'nagari2.id_nagari=nagari.id_nagari'); 
        $this->db->where('nagari2.id_nagari', $id_nagari); 
        $this->db->order_by('nama_nagari2', 'ASC');  
        $query = $this->db->get()->result();
        return $query;
	}

	public function kecamatan($id_nagari)
	{
		$this->db->select('*'); 
        $this->db->from('nagari'); 
        $this->db->where('id_nagari', $id_nagari); 
        $query = $this->db->get()->result();
        return $query;
	}

	public function total_kecamatan($id_nagari)
	{
		$this->db->select('Count(*) as total_kecamatan'); 
        $this->db->from('penganggur'); 
        $this->db->where('kecamatan', $id_nagari); 
        $query = $this->db->get()->row()->total_kecamatan;
        return $query;
	}

	public function jumlahttsdlkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'Tidak Tamat SD', 'jk'=>'L', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahttsdprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'Tidak Tamat SD', 'jk'=>'P', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsdlkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SD', 'jk'=>'L', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsdprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SD', 'jk'=>'P','nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmplkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMP', 'jk'=>'L', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmpprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMP', 'jk'=>'P', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmalkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMA/MA', 'jk'=>'L', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsmaprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $where = array('pendidikan'=>'SMA/MA', 'jk'=>'P', 'nagari'=> $id_nagari);
        $this->db->where($where);
        $query = $this->db->get();
        return $query;
	}

	public function jumlahdlkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D1', 'D2', 'D3') AND jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahdprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D1', 'D2', 'D3') AND jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahslkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D4', 'S1') AND jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahsprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("pendidikan in('D4', 'S1') AND jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahplkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahpprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk1kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 15 and 19 AND jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr1kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 15 and 19 AND jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk2kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 20 and 29 AND jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr2kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 20 and 29 AND jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk3kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 30 and 44 AND jk='L' and nagari=".$id_nagari." ");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr3kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 30 and 44 AND jk='P' and nagari=".$id_nagari." ");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulk4kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 45 and 54 AND jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahupr4kecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("umur between 45 and 54 AND jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahulkkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='L' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}

	public function jumlahuprkecamatan($id_nagari)
	{
		$select ="count(jk) as jumlah_jk";
		$this->db->select($select); 
        $this->db->from('penganggur'); 
        $this->db->where("jk='P' and nagari=".$id_nagari."");
        $query = $this->db->get();
        return $query;
	}


	//--------------------------Nagari-----------------------------



	public function tampil_nagari($id_nagari2)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur'); 
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $this->db->where('nagari', $id_nagari2); 
        $this->db->order_by('nama_lengkap', 'ASC'); 
        $query = $this->db->get()->result();
        return $query;
	}

	public function nagari($id_nagari)
	{
		$this->db->select('*'); 
        $this->db->from('nagari'); 
        $this->db->where('id_nagari', $id_nagari); 
        $query = $this->db->get()->result();
        return $query;
	}

	public function total_nagari($id_nagari)
	{
		$this->db->select('Count(*) as total_nagari'); 
        $this->db->from('penganggur'); 
        $this->db->where('nagari', $id_nagari); 
        $query = $this->db->get()->row()->total_nagari;
        return $query;
	}



	//-------------------------------------
	public function idmax()
	{
		$this->db->select_max('id_penganggur', 'idmax');
        $this->db->from('penganggur');  
        $query = $this->db->get();
        return $query;
	}

	public function get_kecamatan()
	{
		$this->db->select('*');
        $this->db->from('nagari');  
        $this->db->order_by('nama_nagari');  
        $query = $this->db->get()->result();
        return $query;
	}

	public function get_nagari()
	{
		$this->db->select('*');
        $this->db->from('nagari2');  
        $this->db->join('nagari', 'nagari2.id_nagari=nagari.id_nagari');  
        $this->db->order_by('nama_nagari2', 'asc');  
        $query = $this->db->get()->result();
        return $query;
	}

	public function get_pelatihan()
	{
		$this->db->select('*');
        $this->db->from('pelatihan');    
        $query = $this->db->get()->result();
        return $query;
	}

	public function get_penganggur()
	{
		$this->db->select('*');
        $this->db->from('penganggur');    
        $query = $this->db->get()->result();
        return $query;
	}

	public function tambah_data($data){
		$this->db->insert('penganggur', $data);
	}

	public function ubah_data($data, $id_penganggur){
		$this->db->where('id_penganggur', $id_penganggur);
		$this->db->update('penganggur', $data);
	}

	public function delete($id_penganggur) {
	$this->db->where('id_penganggur', $id_penganggur);
	$this->db->delete('penganggur');
	}


	//-------session-------------------


	public function get_session()
	{
		$username = $_SESSION['username'];
		$this->db->select('*');
        $this->db->from('pengguna');    
        $this->db->where('username', $username);    
        $query = $this->db->get()->result();
        return $query;
	}


	//--------Cetak Enaker---------------------

	public function tampil_pencaker($id_nagari)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur'); 
        $this->db->join('nagari', 'penganggur.kecamatan = nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari = nagari2.id_nagari2'); 
        $this->db->where('kecamatan', $id_nagari); 
        $this->db->order_by('nama_lengkap', 'ASC'); 
        $query = $this->db->get();
        return $query; 
	}

	public function filter_pelatihan()
	{
		$this->db->select('*'); 
        $this->db->from('pelatihan');  
        $query = $this->db->get();
        return $query;
	}

	public function get_filter_pelatihan_enaker($kecamatan, $pelatihan, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $this->db->join('pengguna', 'penganggur.nagari=pengguna.id_nagari2'); 
        $where = ['kecamatan' => $kecamatan, 'pelatihan' => $pelatihan, 'jk' => $jk];
        $this->db->where($where); 
        $query = $this->db->get();
        return $query;
	}

	public function get_filter_pendidikan_enaker($kecamatan, $pendidikan, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $where = ['kecamatan' => $kecamatan, 'pendidikan' => $pendidikan, 'jk' => $jk];
        $this->db->where($where); 
        $query = $this->db->get();
        return $query;
	}

	public function get_filter_umur_enaker($kecamatan, $umurdari, $umursampai, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $this->db->where('kecamatan', $kecamatan);
        $this->db->where('umur >=', $umurdari);
        $this->db->where('umur <=', $umursampai);
        $this->db->where('jk', $jk);
        $query = $this->db->get();
        return $query;
	}


	//--------Cetak Nagari---------------------

	public function tampil_pencaker_nagari($id_nagari)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur'); 
        $this->db->join('nagari', 'penganggur.kecamatan = nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari = nagari2.id_nagari2'); 
        $this->db->where('nagari', $id_nagari); 
        $this->db->order_by('nama_lengkap', 'ASC'); 
        $query = $this->db->get();
        return $query; 
	}

	public function get_filter_pelatihan_nagari($nagari, $pelatihan, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $this->db->join('pengguna', 'penganggur.nagari=pengguna.id_nagari2'); 
        $where = ['nagari' => $nagari, 'pelatihan' => $pelatihan, 'jk' => $jk];
        $this->db->where($where); 
        $query = $this->db->get();
        return $query;
	}

	public function get_filter_pendidikan_nagari($nagari, $pendidikan, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $where = ['nagari' => $nagari, 'pendidikan' => $pendidikan, 'jk' => $jk];
        $this->db->where($where); 
        $query = $this->db->get();
        return $query;
	}

	public function get_filter_umur_nagari($nagari, $umurdari, $umursampai, $jk)
	{
		$this->db->select('*'); 
        $this->db->from('penganggur');  
        $this->db->join('nagari', 'penganggur.kecamatan=nagari.id_nagari'); 
        $this->db->join('nagari2', 'penganggur.nagari=nagari2.id_nagari2'); 
        $this->db->where('nagari', $nagari);
        $this->db->where('umur >=', $umurdari);
        $this->db->where('umur <=', $umursampai);
        $this->db->where('jk', $jk);
        $query = $this->db->get();
        return $query;
	}
}