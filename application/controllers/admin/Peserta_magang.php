<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_magang extends CI_controller
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
		$this->load->model('Model_peserta_magang');
		$data['peserta_magang'] = $this->Model_peserta_magang->tampil();
		$data['jenis_magang'] = $this->Model_peserta_magang->tampil_magang();
		$data['idmax'] = $this->Model_peserta_magang->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/peserta_magang', $data);
		$this->load->view('modals/tambah_pesertamagang', $data);
		$this->load->view('edit/edit_pesertamagang', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_ktp', 'NIK', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/peserta_magang');
		} else {
			$id_peserta = $this->input->post('id', true);
			$nama_peserta = $this->input->post('nama_peserta', true);
			$alamat = $this->input->post('alamat', true);
			$no_ktp = $this->input->post('no_ktp', true);
			$jenis_kelamin = $this->input->post('jenis_kelamin', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$no_hp = $this->input->post('no_hp', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$magang = $this->input->post('magang', true);

			$data = array(
				'id_pesertamagang' => $id_peserta,
				'nama_peserta' => $nama_peserta,
				'alamat' => $alamat,
				'no_ktp' => $no_ktp,
				'jenis_kelamin' => $jenis_kelamin,
				'tgl_lahir' => $tgl_lahir,
				'pendidikan' => $pendidikan,
				'tmpt_lahir' => $tmpt_lahir,
				'magang' => $magang,
				'no_hp' => $no_hp
			);

			$this->load->model('Model_peserta_magang');
			$this->Model_peserta_magang->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_peserta</b> berhasil !");
			redirect('admin/peserta_magang');
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_ktp', 'NIK', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/peserta_magang');
		} else {
			$id_peserta = $this->input->post('id_pesertamagang', true);
			$nama_peserta = $this->input->post('nama_peserta', true);
			$alamat = $this->input->post('alamat', true);
			$no_ktp = $this->input->post('no_ktp', true);
			$jenis_kelamin = $this->input->post('jenis_kelamin', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$no_hp = $this->input->post('no_hp', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$magang = $this->input->post('magang', true);
			$ket = $this->input->post('ket', true);

			$data = array(
				'id_pesertamagang' => $id_peserta,
				'nama_peserta' => $nama_peserta,
				'alamat' => $alamat,
				'no_ktp' => $no_ktp,
				'jenis_kelamin' => $jenis_kelamin,
				'tgl_lahir' => $tgl_lahir,
				'pendidikan' => $pendidikan,
				'tmpt_lahir' => $tmpt_lahir,
				'magang' => $magang,
				'no_hp' => $no_hp,
				'ket' => $ket
			);

			$this->load->model('Model_peserta_magang');
			$this->Model_peserta_magang->ubah_data($data, $id_peserta);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_peserta</b> berhasil !");
			redirect('admin/peserta_magang');
		}
	}

	public function hapus($id_pesertamagang)
	{
		$this->db->where('id_pesertamagang', $id_pesertamagang);
		$query = $this->db->get('pesertamagang');
		$row = $query->row();

		$this->load->model('Model_peserta_magang');
		$this->Model_peserta_magang->delete($id_pesertamagang);
		$this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_peserta</b> berhasil !");

		redirect('admin/peserta_magang');
	}
}
