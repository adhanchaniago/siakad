<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formttd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		$this->load->view('header_v');
		$this->load->view('dosen/formttd_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function signature()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		// $this->load->view('header_v');
		$this->load->view('dosen/signature_v');
		// $this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
