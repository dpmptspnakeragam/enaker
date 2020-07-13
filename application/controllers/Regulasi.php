<?php
class Regulasi extends CI_controller {
	public function index()
	{
		$this->load->model('Model_regulasi');
		$data ['peraturan'] = $this->Model_regulasi->tampil_peraturan();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('regulasi', $data);
		$this->load->view('templates/footer');
	}
}