<?php
class Alumniblk extends CI_controller {
	public function index()
	{
		$this->load->model('Model_alumni_pelatihan');
		$data ['alumni'] = $this->Model_alumni_pelatihan->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('alumniblk', $data);
		$this->load->view('templates/footer');
	}
}