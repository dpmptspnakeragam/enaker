<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelatihan extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_pelatihan');
		$data['pelatihan'] = $this->Model_pelatihan->tampil_data();
		$data['idmax'] = $this->Model_pelatihan->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/pelatihan', $data);
		$this->load->view('modals/tambah_pelatihan');
		$this->load->view('edit/edit_pelatihan');
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$id = $this->input->post('id', true);
		$pelatihan = $this->input->post('pelatihan', true);
		$persyaratan = $this->input->post('persyaratan', true);
		$tgl_awal = $this->input->post('tgl_awal', true);
		$tgl_akhir = $this->input->post('tgl_akhir', true);
		$tahun = $this->input->post('tahun', true);
		$gambar = $_FILES['gambar']['name'];

		if ($file = '') {
		} else {
			$nmfile = "pelatihan-" . time();
			$config['upload_path'] = './assets/imgupload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $nmfile;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_pelatihan' => $id,
			'pelatihan' => $pelatihan,
			'persyaratan' => $persyaratan,
			'gambar' => $gambar,
			'tgl_awal' => $tgl_awal,
			'tgl_akhir' => $tgl_akhir,
			'tahun' => $tahun
		);
		$this->load->model('Model_pelatihan');
		$this->Model_pelatihan->input($data);
		$this->session->set_flashdata("berhasil", "Tambah data <b>$pelatihan</b> berhasil !");
		redirect('admin/pelatihan');
	}

	public function ubah()
	{
		$id = $this->input->post('id_pelatihan', true);
		$pelatihan = $this->input->post('pelatihan', true);
		$persyaratan = $this->input->post('persyaratan', true);
		$tgl_awal = $this->input->post('tgl_awal', true);
		$tgl_akhir = $this->input->post('tgl_akhir', true);
		$tahun = $this->input->post('tahun', true);
		$status = $this->input->post('status', true);

		if (empty($_FILES['gambar']['name'])) {
			$gambar = $this->input->post('old', true);
		} else {
			$nmfile = "pelatihan-" . time();
			$config['upload_path'] = './assets/imgupload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $nmfile;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$gambar = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id_pelatihan' => $id,
			'pelatihan' => $pelatihan,
			'persyaratan' => $persyaratan,
			'gambar' => $gambar,
			'tgl_awal' => $tgl_awal,
			'tgl_akhir' => $tgl_akhir,
			'tahun' => $tahun,
			'status' => $status
		);
		$this->load->model('Model_pelatihan');
		$this->Model_pelatihan->update($data, $id);
		$this->session->set_flashdata("berhasil", "Ubah data <b>$pelatihan</b> berhasil !");
		redirect('admin/pelatihan');
	}

	public function hapus($id_pelatihan)
	{
		$this->db->where('id_pelatihan', $id_pelatihan);
		$query = $this->db->get('pelatihan');
		$row = $query->row();

		unlink("./assets/imgupload/$row->pelatihan");

		$this->load->model('Model_pelatihan');
		$this->Model_pelatihan->delete($id_pelatihan);
		$this->session->set_flashdata("gagal", "Hapus data <b>$row->pelatihan</b> berhasil !");

		redirect('admin/pelatihan');
	}
}
