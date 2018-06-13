<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakelas extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'223');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datakelas/datakelas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'223');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datakelas/tambahkelas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'223');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datakelas/editkelas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
