<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jumlah_latih extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_profil_lpks');
		$data ['jumlah_latih'] = $this->Model_profil_lpks->tampil_jumlah_latih();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/jumlah_latih', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_alumni', 'Nama', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('phone', 'Nomor HP', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/alumni_lpk');
		}else{
			$data = [
			'id_alumni' => $this->input->post('id', true),
			'nama_alumni' => $this->input->post('nama_alumni', true),
			'tgl_lahir' => $this->input->post('tgl_lahir', true),
			'tmpt_lahir' => $this->input->post('tmpt_lahir', true),
			'phone' => $this->input->post('phone', true),
			'pekerjaan' => $this->input->post('pekerjaan', true),
			'alamat' => $this->input->post('alamat', true),
			'peusahaan' => $this->input->post('peusahaan', true)
			];
			$this->load->model('Model_alumni_lpks');
			$this->Model_alumni_lpks->tambah_data();
			redirect('admin/alumni_lpk');
		}
	}

	public function hapus($id_jumlah){
		$this->db->where('id_jumlah',$id_jumlah);
	    $query = $this->db->get('jumlah_latih');
	    $row = $query->row();

	    $this->load->model('Model_profil_lpks');
	    $this->Model_profil_lpks->delete($id_jumlah);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_lembaga</b> berhasil !");
	    
	    redirect('admin/jumlah_latih');
	}

}