<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formttd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
			$array=array('page'=>6);
			$this->load->view('header_v',$array);
		$this->load->view('dekan/formttd_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function signature()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
		$this->load->view('signature_v');
		}else{
			header("location:".base_url());
		}
	}
}
