<?php
class Sarana_hi extends CI_controller {
	public function index()
	{
		$this->load->model('Model_sarana_hi');
		$data ['saranahi'] = $this->Model_sarana_hi->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('sarana_hi', $data);
		$this->load->view('templates/footer');
	}
}