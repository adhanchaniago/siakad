<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamahasiswa extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'admin'){
			$array=array('page'=>3);
		$this->load->view('header_v',$array);
		$this->load->view('admin/datamhs_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
}
