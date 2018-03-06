<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Progressticket extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'mhs'){
		$this->load->view('header_v');
		$this->load->view('mahasiswa/progressticket_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
