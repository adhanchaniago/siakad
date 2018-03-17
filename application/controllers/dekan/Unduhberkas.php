<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduhberkas extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
			$array=array('page'=>4);
			$this->load->view('header_v',$array);
		$this->load->view('dekan/unduhberkas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
