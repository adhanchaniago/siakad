<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanlkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
			$this->load->model(array('LKD','Dosen'));
			$id_dosen = $_SESSION['data']['id'];
			$dosen = $this->Dosen->get(array('id'=>$id_dosen));
			$id_jabatan = $dosen->row()->id_jabatan;

			$pengajuan = $this->LKD->getPengajuanMingguan($id_dosen);
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
			$data['jam'] = array();
			foreach($kategori->result() as $row){
				array_push($data['kategori'],$row);
			}
			$jam = $this->LKD->getConfig($id_jabatan);
			$row->jam = array();
			foreach($jam->result() as $row_j){
				$data['jam'][$row_j->id_kategori]=$row_j->jam;
			}

		$this->load->view('header_v');
		$this->load->view('dosen/laporanlkd_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
			$this->load->model(array('LKD'));
			if(!isset($_GET['q'])){
				header("location:".base_url()."dosen/laporanlkd");
			}
			else{
				$id = $_GET['q'];
				$detail = $this->LKD->getDetailEncrypted($id);
				if($detail->num_rows()==0){
					header("location:".base_url()."dosen/laporanlkd");
				}
				else{
					$data['kegiatan'] = $this->LKD->getKegiatan(null);
					$data['detail'] = $detail;
					$hari = $this->LKD->getHarianEncrypted($id);
					$data['hari'] = $hari;
					$this->load->view('header_v');
					$this->load->view('dosen/editlkd_v',$data);
					$this->load->view('footer_v');
				}
			}
		}else{
			header("location:".base_url());
		}
	}
	public function getData(){
		$this->load->model(array('LKD'));
		$id_pengajuan = $_POST['id_pengajuan'];
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

		echo json_encode(array('id'=>$json_id,'tanggal'=>$json_tanggal,'jam'=>$json_jam,'pengajuan'=>$aju));
	}

	function save(){
		$this->load->model(array('LKD'));
		$id = $_POST['id'];
		if(isset($_POST['id_hapus']))
		$id_hapus = $_POST['id_hapus'];
		$kegiatan = $_POST['kegiatan'];
		$waktu_awal = $_POST['waktu_awal'];
		$waktu_akhir = $_POST['waktu_akhir'];
		$cek = true;
		for ($i = 0; $i < count($kegiatan); $i++) {
				if($kegiatan[$i] !='' || $waktu_awal[$i] != '' || $waktu_akhir[$i]!=''){
					if($kegiatan[$i]==''){
						echo json_encode(array('status'=>'gagal','message'=>"Isi kegiatan terlebih dahulu!"));
						$cek = false;
						return;
					}
					if($waktu_awal[$i] >= $waktu_akhir[$i]){
						echo json_encode(array('status'=>'gagal','message'=>"Periksa waktu di kegiatan!"));
						return;
					}

				}
				for($j=$i+1 ; $j <count($kegiatan); $j++){
					if(($waktu_awal[$i] > $waktu_awal[$j] && $waktu_awal[$i] < $waktu_akhir[$j]) || ($waktu_akhir[$i] > $waktu_awal[$j] && $waktu_akhir[$i] < $waktu_akhir[$j]) || ($waktu_awal[$i] <= $waktu_awal[$j] && $waktu_akhir[$i] >= $waktu_akhir[$j])){
						echo json_encode(array('status'=>'gagal','message'=>"Periksa waktu bertabrakan!"));
						$cek = false;

						return;
					}
				}


			}
			if($cek==true){

				for ($i = 0; $i < count($kegiatan); $i++) {
					if($kegiatan[$i] !='' || $waktu_awal[$i] != '' || $waktu_akhir[$i]!=''){
					$data = array(
						'jam_awal'=>$waktu_awal[$i],
						'jam_akhir'=>$waktu_akhir[$i],
						'id_kegiatan'=>$kegiatan[$i],
					);
					$param = array(
						'id'=>$id[$i]
					);

					$this->LKD->updateDetail($param,$data);
				}

			}
			if(isset($id_hapus)){
				for ($i = 0; $i < count($id_hapus); $i++) {
					$param = array(
						'id'=>$id_hapus[$i]
					);
					$this->LKD->deleteDetail($param);
				}
			}
			echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil'));
		}
	}

	function pengajuan(){
		$id_pengajuan = $_POST['id_pengajuan'];
		$data = array(
			'status_pengajuan' => 0,
			'waktu_pengajuan'=>date("Y-m-d H:i:s"),
		);
		$this->load->model(array('LKD'));
		$update = $this->LKD->updatePengajuan(array('id'=>$id_pengajuan),$data);
		$this->LKD->updatePengajuanTotal($id_pengajuan);
		if($update){
			echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil!'));
		}
		else{
			echo json_encode(array('status'=>'gagal','message'=>'Update gagal!'));
		}
	}
}
