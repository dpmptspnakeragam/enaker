<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemagangan extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_pemagangan');
		$data ['pemagangan'] = $this->Model_pemagangan->tampil_data();
		$data ['idmax'] = $this->Model_pemagangan->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/pemagangan', $data);
		$this->load->view('modals/tambah_magang');
		$this->load->view('edit/edit_magang', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
    	$id_magang = $this->input->post('id', true);
    	$judul = $this->input->post('judul', true);
    	$keterangan = $this->input->post('keterangan', true);
    	$gambar = $_FILES['gambar']['name'];
    	if ($gambar = ''){

    	}else{
    		$nmfile = "magang-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}

    	$data=array(
    		'id_magang'=>$id_magang,
    		'gambar'=>$gambar,
    		'keterangan'=>$keterangan,
    		'judul'=>$judul
    	);
    	$this->load->model('Model_pemagangan');
    	$this->Model_pemagangan->input($data);
    	$this->session->set_flashdata("berhasil", "Tambah data <b>$judul</b> berhasil !");
    	redirect('admin/pemagangan');
	}

	public function ubah()
	{
    	$id_magang = $this->input->post('id_magang', true);
    	$judul = $this->input->post('judul', true);
    	$keterangan = $this->input->post('keterangan', true);

    	if (empty($_FILES['gambar']['name'])){
    		$gambar = $this->input->post('old', true);
    	}else{
    		$nmfile = "magang-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}

    	$data=array(
    		'id_magang'=>$id_magang,
    		'gambar'=>$gambar,
    		'keterangan'=>$keterangan,
    		'judul'=>$judul
    	);
    	$this->load->model('Model_pemagangan');
    	$this->Model_pemagangan->update($data, $id_magang);
    	$this->session->set_flashdata("berhasil", "Ubah data <b>$judul</b> berhasil !");
    	redirect('admin/pemagangan');
	}

	public function hapus($id_magang){
		$this->db->where('id_magang',$id_magang);
	    $query = $this->db->get('pemagangan');
	    $row = $query->row();

	    unlink("./assets/imgupload/$row->gambar");

	    $this->load->model('Model_pemagangan');
	    $this->Model_pemagangan->delete($id_magang);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->judul</b> berhasil !");
	    
	    redirect('admin/pemagangan');
	}

}