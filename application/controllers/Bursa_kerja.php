<?php
class Bursa_kerja extends CI_controller {
	public function index()
	{
		$this->load->model('Model_berita');
		        //konfigurasi pagination
        $config['base_url'] = site_url('bursa_kerja/index'); //site url
        $config['total_rows'] = $this->Model_berita->hitung_bursa(); //total row
        $config['per_page'] = 3;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

         // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '&raquo';
        $config['prev_link']        = '&laquo';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center pagination-sm">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data ['berita'] = $this->Model_berita->tampil_bursa_pagination($config['per_page'], $data['page']);
		$data ['terbaru'] = $this->Model_berita->bursa_terbaru();
		$data['pagination'] = $this->pagination->create_links();

		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('bursa_kerja', $data);
		$this->load->view('templates/footer');
	}

	public function detail_berita($id_berita)
	{
		$this->load->model('Model_berita');
		$data ['berita'] = $this->Model_berita->detail_berita($id_berita);
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('detail_berita', $data);
		$this->load->view('templates/footer');
	}
}