<?php
class Alumni_lpks extends CI_controller {
	public function index()
	{
		$this->load->model('Model_alumni_lpks');
		$data ['alumnilpk'] = $this->Model_alumni_lpks->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('alumni_lpks', $data);
		$this->load->view('templates/footer');
	}
}