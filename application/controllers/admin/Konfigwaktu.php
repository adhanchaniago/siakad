<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigwaktu extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('username');
		if ($cek == 'admin'){
			$this->load->model(array('LKD'));
			$array=array('page'=>5);
			$kategori = $this->LKD->getKategoriSorted();
			$jabatan = $this->LKD->getJabatan(null);
			$data['kategori'] = array();
			$data['jabatan'] = array();
			foreach($kategori->result() as $row){
				array_push($data['kategori'],$row);
			}
			foreach($jabatan->result() as $row){

				$jam = $this->LKD->getConfig($row->id);
				$row->jam = array();
				foreach($jam->result() as $row_j){
					$row->jam[$row_j->id_kategori]=$row_j->jam;
				}
				array_push($data['jabatan'],$row);
			}
			$this->load->view('header_v',$array);
			$this->load->view('admin/konfigwaktu_v',$data);
			$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function edit(){
		$id_jabatan = $_POST['id_jabatan'];
		$nilai = $_POST['nilai'];
		$this->load->model(array('LKD'));

		$this->LKD->update('m_jabatan_dosen',array('id'=>$id_jabatan),array('minimal_jam'=>$nilai[0]));
		foreach ($nilai as $key => $value) {
			if($key!=0){
				$this->LKD->update('t_config_lkd',array('id_jabatan'=>$id_jabatan,'id_kategori'=>$key),array('jam'=>$value));
			}
		}
		echo json_encode(array('status'=>'berhasil','message'=>'Berhasil mengupdate jam!'));
	}
	function getJam(){
		$this->load->model(array('LKD'));
		$id_jabatan = $_POST['id_jabatan'];
		$jam = $this->LKD->getConfig($id_jabatan);
		$data = array();
		$jabatan = $this->LKD->getJabatan(array('id'=>$id_jabatan));
		$data[0]=(float)$jabatan->row()->minimal_jam;
		foreach($jam->result() as $row_j){
			$data[$row_j->id_kategori]=(float)$row_j->jam;
		}
		echo json_encode($data);
	}
}
