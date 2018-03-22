<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'rektor'){
			$array=array('page'=>7);
			$this->load->model(array('LKD','Fakultas'));
			$data['bulan'] = $this->LKD->getBulanPengajuan();
			$data['fakultas'] = $this->Fakultas->get();
			$this->load->view('header_v',$array);
		$this->load->view('rektor/datalkd_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function getData(){
		$this->load->model(array('LKD','Dosen'));
		$dosen = array();
		$id_pengajuan = $_POST['id'];
		$pengajuan_bulanan = $this->LKD->getPengajuanBulanan(array('id'=>$id_pengajuan));
		$pengajuan = $pengajuan_bulanan->row();
		if($pengajuan!=null){
			$pengajuan->id = md5($pengajuan->id);
			$dosen = $this->Dosen->getAll(array('d.id'=>$pengajuan->id_dosen))->row();
		}
		$kode = explode("-",$pengajuan->kode_bulan);
		$data = $this->LKD->getBulanData($dosen->id,$kode[0],$kode[1]);
		echo json_encode(array('dosen'=>$dosen,'bulan'=>$data->result_array(),'pengajuan'=>$pengajuan));
	}
	function update(){
		$id_bulanan = $_POST['id'];
		$status = $_POST['action'];
		$data = array(
			'status_pengajuan' => $status
		);
		$this->load->model(array('LKD'));
		$update = $this->LKD->updatePengajuanBulanan(array('id'=>$id_bulanan),$data);
		if($update){
			echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil!'));
		}
		else{
			echo json_encode(array('status'=>'gagal','message'=>'Update gagal!'));
		}
	}
	function json() {
		$kode_bulan = $_POST['kode'];
		$id_fakultas = $_POST['fakultas'];
		if($kode_bulan == 0){
			$kode_bulan = null;
		}
		if($id_fakultas == 0) {
			$id_fakultas = null;
		}
		$array = array('kode_bulan'=>$kode_bulan,'id_fakultas'=>$id_fakultas);
			$this->load->library('datatables');
			$this->load->model(array('LKD'));
      header('Content-Type: application/json');
      echo $this->LKD->jsonRektor($array);
	    }
			function accSemua(){
				$data = array(
					'status_pengajuan' => 1
				);
				$param = array(
					'kode_bulan'=> $_POST['kode'],
					'status_pengajuan'=>0
				);
				if($param['kode_bulan'] == 0){
					echo json_encode(array('status'=>'gagal','message'=>'Pilih bulan terlebih dahulu!'));
				}
				else{
					$this->load->model(array('LKD'));
					$update = $this->LKD->updatePengajuanBulanan($param,$data);
					echo json_encode(array('status'=>'berhasil','message'=>'ACC berhasil!'));
				}
				// if($update){
				// 	echo json_encode(array('status'=>'berhasil','message'=>'ACC berhasil!'));
				// }
				// else{
				// 	echo json_encode(array('status'=>'gagal','message'=>'Tidak ada pengajuan yang di-ACC!'));
				// }
			}
}
