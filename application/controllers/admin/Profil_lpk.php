<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil_lpk extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_profil_lpks');
		$data ['profillpk'] = $this->Model_profil_lpks->tampil_data();
		$data ['idmax'] = $this->Model_profil_lpks->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/profil_lpk', $data);
		$this->load->view('modals/tambah_profillpk');
		$this->load->view('edit/edit_profillpk');
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
    	$id_profil = $this->input->post('id', true);
    	$nama_lpk = $this->input->post('nama_lpk', true);
    	$pengurus = $this->input->post('pengurus', true);
    	$sejarah = $this->input->post('sejarah', true);
    	$gambar = $_FILES['gambar']['name'];
    	$alamat = $this->input->post('alamat', true);

    	if ($gambar = ''){

    	}else{
    		$nmfile = "lpk-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}
    	$data=array(
    		'id_profil'=>$id_profil,
    		'nama_lpk'=>$nama_lpk,
    		'pengurus'=>$pengurus,
    		'sejarah'=>$sejarah,
    		'gambar'=>$gambar,
    		'alamat'=>$alamat
    	);
    	$this->load->model('Model_profil_lpks');
    	$this->Model_profil_lpks->input($data);
    	$this->session->set_flashdata("berhasil", "Tambah data <b>$nama_lpk</b> berhasil !");
    	redirect('admin/profil_lpk');
	}

	public function ubah()
	{
    	$id_profil = $this->input->post('id_profil', true);
    	$nama_lpk = $this->input->post('nama_lpk', true);
    	$pengurus = $this->input->post('pengurus', true);
    	$sejarah = $this->input->post('sejarah', true);
    	$alamat = $this->input->post('alamat', true);

    	if (empty($_FILES['gambar']['name'])){
    		$gambar = $this->input->post('old', true);
    	}else{
    		$nmfile = "lpk-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}
    	$data=array(
    		'id_profil'=>$id_profil,
    		'nama_lpk'=>$nama_lpk,
    		'pengurus'=>$pengurus,
    		'sejarah'=>$sejarah,
    		'gambar'=>$gambar,
    		'alamat'=>$alamat
    	);
    	$this->load->model('Model_profil_lpks');
    	$this->Model_profil_lpks->update($data, $id_profil);
    	$this->session->set_flashdata("berhasil", "Ubah data <b>$nama_lpk</b> berhasil !");
    	redirect('admin/profil_lpk');
	}

	public function hapus($id_profil){
		$this->db->where('id_profil',$id_profil);
	    $query = $this->db->get('profillpk');
	    $row = $query->row();

	    unlink("./assets/imgupload/$row->gambar");

	    $this->load->model('Model_profil_lpks');
	    $this->Model_profil_lpks->delete($id_profil);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->nama_lpk</b> berhasil !");
	    
	    redirect('admin/profil_lpk');
	}
}