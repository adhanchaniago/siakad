<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
		$this->load->view('header_v');
		$this->load->view('dekan/dashboard_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
