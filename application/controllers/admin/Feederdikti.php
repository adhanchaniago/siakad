<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feederdikti extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'admin'){
			$array=array('page'=>6);
		$this->load->view('header_v',$array);
		$this->load->view('admin/feederdikti_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
