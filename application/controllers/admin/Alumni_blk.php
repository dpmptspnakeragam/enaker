<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumni_blk extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_alumni_pelatihan');
		$data ['alumni'] = $this->Model_alumni_pelatihan->tampil_data();
		$data ['idmax'] = $this->Model_alumni_pelatihan->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/alumni_blk', $data);
		$this->load->view('modals/tambah_alumniblk');
		$this->load->view('edit/edit_alumniblk', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_alumni', 'Nama', 'required');
		$this->form_validation->set_rules('tl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tp_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('phone', 'No. HP', 'required');
		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/alumni_blk');
		}else{
			$id_alumni = $this->input->post('id', true);
			$nama_alumni = $this->input->post('nama_alumni', true);
			$tl_lahir = $this->input->post('tl_lahir', true);
			$tp_lahir = $this->input->post('tp_lahir', true);
			$agama = $this->input->post('agama', true);
			$phone = $this->input->post('phone', true);
			$pekerjaan = $this->input->post('pekerjaan', true);
			$alamat = $this->input->post('alamat', true);
			$perusahaan = $this->input->post('perusahaan', true);
			$pelatihan = $this->input->post('pelatihan', true);

			$data = array (
			'id_alumni' => $id_alumni,
			'nama_alumni' => $nama_alumni,
			'tl_lahir' => $tl_lahir,
			'tp_lahir' => $tp_lahir,
			'agama' => $agama,
			'phone' => $phone,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'perusahaan' => $perusahaan,
			'pelatihan' => $pelatihan
			);

			$this->load->model('Model_alumni_pelatihan');
			$this->Model_alumni_pelatihan->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_alumni</b> berhasil !");
			redirect('admin/alumni_blk');
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_alumni', 'Nama', 'required');
		$this->form_validation->set_rules('tl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tp_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('agama', 'Agama', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('phone', 'No. HP', 'required');
		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/alumni_blk');
		}else{
			$id_alumni = $this->input->post('id_alumni', true);
			$nama_alumni = $this->input->post('nama_alumni', true);
			$tl_lahir = $this->input->post('tl_lahir', true);
			$tp_lahir = $this->input->post('tp_lahir', true);
			$agama = $this->input->post('agama', true);
			$phone = $this->input->post('phone', true);
			$pekerjaan = $this->input->post('pekerjaan', true);
			$alamat = $this->input->post('alamat', true);
			$perusahaan = $this->input->post('perusahaan', true);
			$pelatihan = $this->input->post('pelatihan', true);

			$data = array (
			'id_alumni' => $id_alumni,
			'nama_alumni' => $nama_alumni,
			'tl_lahir' => $tl_lahir,
			'tp_lahir' => $tp_lahir,
			'agama' => $agama,
			'phone' => $phone,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'perusahaan' => $perusahaan,
			'pelatihan' => $pelatihan
			);
			
			$this->load->model('Model_alumni_pelatihan');
			$this->Model_alumni_pelatihan->ubah_data($data, $id_alumni);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_alumni</b> berhasil !");
			redirect('admin/alumni_blk');
		}
	}

	public function hapus($id_alumni){
		$this->db->where('id_alumni',$id_alumni);
	    $query = $this->db->get('alumni');
	    $row = $query->row();

	    $this->load->model('Model_alumni_pelatihan');
	    $this->Model_alumni_pelatihan->delete($id_alumni);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_alumni</b> berhasil !");
	    
	    redirect('admin/alumni_blk');
	}

}