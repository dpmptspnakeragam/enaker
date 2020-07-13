<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profil_blk extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_profil_blk');
		$data ['profile'] = $this->Model_profil_blk->tampil_data();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/profil_blk', $data);
		$this->load->view('edit/edit_profilblk', $data);
		$this->load->view('templates/footer_admin');
	}

	public function ubah()
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
	     		redirect('admin/profil_blk');
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
    	$this->load->model('Model_profil_blk');
    	$this->Model_profil_blk->update($data, $id);
    	$this->session->set_flashdata("berhasil", "Ubah data <b>Profil</b>> berhasil !");
    	redirect('admin/profil_blk');
	}

}