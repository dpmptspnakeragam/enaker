<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni_lpk extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_alumni_lpks');
		$data ['alumnilpk'] = $this->Model_alumni_lpks->tampil_data();
		$data ['idmax'] = $this->Model_alumni_lpks->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/alumni_lpk', $data);
		$this->load->view('modals/tambah_alumnilpk');
		$this->load->view('edit/edit_alumnilpk', $data);
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
			$id_alumni = $this->input->post('id', true);
			$nama_alumni = $this->input->post('nama_alumni', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$phone = $this->input->post('phone', true);
			$pekerjaan = $this->input->post('pekerjaan', true);
			$alamat = $this->input->post('alamat', true);
			$perusahaan = $this->input->post('perusahaan', true);

			$data = array(
			'id_alumni' => $id_alumni,
			'nama_alumni' => $nama_alumni,
			'tgl_lahir' => $tgl_lahir,
			'tmpt_lahir' => $tmpt_lahir,
			'phone' => $phone,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'perusahaan' => $perusahaan
			);

			$this->load->model('Model_alumni_lpks');
			$this->Model_alumni_lpks->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>".$data['nama_alumni']."</b> berhasil !");
			redirect('admin/alumni_lpk');
		}
	}

	public function ubah()
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
			$id_alumni = $this->input->post('id_alumni', true);
			$nama_alumni = $this->input->post('nama_alumni', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$phone = $this->input->post('phone', true);
			$pekerjaan = $this->input->post('pekerjaan', true);
			$alamat = $this->input->post('alamat', true);
			$perusahaan = $this->input->post('perusahaan', true);

			$data = array(
			'id_alumni' => $id_alumni,
			'nama_alumni' => $nama_alumni,
			'tgl_lahir' => $tgl_lahir,
			'tmpt_lahir' => $tmpt_lahir,
			'phone' => $phone,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'perusahaan' => $perusahaan
			);

			$this->load->model('Model_alumni_lpks');
			$this->Model_alumni_lpks->ubah_data($data, $id_alumni);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_alumni</b> berhasil !");
			redirect('admin/alumni_lpk');
		}
	}

	public function hapus($id_alumni){
		$this->db->where('id_alumni',$id_alumni);
	    $query = $this->db->get('alumnilpk');
	    $row = $query->row();

	    $this->load->model('Model_alumni_lpks');
	    $this->Model_alumni_lpks->delete($id_alumni);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_alumni</b> berhasil !");
	    
	    redirect('admin/alumni_lpk');
	}
}