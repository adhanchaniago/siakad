<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datagedung extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'2241');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datagedung/datagedung_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function get(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Gedung'));
			$id = $_POST['id'];
			$gedung = $this->Gedung->get(array('id'=>$id));
			if($gedung->num_rows()==0){
				echo json_encode(array('status'=>'gagal','message'=>'Gedung tidak ditemukan!'));
			}
			else{
				echo json_encode(array('status'=>'berhasil','message'=>'Gedung ditemukan!','data'=>$gedung->row()));
			}
		}
	}
	function insert(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Gedung'));
			$gedung = array(
				'kode' => $_POST['kode'],
				'nama' => $_POST['nama'],
				'id_status' => 1
			);


			$cek = $this->Gedung->get(array('kode'=>$gedung['kode']));
			if($cek->num_rows() > 0){
				echo json_encode(array('status'=>'gagal','message'=>'Kode telah ada!'));
			}
			else{
					$this->Gedung->insert($gedung);
					echo json_encode(array('status'=>'berhasil','message'=>'Gedung berhasil ditambah!'));
				}
			}
	}
	function update(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Gedung'));
			$gedung = array(
				'kode' => $_POST['kode'],
				'nama' => $_POST['nama'],
				'id_status' => 1
			);

			$param = array ('id' => $_POST['id']);


			$cek = $this->Gedung->get(array('kode'=>$gedung['kode'],'id!='=>$param['id']));
			if($cek->num_rows() > 0){
				echo json_encode(array('status'=>'gagal','message'=>'Kode telah ada!'));
			}
			else{
					$this->Gedung->update($param,$gedung);
					echo json_encode(array('status'=>'berhasil','message'=>'Gedung berhasil diubah!'));
				}
			}
	}
	function delete(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Gedung'));
			$gedung = array(
				'id_status' => 0
			);

			$param = array ('id' => $_POST['id']);
			$cek = $this->Gedung->update($param,$gedung);
			if($cek>0)
				echo json_encode(array('status'=>'berhasil','message'=>'Gedung berhasil dihapus!'));
			else
				echo json_encode(array('status'=>'gagal','message'=>'Gedung tidak ditemukan!'));
			}
	}
	function json() {
			$this->load->library('datatables');
			$this->load->model(array('Gedung'));
	        header('Content-Type: application/json');
	        echo $this->Gedung->json();
	    }
}
