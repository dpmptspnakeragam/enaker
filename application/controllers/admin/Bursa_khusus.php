<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bursa_khusus extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->model('Model_bursa_khusus');
	}

	public function index()
	{
		$this->load->model('Model_bursa_khusus');
		$data ['bursa_khusus'] = $this->Model_bursa_khusus->tampil_data();
		$data ['idmax'] = $this->Model_bursa_khusus->idmax();
		$data ['sekolah'] = $this->Model_bursa_khusus->tampil_sekolah();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/bursa_khusus', $data);
		$this->load->view('modals/tambah_bursakhusus');
		$this->load->view('modals/cetak_filter_sekolah_enaker', $data);
		$this->load->view('edit/edit_bursakhusus', $data);
		$this->load->view('templates/footer_admin');
	}

	public function bursa_khusus_sekolah()
	{
		$this->load->model('Model_bursa_khusus');
		$data ['bursa_khusus'] = $this->Model_bursa_khusus->bursa_sekolah();
		$data ['idmax'] = $this->Model_bursa_khusus->idmax();
		$data ['nama'] = $this->Model_bursa_khusus->sekolah();
		$data ['sekolah'] = $this->Model_bursa_khusus->tampil_sekolah();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/bursa_khusus_sekolah', $data);
		$this->load->view('modals/tambah_bursakhusus_sekolah');
		$this->load->view('edit/edit_bursakhusus_sekolah', $data);
		$this->load->view('modals/cetak_filter_sekolah', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
		$this->form_validation->set_rules('lk', 'Jumlah Laki-laki', 'required');
		$this->form_validation->set_rules('pr', 'Jumlah Perempuan', 'required');
		$this->form_validation->set_rules('instansi', 'Instansi', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/bursa_khusus');
		}else{
			$id = $this->input->post('id', true);
			$sekolah = $this->input->post('sekolah', true);
			$lk = $this->input->post('lk', true);
			$pr = $this->input->post('pr', true);
			$instansi = $this->input->post('instansi', true);
			$tahun = $this->input->post('tahun', true);

			$data = array(
			'id_bk' => $id,
			'sekolah' => $sekolah,
			'lk' => $lk,
			'pr' => $pr,
			'instansi' => $instansi,
			'tahun' => $tahun
			);

			$this->load->model('Model_bursa_khusus');
			$this->Model_bursa_khusus->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$sekolah</b> berhasil !");
			echo '<script>history.back(self)</script>';
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('sekolah', 'Sekolah', 'required');
		$this->form_validation->set_rules('lk', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('pr', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('instansi', 'Nomor HP', 'required');
		$this->form_validation->set_rules('tahun', 'tahun', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/bursa_khusus');
		}else{
			$id_bk = $this->input->post('id_bk', true);
			$sekolah = $this->input->post('sekolah', true);
			$lk = $this->input->post('lk', true);
			$pr = $this->input->post('pr', true);
			$instansi = $this->input->post('instansi', true);
			$tahun = $this->input->post('tahun', true);

			$data = array(
			'id_bk' => $id_bk,
			'sekolah' => $sekolah,
			'lk' => $lk,
			'pr' => $pr,
			'instansi' => $instansi,
			'tahun' => $tahun
			);

			$this->load->model('Model_bursa_khusus');
			$this->Model_bursa_khusus->ubah_data($data, $id_bk);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$sekolah</b> berhasil !");
			echo '<script>history.back(self)</script>';
		}
	}

	public function hapus($id_bk){
		$this->db->where('id_bk',$id_bk);
	    $query = $this->db->get('bursa_khusus');
	    $row = $query->row();

	    $this->load->model('Model_bursa_khusus');
	    $this->Model_bursa_khusus->delete($id_bk);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->sekolah</b> berhasil !");
	    echo '<script>history.back(self)</script>';
	}

	public function cetak(){
		$this->load->library('Pdf');
		$sekolah = $this->input->post('sekolah', true);
		$tahun = $this->input->post('tahun', true);
		$this->load->model('Model_bursa_khusus');
		$data['get_sekolah'] = $this->Model_bursa_khusus->get_sekolah($sekolah);
		$data['cetak_bk'] = $this->Model_bursa_khusus->cetak_bk($sekolah, $tahun);
		$this->load->view('eksport/pdf_filter_sekolah_enaker', $data);
	}

}