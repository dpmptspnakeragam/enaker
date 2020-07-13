<?php
class Cetak extends CI_controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('tcpdf');
	}

	public function cetak() {
		parent::__construct();
		$this->load->library('tcpdf');
	}
}
