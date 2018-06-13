<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadekan extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Fakultas','Jurusan'));
			$data['fakultas'] = $this->Fakultas->get(null);
			$array=array('page'=>'2322');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datadekan_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function json() {
			$this->load->library('datatables');
			$fakultas = $_POST['id_fakultas'];
			$this->load->model(array('Fakultas'));
					header('Content-Type: application/json');
					echo $this->Fakultas->json_dekan($fakultas);
			}
}
