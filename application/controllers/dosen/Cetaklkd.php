<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetaklkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'dosen'){
		$this->load->view('header_v');
		$this->load->view('dosen/cetaklkd_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
