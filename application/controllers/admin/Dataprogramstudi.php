<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataprogramstudi extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>5);
		$this->load->view('header_v',$array);
		$this->load->view('admin/dataprogramstudi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function tambahprodi()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>5);
		$this->load->view('header_v',$array);
		$this->load->view('admin/tambahprodi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
