<?php
class Bursa_khusus extends CI_controller {
	public function index()
	{
		$this->load->model('Model_bursa_khusus');
		$data ['bursa_khusus'] = $this->Model_bursa_khusus->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('bursa_khusus', $data);
		$this->load->view('templates/footer');
	}
}