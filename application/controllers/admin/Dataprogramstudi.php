<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataprogramstudi extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
		$this->load->view('header_v',$array);
		$this->load->view('admin/dataprodi/dataprogramstudi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
		$this->load->view('header_v',$array);
		$this->load->view('admin/dataprodi/tambahprodi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
		$this->load->view('header_v',$array);
		$this->load->view('admin/dataprodi/editprodi_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
