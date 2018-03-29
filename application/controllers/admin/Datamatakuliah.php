<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamatakuliah extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>10);
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamatkul/datamatakuliah_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>10);
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamatkul/tambahmatakuliah_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>10);
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamatkul/editmatakuliah_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
