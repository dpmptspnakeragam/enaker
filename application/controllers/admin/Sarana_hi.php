<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sarana_hi extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_sarana_hi');
		$data ['saranahi'] = $this->Model_sarana_hi->tampil_data();
		$data ['idmax'] = $this->Model_sarana_hi->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/sarana_hi', $data);
		$this->load->view('modals/tambah_saranahi');
		$this->load->view('edit/edit_saranahi', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('bpjs', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('jmlh_pekerja', 'Jumlah Tenaga Kerja', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/sarana_hi');
		}else{
			$data = [
			'id_sarana' => $this->input->post('id', true),
			'serikat' => $this->input->post('serikat', true),
			'lks' => $this->input->post('lks', true),
			'nama_perusahaan' => $this->input->post('nama_perusahaan', true),
			'jmlh_pekerja' => $this->input->post('jmlh_pekerja', true),
			'bpjs' => $this->input->post('bpjs', true),
			'pp' => $this->input->post('pp', true),
			'pkb' => $this->input->post('pkb', true)
			];
			$this->load->model('Model_sarana_hi');
			$this->Model_sarana_hi->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>".$data['nama_perusahaan']."</b> berhasil !");
			redirect('admin/sarana_hi');
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('bpjs', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('jmlh_pekerja', 'Jumlah Tenaga Kerja', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/sarana_hi');
		}else{
			$id_sarana = $this->input->post('id_sarana', true);
			$serikat = $this->input->post('serikat', true);
			$lks = $this->input->post('lks', true);
			$nama_perusahaan = $this->input->post('nama_perusahaan', true);
			$jmlh_pekerja = $this->input->post('jmlh_pekerja', true);
			$bpjs = $this->input->post('bpjs', true);
			$pp = $this->input->post('pp', true);
			$pkb = $this->input->post('pkb', true);

			$data = array(
				'id_sarana' => $id_sarana,
				'serikat' => $serikat,
				'lks' => $lks,
				'nama_perusahaan' => $nama_perusahaan,
				'jmlh_pekerja' => $jmlh_pekerja,
				'bpjs' => $bpjs,
				'pp' => $pp,
				'pkb' => $pkb
			);
			$this->load->model('Model_sarana_hi');
			$this->Model_sarana_hi->update_data($data, $id_sarana);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_perusahaan</b> berhasil !");
			redirect('admin/sarana_hi');
		}
	}

	public function hapus($id_sarana){
		$this->db->where('id_sarana',$id_sarana);
	    $query = $this->db->get('saranahi');
	    $row = $query->row();

	    $this->load->model('Model_sarana_hi');
	    $this->Model_sarana_hi->delete($id_sarana);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_perusahaan</b> berhasil !");
	    
	    redirect('admin/sarana_hi');
	}

}