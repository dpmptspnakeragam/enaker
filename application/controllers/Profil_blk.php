<?php
class Profil_blk extends CI_controller {
	public function index()
	{
		$this->load->model('Model_profil_blk');
		$data ['profile'] = $this->Model_profil_blk->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('profil_blk', $data);
		$this->load->view('templates/footer');
	}
}