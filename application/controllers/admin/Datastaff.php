<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datastaff extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'235');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datastaff/datastaff_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'235');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datastaff/tambahstaff_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'235');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datastaff/editstaff_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
