<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataruangan extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'2242');
			$this->load->model(array('Gedung'));
			$data['gedung'] = $this->Gedung->get(array('id_status'=>1));
		$this->load->view('header_v',$array);
		$this->load->view('admin/datagedung/dataruangan_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	function get(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin' && isset($_POST['id'])){
			$this->load->model(array('Ruangan'));
			$id = $_POST['id'];
			$ruangan = $this->Ruangan->get(array('id'=>$id));
			if($ruangan->num_rows()==0){
				echo json_encode(array('status'=>'gagal','message'=>'Ruangan tidak ditemukan!'));
			}
			else{
				$data=$ruangan->row_array();
				$kode = explode('.',$data['kode']);
				array_shift($kode);
				$data['kode'] = implode('.',$kode);
				echo json_encode(array('status'=>'berhasil','message'=>'Ruangan ditemukan!','data'=>$data));
			}
		}
	}
	function insert(){

		$cek = $this->session->userdata('status');
		if ($cek == 'admin'  && isset($_POST['gedung'])){
			$this->load->model(array('Ruangan','Gedung'));
			$id_gedung = $_POST['gedung'];
			$gedung = $this->Gedung->get(array('id'=>$id_gedung,'id_status'=>1));
			if($gedung->num_rows()>0){
				$ruangan = array(
					'kode' => $gedung->row()->kode.".".$_POST['kode'],
					'nama' => $_POST['nama'],
					'kapasitas' => $_POST['kapasitas'],
					'id_gedung' => $_POST['gedung'],
					'id_status' => 1
				);
				$cek = $this->Ruangan->get(array('kode'=>$ruangan['kode']));
				if($cek->num_rows() > 0){
					echo json_encode(array('status'=>'gagal','message'=>'Kode telah ada!'));
				}
				else{
						$this->Ruangan->insert($ruangan);
						echo json_encode(array('status'=>'berhasil','message'=>'Ruangan berhasil ditambah!'));
					}
				}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Gedung tidak ditemukan!'));
				}
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Pilih gedung terlebih dahulu!'));
			}
	}
	function update(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'  && isset($_POST['gedung'])){
			$this->load->model(array('Ruangan','Gedung'));
			$id_gedung = $_POST['gedung'];
			$gedung = $this->Gedung->get(array('id'=>$id_gedung,'id_status'=>1));
			if($gedung->num_rows()>0){
				$ruangan = array(
					'kode' => $gedung->row()->kode.".".$_POST['kode'],
					'nama' => $_POST['nama'],
					'kapasitas' => $_POST['kapasitas'],
					'id_gedung' => $_POST['gedung'],
					'id_status' => 1
				);
				$param = array ('id' => $_POST['id']);
				$cek = $this->Ruangan->get(array('kode'=>$ruangan['kode'],'id!='=>$param['id']));
				if($cek->num_rows() > 0){
					echo json_encode(array('status'=>'gagal','message'=>'Kode telah ada!'));
				}
				else{
					$this->Ruangan->update($param,$ruangan);
					echo json_encode(array('status'=>'berhasil','message'=>'Gedung berhasil diubah!'));
					}
				}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Gedung tidak ditemukan!'));
				}
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Pilih gedung terlebih dahulu!'));
			}
	}
	function delete(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model(array('Ruangan'));
			$ruangan = array(
				'id_status' => 0
			);

			$param = array ('id' => $_POST['id']);
			$cek = $this->Ruangan->update($param,$ruangan);
			if($cek>0)
				echo json_encode(array('status'=>'berhasil','message'=>'Ruangan berhasil dihapus!'));
			else
				echo json_encode(array('status'=>'gagal','message'=>'Ruangan tidak ditemukan!'));
			}
	}

	function json() {
			$this->load->library('datatables');
			$id_gedung = $_POST['id_gedung'];
			$this->load->model(array('Ruangan'));
	        header('Content-Type: application/json');
	        echo $this->Ruangan->json($id_gedung);
	    }
}
