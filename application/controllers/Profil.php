<?php
class Profil extends CI_controller {
	public function index()
	{
		$this->load->model('Model_profil');
		$data ['profile'] = $this->Model_profil->tampil_data_profil();
		$data ['penjabat'] = $this->Model_profil->tampil_data_pejabat();
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('profil', $data);
		$this->load->view('templates/footer');
	}

	public function detail_anggota($id)
	{
		$this->load->model('Model_profil');
		$data ['anggota'] = $this->Model_profil->tampil_anggota_by_id($id);
		$data ['pejabat'] = $this->Model_profil->tampil_pejabat_by_id($id);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('anggota', $data);
		$this->load->view('templates/footer');
	}
}