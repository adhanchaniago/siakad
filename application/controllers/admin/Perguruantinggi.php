<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguruantinggi extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		$this->load->model('PT');
		if ($cek == 'admin'){
			$array=array('page'=>'211');
			$data['data'] = $this->PT->get(null);
		$this->load->view('header_v',$array);
		$this->load->view('admin/perguruantinggi_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function insert(){
		$this->load->model('PT');
		foreach ($_POST as $key => $value) {
			$param = array('option_code'=>$key);
			$data = array('option_data'=>$value);
			$this->PT->update($param, $data);
		}
		echo json_encode(array('status'=>'berhasil','message'=>'Data PT berhasil diubah!'));
	}
}
