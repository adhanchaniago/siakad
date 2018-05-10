<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamahasiswa extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'234');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamahasiswa/datamhs_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'234');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamahasiswa/tambahmhs_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
