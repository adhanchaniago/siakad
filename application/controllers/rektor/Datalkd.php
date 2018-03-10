<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'rektor'){
		$this->load->view('header_v');
		$this->load->view('rektor/datalkd_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
