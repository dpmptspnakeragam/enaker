<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Peraturan extends CI_controller
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
		$this->load->model('Model_regulasi');
		$data['peraturan'] = $this->Model_regulasi->tampil_peraturan();
		$data['data_perencanaan'] = $this->Model_regulasi->tampil_data_perencanaan();
		$data['idmax'] = $this->Model_regulasi->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/peraturan', $data);
		$this->load->view('modals/tambah_aturan');
		$this->load->view('edit/edit_peraturan', $data);
		$this->load->view('edit/edit_renstra', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$id = $this->input->post('id', true);
		$file = $_FILES['peraturan']['name'];
		$nama_peraturan = $this->input->post('nama_peraturan', true);
		$isi_peraturan = $this->input->post('isi_peraturan', true);

		if ($file = '') {
			$file = "";
		} else {
			$nmfile = "perturan-" . time();
			$config['upload_path'] = './assets/fileupload/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['file_name'] = $nmfile;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('peraturan')) {
				$file = $this->upload->data('file_name');
			}
		}

		$data = array(
			'id' => $id,
			'peraturan' => $file,
			'nama_peraturan' => $nama_peraturan,
			'isi_peraturan' => $isi_peraturan
		);
		$this->load->model('Model_regulasi');
		$this->Model_regulasi->input($data);
		$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_peraturan</b> berhasil !");
		redirect('admin/peraturan');
	}

	public function ubah()
	{
		$id = $this->input->post('id', true);
		$nama_peraturan = $this->input->post('nama_peraturan', true);
		$isi_peraturan = $this->input->post('isi_peraturan', true);

		if (empty($_FILES['peraturan']['name'])) {
			$file = $this->input->post('old', true);
		} else {
			$nmfile = "perturan-" . time();
			$config['upload_path'] = './assets/fileupload/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['file_name'] = $nmfile;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('peraturan')) {
				$file = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata("gagal", "Maaf, file <b>$nama_peraturan</b> gagal diunggah. Format file tidak sesuai !");
				redirect('admin/peraturan');
			}
		}

		$data = array(
			'id' => $id,
			'peraturan' => $file,
			'nama_peraturan' => $nama_peraturan,
			'isi_peraturan' => $isi_peraturan
		);
		$this->load->model('Model_regulasi');
		$this->Model_regulasi->update($data, $id);
		$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_peraturan</b> berhasil !");
		redirect('admin/peraturan');
	}

	public function ubah_data_perencanaan()
	{
		$id_renstra = $this->input->post('id_renstra', true);
		$nama_renstra = $this->input->post('nama_renstra', true);

		if (empty($_FILES['file']['name'])) {
			$file = $this->input->post('old', true);
		} else {
			$nmfile = "data_perencanaan-" . time();
			$config['upload_path'] = './assets/fileupload/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['file_name'] = $nmfile;

			$this->load->library('upload', $config);
			if ($this->upload->do_upload('file')) {
				$file = $this->upload->data('file_name');
			} else {
				$this->session->set_flashdata("gagal", "Maaf, file <b>$nama_renstra</b> gagal diunggah. Format file tidak sesuai !");
				redirect('admin/peraturan');
			}
		}

		$data = array(
			'id_renstra' => $id_renstra,
			'nama_renstra' => $nama_renstra,
			'file_renstra' => $file
		);
		$this->load->model('Model_regulasi');
		$this->Model_regulasi->update_data_perencanaan($data, $id_renstra);
		$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_renstra</b> berhasil !");
		redirect('admin/peraturan');
	}

	public function hapus($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('peraturan');
		$row = $query->row();

		unlink("./assets/fileupload/$row->peraturan");

		$this->load->model('Model_regulasi');
		$this->Model_regulasi->delete($id);
		$this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_peraturan</b> berhasil !");
		redirect('admin/peraturan');
	}
}
