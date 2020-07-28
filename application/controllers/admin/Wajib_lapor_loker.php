<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Wajib_lapor_loker extends CI_controller
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
		$this->load->model('Model_wajib_lapor_loker');
		$data['wl_naker'] = $this->Model_wajib_lapor_loker->tampil_data();
		$data['idmax'] = $this->Model_wajib_lapor_loker->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/wajib_lapor_loker', $data);
		$this->load->view('modals/tambah_wl');
		$this->load->view('edit/edit_wl', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('posisi', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('penempatan', 'Jumlah Tenaga Kerja', 'required');
		$this->form_validation->set_rules('usia', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('gaji', 'Jumlah Tenaga Kerja', 'required');
		$this->form_validation->set_rules('lk', 'Jumlah Laki-Laki', 'required');
		$this->form_validation->set_rules('pr', 'Jumlah Perempuan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/wajib_lapor_loker');
		} else {
			$id_perusahaan = $this->input->post('id', true);
			$nama_perusahaan = $this->input->post('nama_perusahaan', true);
			$posisi = $this->input->post('posisi', true);
			$penempatan = $this->input->post('penempatan', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$usia = $this->input->post('usia', true);
			$status = $this->input->post('status', true);
			$gaji = $this->input->post('gaji', true);
			$lk = $this->input->post('lk', true);
			$pr = $this->input->post('pr', true);

			$data = array(
				'id_perusahaan' => $id_perusahaan,
				'nama_perusahaan' => $nama_perusahaan,
				'posisi' => $posisi,
				'penempatan' => $penempatan,
				'pendidikan' => $pendidikan,
				'usia' => $usia,
				'status' => $status,
				'gaji' => $gaji,
				'lk' => $lk,
				'pr' => $pr
			);
			$this->load->model('Model_wajib_lapor_loker');
			$this->Model_wajib_lapor_loker->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_perusahaan</b> berhasil !");
			redirect('admin/wajib_lapor_loker');
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
		$this->form_validation->set_rules('posisi', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('penempatan', 'Jumlah Tenaga Kerja', 'required');
		$this->form_validation->set_rules('usia', 'Jumlah Peserta BPJS', 'required');
		$this->form_validation->set_rules('gaji', 'Jumlah Tenaga Kerja', 'required');
		$this->form_validation->set_rules('lk', 'Jumlah Laki-Laki', 'required');
		$this->form_validation->set_rules('pr', 'Jumlah Perempuan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/wajib_lapor_loker');
		} else {
			$id_perusahaan = $this->input->post('id_perusahaan', true);
			$nama_perusahaan = $this->input->post('nama_perusahaan', true);
			$posisi = $this->input->post('posisi', true);
			$penempatan = $this->input->post('penempatan', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$usia = $this->input->post('usia', true);
			$status = $this->input->post('status', true);
			$gaji = $this->input->post('gaji', true);
			$lk = $this->input->post('lk', true);
			$pr = $this->input->post('pr', true);

			$data = array(
				'id_perusahaan' => $id_perusahaan,
				'nama_perusahaan' => $nama_perusahaan,
				'posisi' => $posisi,
				'penempatan' => $penempatan,
				'pendidikan' => $pendidikan,
				'usia' => $usia,
				'status' => $status,
				'gaji' => $gaji,
				'lk' => $lk,
				'pr' => $pr
			);
			$this->load->model('Model_wajib_lapor_loker');
			$this->Model_wajib_lapor_loker->ubah_data($data, $id_perusahaan);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_perusahaan</b> berhasil !");
			redirect('admin/wajib_lapor_loker');
		}
	}

	public function hapus($id_perusahaan)
	{
		$this->db->where('id_perusahaan', $id_perusahaan);
		$query = $this->db->get('perusahaan_naker');
		$row = $query->row();

		$this->load->model('Model_wajib_lapor_loker');
		$this->Model_wajib_lapor_loker->delete($id_perusahaan);
		$this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_perusahaan</b> berhasil !");

		redirect('admin/wajib_lapor_loker');
	}
}
