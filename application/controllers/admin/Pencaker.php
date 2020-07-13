<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencaker extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_pencaker');
		$idmax = $this->Model_pencaker->idmax();
		$nagari = $this->Model_pencaker->get_nagari();
		$kecamatan = $this->Model_pencaker->get_kecamatan();
		$pelatihan = $this->Model_pencaker->get_pelatihan();
		$data = $this->Model_pencaker->tampil_data();
		$d = $this->Model_pencaker->total_pencaker();
		$data = $this->Model_pencaker->id_nagari();
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlk($id->id_nagari);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdpr($id->id_nagari);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlk($id->id_nagari);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdpr($id->id_nagari);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplk($id->id_nagari);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmppr($id->id_nagari);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalk($id->id_nagari);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmapr($id->id_nagari);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlk($id->id_nagari);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdpr($id->id_nagari);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslk($id->id_nagari);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahspr($id->id_nagari);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplk($id->id_nagari);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahppr($id->id_nagari);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1($id->id_nagari);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1($id->id_nagari);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2($id->id_nagari);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2($id->id_nagari);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3($id->id_nagari);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3($id->id_nagari);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4($id->id_nagari);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4($id->id_nagari);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulk($id->id_nagari);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahupr($id->id_nagari);
		}

		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/pencaker', array('idmax' => $idmax, 'kecamatan' => $kecamatan, 'nagari' => $nagari, 'pelatihan' => $pelatihan, 'tampil_data' => $data, 'tampil_nagari' => $data, 'total_pencaker' => $d));
		$this->load->view('modals/tambah_pencaker');
		$this->load->view('templates/footer_admin');
	}

	public function detail_kecamatan($id_nagari)
	{
		$this->load->model('Model_pencaker');
		$pelatihan = $this->Model_pencaker->filter_pelatihan();
		$d = $this->Model_pencaker->total_kecamatan($id_nagari);
		$data = $this->Model_pencaker->kecamatan($id_nagari);
		$data = $this->Model_pencaker->tampil_kecamatan($id_nagari);
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmaprkecamatan($id->id_nagari2);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslkkecamatan($id->id_nagari2);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahsprkecamatan($id->id_nagari2);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulkkecamatan($id->id_nagari2);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahuprkecamatan($id->id_nagari2);
		}
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/detail_kecamatan', array('pelatihan' => $pelatihan, 'tampil_kecamatan' => $data, 'kecamatan' => $data, 'total_kecamatan' => $d));
		$this->load->view('modals/cetak_filter_pelatihan_enaker');
		$this->load->view('modals/cetak_filter_pendidikan_enaker');
		$this->load->view('modals/cetak_filter_umur_enaker');
		$this->load->view('templates/footer_admin');
	}

	public function detail_nagari($id_nagari2)
	{
		$this->load->model('Model_pencaker');
		$idmax = $this->Model_pencaker->idmax();
		$nagari = $this->Model_pencaker->get_nagari();
		$kecamatan = $this->Model_pencaker->get_kecamatan();
		$pelatihan = $this->Model_pencaker->get_pelatihan();
		$d = $this->Model_pencaker->total_nagari($id_nagari2);
		$data = $this->Model_pencaker->nagari($id_nagari2);
		$data = $this->Model_pencaker->tampil_nagari($id_nagari2);
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/detail_nagari', array('idmax' => $idmax, 'kecamatan' => $kecamatan, 'nagari' => $nagari, 'pelatihan' => $pelatihan, 'tampil_nagari' => $data, 'nagari' => $data, 'total_nagari' => $d));
		$this->load->view('modals/tambah_pencaker');
		$this->load->view('edit/edit_pencaker');
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
		$this->form_validation->set_rules('umur', 'umur', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('jorong', 'Jorong', 'required');
		$this->form_validation->set_rules('phone', 'No. HP', 'required');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required');
		$this->form_validation->set_rules('keterampilan', 'Keterampilan', 'required');
		$this->form_validation->set_rules('pelatihan', 'Pelatihan', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect_back();
		}else{
			$id_penganggur = $this->input->post('id', true);
			$nama_lengkap = $this->input->post('nama_lengkap', true);
			$jk = $this->input->post('jk', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$kecamatan = $this->input->post('kecamatan', true);
			$umur = $this->input->post('umur', true);
			$nik = $this->input->post('nik', true);
			$nagari = $this->input->post('nagari', true);
			$pelatihan = $this->input->post('pelatihan', true);
			$jorong = $this->input->post('jorong', true);
			$keterampilan = $this->input->post('keterampilan', true);
			$phone = $this->input->post('phone', true);
			$jurusan = $this->input->post('jurusan', true);
			$pekerjaan = $this->input->post('pekerjaan', true);

			$data = array (
			'id_penganggur' => $id_penganggur,
			'nama_lengkap' => $nama_lengkap,
			'jk' => $jk,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'kecamatan' => $kecamatan,
			'umur' => $umur,
			'nik' => $nik,
			'nagari' => $nagari,
			'pelatihan' => $pelatihan
			);

			$this->load->model('Model_pencaker');
			$this->Model_pencaker->tambah_data($data);
			$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_lengkap</b> berhasil !");
			echo '<script>history.back(self)</script>';
		}
	}

	public function ubah()
	{
		$this->form_validation->set_rules('nama_lengkap', 'Nama', 'required');
		$this->form_validation->set_rules('jk', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('tmpt_lahir', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');
		$this->form_validation->set_rules('umur', 'umur', 'required');
		$this->form_validation->set_rules('nik', 'nik', 'required');
		$this->form_validation->set_rules('kecamatan', 'No. HP', 'required');
		$this->form_validation->set_rules('nagari', 'nagari', 'required');
		if ( $this->form_validation->run() == FALSE)
		{
			redirect('admin/alumni_blk');
		}else{
			$id_alumni = $this->input->post('id_alumni', true);
			$nama_lengkap = $this->input->post('nama_lengkap', true);
			$jk = $this->input->post('jk', true);
			$tmpt_lahir = $this->input->post('tmpt_lahir', true);
			$tgl_lahir = $this->input->post('tgl_lahir', true);
			$kecamatan = $this->input->post('kecamatan', true);
			$umur = $this->input->post('umur', true);
			$nik = $this->input->post('nik', true);
			$nagari = $this->input->post('nagari', true);
			$pelatihan = $this->input->post('pelatihan', true);

			$data = array (
			'id_alumni' => $id_alumni,
			'nama_lengkap' => $nama_lengkap,
			'jk' => $jk,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'kecamatan' => $kecamatan,
			'umur' => $umur,
			'nik' => $nik,
			'nagari' => $nagari,
			'pelatihan' => $pelatihan
			);
			
			$this->load->model('Model_alumni_pelatihan');
			$this->Model_alumni_pelatihan->ubah_data($data, $id_alumni);
			$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_lengkap</b> berhasil !");
			echo '<script>history.back(self)</script>';
		}
	}

	public function hapus($id_penganggur){
		$this->db->where('id_penganggur',$id_penganggur);
	    $query = $this->db->get('penganggur');
	    $row = $query->row();

	    $this->load->model('Model_pencaker');
	    $this->Model_pencaker->delete($id_penganggur);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_lengkap</b> berhasil !");
	    
	  echo '<script>history.back(self)</script>';
	}

	public function detail_pencaker()
	{
		$this->load->model('Model_pencaker');
		$session = $this->Model_pencaker->get_session();
		foreach ($session as $row) {
			$row->id_nagari2;
		}
		$idmax = $this->Model_pencaker->idmax();
		$nagari = $this->Model_pencaker->get_nagari();
		$kecamatan = $this->Model_pencaker->get_kecamatan();
		$pelatihan = $this->Model_pencaker->get_pelatihan();
		$d = $this->Model_pencaker->total_nagari($row->id_nagari2);
		$data = $this->Model_pencaker->nagari($row->id_nagari2);
		$data = $this->Model_pencaker->tampil_nagari($row->id_nagari2);
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/detail_pencaker', array( 'session' => $session, 'idmax' => $idmax, 'kecamatan' => $kecamatan, 'nagari' => $nagari, 'pelatihan' => $pelatihan, 'tampil_nagari' => $data, 'nagari' => $data, 'total_pencaker' => $d));
		$this->load->view('modals/tambah_pencaker');
		$this->load->view('modals/cetak_filter_pelatihan_nagari');
		$this->load->view('modals/cetak_filter_pendidikan_nagari');
		$this->load->view('modals/cetak_filter_umur_nagari');
		$this->load->view('edit/edit_pencaker');
		$this->load->view('templates/footer_admin');
	}

	public function kecamatan()
	{
		$this->load->model('Model_pencaker');
		$session = $this->Model_pencaker->get_session();
		foreach ($session as $row) {
			$row->id_nagari;
		}
		$d = $this->Model_pencaker->total_kecamatan($row->id_nagari);
		$data = $this->Model_pencaker->kecamatan($row->id_nagari);
		$data = $this->Model_pencaker->tampil_kecamatan($row->id_nagari);
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmaprkecamatan($id->id_nagari2);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslkkecamatan($id->id_nagari2);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahsprkecamatan($id->id_nagari2);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulkkecamatan($id->id_nagari2);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahuprkecamatan($id->id_nagari2);
		}
		$totalttsdlk = 0;
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/kecamatan', array('session' => $session, 'tampil_kecamatan' => $data, 'kecamatan' => $data, 'total_kecamatan' => $d));
		$this->load->view('modals/cetak_filter_pelatihan_kecamatan');
		$this->load->view('modals/cetak_filter_pendidikan_kecamatan');
		$this->load->view('modals/cetak_filter_umur_kecamatan');
		$this->load->view('templates/footer_admin');
	}



	//-----------Eksport Enaker-----------------------------------------

	public function cetak_rekap_enaker($id_nagari){
		ob_start();
		$this->load->model('Model_pencaker');
		$d = $this->Model_pencaker->total_kecamatan($id_nagari);
		$data = $this->Model_pencaker->kecamatan($id_nagari);
		$data = $this->Model_pencaker->tampil_kecamatan($id_nagari);
		foreach ($data as $row => $id){
			$data[$row]->jumlahttsdlk = $this->Model_pencaker->jumlahttsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahttsdpr = $this->Model_pencaker->jumlahttsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdlk = $this->Model_pencaker->jumlahsdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsdpr = $this->Model_pencaker->jumlahsdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmplk = $this->Model_pencaker->jumlahsmplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmppr = $this->Model_pencaker->jumlahsmpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmalk = $this->Model_pencaker->jumlahsmalkkecamatan($id->id_nagari2);
			$data[$row]->jumlahsmapr = $this->Model_pencaker->jumlahsmaprkecamatan($id->id_nagari2);
			$data[$row]->jumlahdlk = $this->Model_pencaker->jumlahdlkkecamatan($id->id_nagari2);
			$data[$row]->jumlahdpr = $this->Model_pencaker->jumlahdprkecamatan($id->id_nagari2);
			$data[$row]->jumlahslk = $this->Model_pencaker->jumlahslkkecamatan($id->id_nagari2);
			$data[$row]->jumlahspr = $this->Model_pencaker->jumlahsprkecamatan($id->id_nagari2);
			$data[$row]->jumlahplk = $this->Model_pencaker->jumlahplkkecamatan($id->id_nagari2);
			$data[$row]->jumlahppr = $this->Model_pencaker->jumlahpprkecamatan($id->id_nagari2);
			$data[$row]->jumlahulk1 = $this->Model_pencaker->jumlahulk1kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr1 = $this->Model_pencaker->jumlahupr1kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk2 = $this->Model_pencaker->jumlahulk2kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr2 = $this->Model_pencaker->jumlahupr2kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk3 = $this->Model_pencaker->jumlahulk3kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr3 = $this->Model_pencaker->jumlahupr3kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk4 = $this->Model_pencaker->jumlahulk4kecamatan($id->id_nagari2);
			$data[$row]->jumlahupr4 = $this->Model_pencaker->jumlahupr4kecamatan($id->id_nagari2);
			$data[$row]->jumlahulk = $this->Model_pencaker->jumlahulkkecamatan($id->id_nagari2);
			$data[$row]->jumlahupr = $this->Model_pencaker->jumlahuprkecamatan($id->id_nagari2);
		}
		$this->load->view('eksport/pdf_rekap_enaker', array('tampil_kecamatan' => $data, 'kecamatan' => $data, 'total_kecamatan' => $d));
		$html = ob_get_contents();
        ob_end_clean();

	        require_once('./assets/html2pdf/html2pdf.class.php');
	    $pdf = new HTML2PDF('L','F4','en');
	    $pdf->WriteHTML($html);
	    $pdf->Output('Rekapitulasi Data Pencari Kerja.pdf', 'I');
	}

	public function cetak_pencaker($id_nagari){
		$this->load->library('cezpdf');
		$this->load->model('Model_pencaker');
		$data['tampil_pencaker'] = $this->Model_pencaker->tampil_pencaker($id_nagari);
		$this->load->view('eksport/pdf_pencaker_enaker', $data);
	}

	public function cetak_filter_pelatihan_enaker(){
		$this->load->library('cezpdf');
		$kecamatan = $this->input->post('id_kecamatan', true);
		$pelatihan = $this->input->post('pelatihan', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_pelatihan_enaker($kecamatan, $pelatihan, $jk);
		$this->load->view('eksport/pdf_filter_pelatihan_enaker', $data);
	}

	public function cetak_filter_pendidikan_enaker(){
		$this->load->library('cezpdf');
		$kecamatan = $this->input->post('id_kecamatan', true);
		$pendidikan = $this->input->post('pendidikan', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_pendidikan_enaker($kecamatan, $pendidikan, $jk);
		$this->load->view('eksport/pdf_filter_pendidikan_enaker', $data);
	}

	public function cetak_filter_umur_enaker(){
		$this->load->library('cezpdf');
		$kecamatan = $this->input->post('id_kecamatan', true);
		$umurdari = $this->input->post('umurdari', true);
		$umursampai = $this->input->post('umursampai', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_umur_enaker($kecamatan, $umurdari, $umursampai, $jk);
		$this->load->view('eksport/pdf_filter_umur_enaker', $data);
	}


	//----------- Eksport Nagari----------------------------------------


	public function cetak_pencaker_nagari($id_nagari){
		$this->load->library('cezpdf');
		$this->load->model('Model_pencaker');
		$data['tampil_pencaker'] = $this->Model_pencaker->tampil_pencaker_nagari($id_nagari);
		$this->load->view('eksport/pdf_pencaker_nagari', $data);
	}	

	public function cetak_filter_pelatihan_nagari(){
		$this->load->library('cezpdf');
		$nagari = $this->input->post('id_nagari', true);
		$pelatihan = $this->input->post('pelatihan', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_pelatihan_nagari($nagari, $pelatihan, $jk);
		$this->load->view('eksport/pdf_filter_pelatihan_nagari', $data);
	}

	public function cetak_filter_pendidikan_nagari(){
		$this->load->library('cezpdf');
		$nagari = $this->input->post('id_nagari', true);
		$pendidikan = $this->input->post('pendidikan', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_pendidikan_nagari($nagari, $pendidikan, $jk);
		$this->load->view('eksport/pdf_filter_pendidikan_nagari', $data);
	}

	public function cetak_filter_umur_nagari(){
		$this->load->library('cezpdf');
		$nagari = $this->input->post('id_nagari', true);
		$umurdari = $this->input->post('umurdari', true);
		$umursampai = $this->input->post('umursampai', true);
		$jk = $this->input->post('jk', true);
		$this->load->model('Model_pencaker');
		$data['get_penganggur'] = $this->Model_pencaker->get_filter_umur_nagari($nagari, $umurdari, $umursampai, $jk);
		$this->load->view('eksport/pdf_filter_umur_nagari', $data);
	}
}