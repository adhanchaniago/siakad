<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akunpegawai extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>5);
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/akunpegawai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>5);
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/tambahakunpegawai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>5);
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/editakunpegawai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
