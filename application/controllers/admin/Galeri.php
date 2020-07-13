<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Galeri extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_galeri');
		$data ['galeri'] = $this->Model_galeri->tampil_data();
		$data ['idmax'] = $this->Model_galeri->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/galeri', $data);
		$this->load->view('modals/tambah_galeri');
		$this->load->view('templates/footer_admin');
	}

}