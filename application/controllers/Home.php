<?php
class Home extends CI_controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}
}