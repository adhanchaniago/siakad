<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'mahasiswa'){
		$this->load->view('header_v');
		$this->load->view('mahasiswa/registrasi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
