<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{ 
		$this->load->model('Model_profil');
		$data ['profile'] = $this->Model_profil->tampil_data_profil();
		$data ['penjabat'] = $this->Model_profil->tampil_data_pejabat();
		$data ['anggota'] = $this->Model_profil->tampil_data_anggota();
		$data ['idmax'] = $this->Model_profil->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/profil', $data);
		$this->load->view('modals/tambah_anggota');
		$this->load->view('edit/edit_profil', $data);
		$this->load->view('edit/edit_pejabat', $data);
        $this->load->view('edit/edit_anggota', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah_anggota()
	{
    	$id_anggota = $this->input->post('id_anggota', true);
    	$nama_anggota = $this->input->post('nama_anggota', true);
    	$nip_anggota = $this->input->post('nip_anggota', true);
    	$id = $this->input->post('id', true);
    	$jabatan_anggota = $this->input->post('jabatan_anggota', true);
    	$cp_anggota = $this->input->post('cp_anggota', true);
    	$gol_anggota = $this->input->post('gol_anggota', true);
    	$gambar = $_FILES['gambar']['name'];

    	if ($gambar = ''){

    	}else{
    		$nmfile = "anggota-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}

    	$data=array(
    		'id_anggota'=>$id_anggota,
    		'id'=>$id,
    		'nama_anggota'=>$nama_anggota,
    		'jabatan_anggota'=>$jabatan_anggota,
    		'nip_anggota'=>$nip_anggota,
    		'gol_anggota'=>$gol_anggota,
    		'cp_anggota'=>$cp_anggota,
    		'gambar_anggota'=>$gambar

    	);
    	$this->load->model('Model_profil');
    	$this->Model_profil->input_anggota($data);
    	$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_anggota</b> berhasil !");
    	redirect('admin/profil');
	}

	public function hapus_anggota($id_anggota){
		$this->db->where('id_anggota',$id_anggota);
	     $query = $this->db->get('anggota');
	     $row = $query->row();

	     unlink("./assets/imgupload/$row->gambar_anggota");

	     $this->load->model('Model_profil');
	     $this->Model_profil->delete_anggota($id_anggota);
	     $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_anggota</b> berhasil !");
	     
	     redirect('admin/profil');
	}

	public function ubah_profil()
	{
    	$id = $this->input->post('id', true);
    	$gambaran_umum = $this->input->post('gambaran_umum', true);
    	$visi = $this->input->post('visi', true);
    	$misi = $this->input->post('misi', true);
    	$fungsi = $this->input->post('fungsi', true);
    	$tugas = $this->input->post('tugas', true);

    	if (empty($_FILES['gambar']['name'])){
    		$gambar = $this->input->post('old', true);
    	}else{
    		$nmfile = "profil-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpeg|jpg|png';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }else{
            	$this->session->set_flashdata("gagal", "Maaf, file <b>Gambar</b> gagal diunggah. Format file tidak sesuai !");
	     		redirect('admin/profil');
            }
    	}

    	$data=array(
    		'id'=>$id,
    		'tugas'=>$tugas,
    		'visi'=>$visi,
    		'misi'=>$misi,
    		'fungsi'=>$fungsi,
    		'gambaran_umum'=>$gambaran_umum,
    		'gambar'=>$gambar
    	);
    	$this->load->model('Model_profil');
    	$this->Model_profil->update_profil($data, $id);
    	$this->session->set_flashdata("berhasil", "Ubah data Profil berhasil !");
    	redirect('admin/profil');
	}

	public function ubah_pejabat()
	{
    	$id = $this->input->post('id', true);
    	$nama = $this->input->post('nama', true);
    	$nip = $this->input->post('nip', true);
    	$jabatan = $this->input->post('jabatan', true);
    	$cp = $this->input->post('cp', true);
    	$golongan = $this->input->post('golongan', true);

    	if (empty($_FILES['gambar']['name'])){
    		$gambar = $this->input->post('old', true);
    	}else{
    		$nmfile = "pejabat-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpeg|jpg|png';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }else{
            	$this->session->set_flashdata("gagal", "Maaf, file <b>Gambar</b> gagal diunggah. Format file tidak sesuai !");
	     		redirect('admin/profil');
            }
    	}

    	$data=array(
    		'id'=>$id,
    		'nama'=>$nama,
    		'jabatan'=>$jabatan,
    		'nip'=>$nip,
    		'cp'=>$cp,
    		'golongan'=>$golongan,
    		'gambar'=>$gambar
    	);
    	$this->load->model('Model_profil');
    	$this->Model_profil->update_pejabat($data, $id);
    	$this->session->set_flashdata("berhasil", "Ubah data <b>$nama</b> berhasil !");
    	redirect('admin/profil');
	}

    public function ubah_anggota()
    {
        $id_anggota = $this->input->post('id_anggota', true);
        $nama_anggota = $this->input->post('nama_anggota', true);
        $nip_anggota = $this->input->post('nip_anggota', true);
        $id = $this->input->post('id', true);
        $jabatan_anggota = $this->input->post('jabatan_anggota', true);
        $cp_anggota = $this->input->post('cp_anggota', true);
        $gol_anggota = $this->input->post('gol_anggota', true);

        if (empty($_FILES['gambar']['name'])){
            $gambar = $this->input->post('old', true);
        }else{
            $nmfile = "pejabat-".time();
            $config['upload_path']='./assets/imgupload/';
            $config['allowed_types']='jpeg|jpg|png';
            $config['file_name']=$nmfile;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }else{
                $this->session->set_flashdata("gagal", "Maaf, file <b>Gambar</b> gagal diunggah. Format file tidak sesuai !");
                redirect('admin/profil');
            }
        }

        $data=array(
            'id_anggota'=>$id_anggota,
            'id'=>$id,
            'nama_anggota'=>$nama_anggota,
            'jabatan_anggota'=>$jabatan_anggota,
            'nip_anggota'=>$nip_anggota,
            'gol_anggota'=>$gol_anggota,
            'cp_anggota'=>$cp_anggota,
            'gambar_anggota'=>$gambar

        );
        $this->load->model('Model_profil');
        $this->Model_profil->update_anggota($data, $id_anggota);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$nama</b> berhasil !");
        redirect('admin/profil');
    }

}