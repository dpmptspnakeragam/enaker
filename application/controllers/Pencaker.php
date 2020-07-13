<?php
class Pencaker extends CI_controller {
	public function index()
	{
		$this->load->model('Model_pencaker');
		$data = $this->Model_pencaker->tampil_data();
		$d = $this->Model_pencaker->total_pencaker();
		$data = $this->Model_pencaker->id_nagari();
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlk($id->id_nagari);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdpr($id->id_nagari);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlk($id->id_nagari);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdpr($id->id_nagari);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplk($id->id_nagari);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmppr($id->id_nagari);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalk($id->id_nagari);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmapr($id->id_nagari);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlk($id->id_nagari);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdpr($id->id_nagari);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslk($id->id_nagari);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahspr($id->id_nagari);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplk($id->id_nagari);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahppr($id->id_nagari);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1($id->id_nagari);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1($id->id_nagari);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2($id->id_nagari);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2($id->id_nagari);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3($id->id_nagari);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3($id->id_nagari);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4($id->id_nagari);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4($id->id_nagari);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulk($id->id_nagari);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahupr($id->id_nagari);
		}
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pencaker', array('tampil_data' => $data, 'tampil_nagari' => $data, 'total_pencaker' => $d));
		$this->load->view('templates/footer');
	}

	public function detail_kecamatan($id_nagari)
	{
		$this->load->model('Model_pencaker');
		$d = $this->Model_pencaker->total_kecamatan($id_nagari);
		$data = $this->Model_pencaker->kecamatan($id_nagari);
		$data = $this->Model_pencaker->tampil_kecamatan($id_nagari);
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmaprkecamatan($id->id_nagari2);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslkkecamatan($id->id_nagari2);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahsprkecamatan($id->id_nagari2);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulkkecamatan($id->id_nagari2);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahuprkecamatan($id->id_nagari2);
		}
		$totalttsdlk = 0;
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('detail_kecamatan', array('tampil_kecamatan' => $data, 'kecamatan' => $data, 'total_kecamatan' => $d));
		$this->load->view('templates/footer');
	}

	public function detail_nagari($id_nagari2)
	{
		$this->load->model('Model_pencaker');
		$d = $this->Model_pencaker->total_nagari($id_nagari2);
		$data = $this->Model_pencaker->nagari($id_nagari2);
		$data = $this->Model_pencaker->tampil_nagari($id_nagari2);
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmaprkecamatan($id->id_nagari2);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslkkecamatan($id->id_nagari2);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahsprkecamatan($id->id_nagari2);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulkkecamatan($id->id_nagari2);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahuprkecamatan($id->id_nagari2);
		}
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('detail_nagari', array('tampil_nagari' => $data, 'nagari' => $data, 'total_nagari' => $d));
		$this->load->view('templates/footer');
	}
}