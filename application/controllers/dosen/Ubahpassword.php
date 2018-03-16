<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		$this->load->view('header_v');
		$this->load->view('dosen/ubahpassword_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
