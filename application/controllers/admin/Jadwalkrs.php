<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwalkrs extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'412');
		$this->load->view('header_v',$array);
		$this->load->view('admin/jadwalkrs_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
