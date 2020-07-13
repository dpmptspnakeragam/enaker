<?php
class Anggota extends CI_controller {
	public function index()
	{
		$this->load->model('Model_anggota');
		$data ['anggota'] = $this->Model_anggota->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('anggota');
		$this->load->view('templates/footer');
	}
}