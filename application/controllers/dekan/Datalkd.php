<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
			$this->load->model(array('LKD'));
			$id_fakultas = $_SESSION['data']['id_fakultas'];
			$pengajuan = $this->LKD->getPengajuanFakultas();
			$i = 1;
			$last = 0;
			$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			foreach (array_reverse($pengajuan->result()) as $row) {
				if($last != $row->bulan){
				$i=1;
				$last = $row->bulan;
				}
				$row->bulan = "Minggu ke-".$i++." ". $bulan[($row->bulan-1)]." ". $row->tahun;
			}
			$data['pengajuan'] = $pengajuan;

			$kategori = $this->LKD->getKategoriSorted();
			$data['kategori'] = array();
			foreach($kategori->result() as $row){
				array_push($data['kategori'],$row);
			}


			$array=array('page'=>7);
			$this->load->view('header_v',$array);
		$this->load->view('dekan/datalkd_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function json() {
		$id_periode = $_POST['id_periode'];
		$id_fakultas = $_SESSION['data']['id_fakultas'];
		if($id_periode == 0){
			$array = null;
		}
		else {
			$array = array('pe.id'=>$id_periode);
		}
			$this->load->library('datatables');
			$this->load->model(array('LKD'));
      header('Content-Type: application/json');
      echo $this->LKD->jsonDekan($array,$id_fakultas);
	    }


			public function getData(){
				$this->load->model(array('LKD','Dosen'));
				$id_pengajuan = $_POST['id_pengajuan'];

				$pengajuan = $this->LKD->getPengajuan(array('id'=>$id_pengajuan));
				$dosen = $this->Dosen->get(array('id'=>$pengajuan->row()->id_dosen));
				$id_jabatan = $dosen->row()->id_jabatan;
				$min_jam = $this->LKD->getConfig($id_jabatan);
				$jam = array();
				foreach($min_jam->result() as $row_j){
					$jam[$row_j->id_kategori]=$row_j->jam;
				}

				$data = $this->LKD->getDetailLKD($id_pengajuan);
				$json_tanggal = array();
				$json_id = array();
				$json_jam = array();
				foreach ($data->result() as $row) {
					# code...
					if(!array_key_exists($row->tanggal,$json_tanggal)){
						$json_tanggal[$row->tanggal] = array();
					}
					$newData = array(

						'kegiatan' => $row->kegiatan,
						'id_kategori' => (int)$row->id_kategori,
						'jam_awal' => $row->jam_awal,
						'jam_akhir' => $row->jam_akhir,
						'total' => (float)$row->selisih,

					);

					array_push($json_tanggal[$row->tanggal], $newData);
					if(!in_array(md5($row->id_lkd_harian), $json_id))
					array_push($json_id, md5($row->id_lkd_harian));


					if(!array_key_exists($row->id_kategori,$json_jam)){
						$json_jam[$row->id_kategori] = 0;
					}
					$json_jam[$row->id_kategori] += $row->selisih;
				}

				$pengajuan = $this->LKD->getPengajuan(array('id'=>$id_pengajuan));
				$aju='';
				if($pengajuan->num_rows()>0){
					$aju = $pengajuan->row_array();
					$aju['id'] = md5($aju['id']);
				}
				echo json_encode(array('id'=>$json_id,'tanggal'=>$json_tanggal,'jam'=>$json_jam,'config'=>$jam,'pengajuan'=>$aju));
			}

			function update(){
				$id_pengajuan = $_POST['id_pengajuan'];
				$status = $_POST['action'];
				$data = array(
					'status_pengajuan' => $status
				);
				$this->load->model(array('LKD'));
				$update = $this->LKD->updatePengajuan(array('id'=>$id_pengajuan),$data);
				if($update){
					echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil!'));
				}
				else{
					echo json_encode(array('status'=>'gagal','message'=>'Update gagal!'));
				}
			}
			function accSemua(){
				$data = array(
					'status_pengajuan' => 1
				);
				$id_periode = $_POST['id_periode'];
				$id_fakultas = $_SESSION['data']['id_fakultas'];
				$this->load->model(array('LKD'));
				$update = $this->LKD->accSemuaDekan($id_periode, $id_fakultas);
				if($update){
					echo json_encode(array('status'=>'berhasil','message'=>'ACC berhasil!'));
				}
				else{
					echo json_encode(array('status'=>'gagal','message'=>'ACC gagal!'));
				}
			}
}
