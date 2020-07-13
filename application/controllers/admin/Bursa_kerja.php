<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bursa_kerja extends CI_controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
	}

	public function index()
	{
		$this->load->model('Model_berita');
		$data ['jobfair'] = $this->Model_berita->tampil_jobfair();
		$data ['jenis_berita'] = $this->Model_berita->jenis_berita();
		$data ['idmax'] = $this->Model_berita->idmax();
		$this->load->view('templates/header_admin');
		$this->load->view('templates/navbar_admin');
		$this->load->view('admin/bursa_kerja', $data);
		$this->load->view('modals/tambah_bursa');
        $this->load->view('edit/edit_bursa', $data);
		$this->load->view('templates/footer_admin');
	}

	public function tambah()
	{
    	$id_berita = $this->input->post('id', true);
    	$judul_berita = $this->input->post('judul_berita', true);
    	$konten_berita = $this->input->post('konten_berita', true);
    	$isi_berita = $this->input->post('isi_berita', true);
    	$pengirim_berita = "DPMPTSP-NAKER KAB.AGAM";
    	$tgl_berita = $this->input->post('tanggal_berita', true);
    	$gambar = $_FILES['gambar']['name'];
    	$id_jenis = $this->input->post('id_jenis', true);
    	$alamat = $this->input->post('alamat', true);
    	$syarat = $this->input->post('syarat', true);

    	if ($gambar = ''){

    	}else{
    		$nmfile = "berita-".time();
    		$config['upload_path']='./assets/imgupload/';
    		$config['allowed_types']='jpg|jpeg|png|gif';
    		$config['file_name']=$nmfile;

    		$this->load->library('upload', $config);
    		if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
    	}
    	$data=array(
    		'id_berita'=>$id_berita,
    		'judul_berita'=>$judul_berita,
    		'konten_berita'=>$konten_berita,
    		'isi_berita'=>$isi_berita,
    		'pengirim_berita'=>$pengirim_berita,
    		'tgl_berita'=>$tgl_berita,
    		'gambar'=>$gambar,
    		'id_jenis'=>$id_jenis,
    		'alamat'=>$alamat,
    		'syarat'=>$syarat
    	);
    	$this->load->model('Model_berita');
    	$this->Model_berita->input($data);
    	$this->session->set_flashdata("berhasil", "Tambah data <b>$judul_berita</b> berhasil !");
    	redirect('admin/bursa_kerja');
	}

	public function hapus($id_berita){
		$this->db->where('id_berita',$id_berita);
	    $query = $this->db->get('berita');
	    $row = $query->row();

	    $this->load->model('Model_berita');
	    $this->Model_berita->delete($id_berita);
	    $this->session->set_flashdata("gagal", "Hapus data <b>$row->judul_berita</b> berhasil !");
	    
	    redirect('admin/bursa_kerja');
	}

    public function ubah()
    {
        $id_berita = $this->input->post('id', true);
        $judul_berita = $this->input->post('judul_berita', true);
        $konten_berita = $this->input->post('konten_berita', true);
        $isi_berita = $this->input->post('isi_berita', true);
        $pengirim_berita = "DPMPTSP-NAKER KAB.AGAM";
        $tgl_berita = $this->input->post('tanggal_berita', true);
        $alamat = $this->input->post('alamat', true);
        $syarat = $this->input->post('syarat', true);

        if (empty($_FILES['gambar']['name'])){
            $gambar = $this->input->post('old', true);
        }else{
            $nmfile = "berita-".time();
            $config['upload_path']='./assets/imgupload/';
            $config['allowed_types']='jpg|jpeg|png|gif';
            $config['file_name']=$nmfile;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('gambar')) {   
                $gambar = $this->upload->data('file_name');
            }
        }
        $data=array(
            'id_berita'=>$id_berita,
            'judul_berita'=>$judul_berita,
            'konten_berita'=>$konten_berita,
            'isi_berita'=>$isi_berita,
            'pengirim_berita'=>$pengirim_berita,
            'tgl_berita'=>$tgl_berita,
            'gambar'=>$gambar,
            'alamat'=>$alamat,
            'syarat'=>$syarat
        );
        $this->load->model('Model_berita');
        $this->Model_berita->update_bursa($data, $id_berita);
        $this->session->set_flashdata("berhasil", "Ubah data <b>$judul_berita</b> berhasil !");
        redirect('admin/bursa_kerja');
    }

}