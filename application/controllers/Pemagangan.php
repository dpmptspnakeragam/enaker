<?php
class Pemagangan extends CI_controller {
	public function index()
	{
		$this->load->model('Model_pemagangan');
		$data ['pemagangan'] = $this->Model_pemagangan->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('pemagangan', $data);
		$this->load->view('templates/footer');
	}
}