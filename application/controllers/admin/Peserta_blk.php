<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Peserta_blk extends CI_controller
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
		$this->load->model('Model_peserta_blk');
		$data['peserta_blk'] = $this->Model_peserta_blk->tampil();
		$data['jenis_pelatihan'] = $this->Model_peserta_blk->tampil_pelatihan();
		$data['idmax'] = $this->Model_peserta_blk->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/peserta_blk', $data);
		$this->load->view('modals/tambah_pesertablk', $data);
		$this->load->view('edit/edit_pesertablk', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_ktp', 'NIK', 'required');
		$this->form_validation->set_rules('jenis_klamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/peserta_blk');
		} else {
			$id_peserta = $this->input->post('id', true);
			$nama_peserta = $this->input->post('nama_peserta', true);
			$alamat = $this->input->post('alamat', true);
			$no_ktp = $this->input->post('no_ktp', true);
			$jenis_klamin = $this->input->post('jenis_klamin', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$no_hp = $this->input->post('no_hp', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$pelatihan = $this->input->post('pelatihan', true);

			$data = array(
				'id_peserta' => $id_peserta,
				'nama_peserta' => $nama_peserta,
				'no_ktp' => $no_ktp,
				'jenis_klamin' => $jenis_klamin,
				'tgl_lahir' => $tgl_lahir,
				'tmpt_lahir' => $tmpt_lahir,
				'pendidikan' => $pendidikan,
				'pelatihan' => $pelatihan,
				'alamat' => $alamat,
				'no_hp' => $no_hp
			);

			$this->load->model('Model_peserta_blk');
			$this->Model_peserta_blk->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_peserta</b> berhasil !");
			redirect('admin/peserta_blk');
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_peserta', 'Nama Peserta', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_ktp', 'NIK', 'required');
		$this->form_validation->set_rules('jenis_klamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('no_hp', 'No. HP', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		if ($this->form_validation->run() == FALSE) {
			redirect('admin/peserta_blk');
		} else {
			$id_peserta = $this->input->post('id_peserta', true);
			$nama_peserta = $this->input->post('nama_peserta', true);
			$alamat = $this->input->post('alamat', true);
			$no_ktp = $this->input->post('no_ktp', true);
			$jenis_klamin = $this->input->post('jenis_klamin', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$no_hp = $this->input->post('no_hp', true);
			$pendidikan = $this->input->post('pendidikan', true);
			$pelatihan = $this->input->post('pelatihan', true);
			$ket = $this->input->post('ket', true);

			$data = array(
				'id_peserta' => $id_peserta,
				'nama_peserta' => $nama_peserta,
				'no_ktp' => $no_ktp,
				'jenis_klamin' => $jenis_klamin,
				'tgl_lahir' => $tgl_lahir,
				'tmpt_lahir' => $tmpt_lahir,
				'pendidikan' => $pendidikan,
				'pelatihan' => $pelatihan,
				'alamat' => $alamat,
				'no_hp' => $no_hp,
				'ket' => $ket
			);

			$this->load->model('Model_peserta_blk');
			$this->Model_peserta_blk->ubah_data($data, $id_peserta);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_peserta</b> berhasil !");
			redirect('admin/peserta_blk');
		}
	}

	public function hapus($id_peserta)
	{
		$this->db->where('id_peserta', $id_peserta);
		$query = $this->db->get('pesertablk');
		$row = $query->row();

		$this->load->model('Model_peserta_blk');
		$this->Model_peserta_blk->delete($id_peserta);
		$this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_peserta</b> berhasil !");

		redirect('admin/peserta_blk');
	}
}
