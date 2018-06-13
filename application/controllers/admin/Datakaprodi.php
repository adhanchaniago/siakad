<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakaprodi extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Fakultas','Jurusan'));
			$data['fakultas'] = $this->Fakultas->get(null);
			$array=array('page'=>'2323');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datakaprodi_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function json() {
			$this->load->library('datatables');
			$fakultas = $_POST['id_fakultas'];
			$this->load->model(array('Jurusan'));
					header('Content-Type: application/json');
					echo $this->Jurusan->json_kaprodi($fakultas);
			}
}
