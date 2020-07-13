<?php
class Data_perencanaan extends CI_controller {
	public function index()
	{
		$this->load->model('Model_regulasi');
		$data ['renstra'] = $this->Model_regulasi->tampil_data_perencanaan();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('data_perencanaan', $data);
		$this->load->view('templates/footer');
	}
}