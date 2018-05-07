<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inputlkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
			$this->load->model(array('LKD'));
			$data['kegiatan'] = $this->LKD->getKegiatan(null);
			$this->load->view('header_v');
			$this->load->view('dosen/inputlkd_v',$data);
			$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function insert(){
		//print_r($_POST);
		if($_POST['tanggal']!=''){

			$hari_ini = date('Y-m-d');
			$tanggal = date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal'])))));

			if($tanggal<=$hari_ini){
				$this->load->model(array('LKD'));
				$id_dosen = $_SESSION['data']['id'];
				$id_pengajuan = $this->LKD->cekPengajuan($tanggal,$id_dosen);


				if($id_pengajuan==0){
					$id_periode = $this->LKD->cekPeriode($tanggal);
					if($id_periode==0){
						$id_periode = $this->LKD->insertPeriode($tanggal);
					}
					$array = array(
						'id_dosen' => $id_dosen,
						'id_periode'=>$id_periode,
					);
					$id_pengajuan = $this->LKD->insertPengajuan($array);
				}


				$id_harian = $this->LKD->cekHarian(array('tanggal'=>$tanggal,'id_pengajuan'=>$id_pengajuan));

				if($id_harian==0){

					$array = array(
						'tanggal' => $tanggal,
						'id_pengajuan' => $id_pengajuan
					);
					$id_harian = $this->LKD->insertHarian($array);
				}

				$kegiatan = $_POST['kegiatan'];
				$waktu_awal = $_POST['waktu_awal'];
				$waktu_akhir = $_POST['waktu_akhir'];
				$cek = true;
				for ($i = 0; $i < count($kegiatan); $i++) {
						if($kegiatan[$i] !='' || $waktu_awal[$i] != '' || $waktu_akhir[$i]!=''){
							if($kegiatan[$i]==''){
								echo json_encode(array('status'=>'gagal','message'=>"Isi kegiatan ".($i+1)." terlebih dahulu!"));
								$cek = false;
								return;
							}
							if($waktu_awal[$i] >= $waktu_akhir[$i]){
								echo json_encode(array('status'=>'gagal','message'=>"Periksa waktu di kegiatan ".($i+1)."!"));
								return;
							}

						}
						for($j=$i+1 ; $j <count($kegiatan); $j++){
							if(($waktu_awal[$i] > $waktu_awal[$j] && $waktu_awal[$i] < $waktu_akhir[$j]) || ($waktu_akhir[$i] > $waktu_awal[$j] && $waktu_akhir[$i] < $waktu_akhir[$j]) || ($waktu_awal[$i] <= $waktu_awal[$j] && $waktu_akhir[$i] >= $waktu_akhir[$j])){
								echo json_encode(array('status'=>'gagal','message'=>"Periksa waktu ".($i+1)." dan ".($j+1)." bertabrakan!"));
								$cek = false;

								return;
							}
						}
						if($this->LKD->cekKegiatan($waktu_awal[$i],$waktu_akhir[$i],$id_harian)!=0){
							echo json_encode(array('status'=>'gagal','message'=>"Periksa waktu ".($i+1).", waktu beririsan dengan kegiatan yang sudah ada!"));
							$cek = false;

							return;
						}

					}
					if($cek==true){
						$pengajuan = $this->LKD->getPengajuan(array('id'=>$id_pengajuan));
						if($pengajuan->row()->status_pengajuan != '-1'){
							echo json_encode(array('status'=>'gagal','message'=>'Tidak bisa menambahkan LKD anda telah di-ACC!'));
						}
						else{
							for ($i = 0; $i < count($kegiatan); $i++) {
								if($kegiatan[$i] !='' || $waktu_awal[$i] != '' || $waktu_akhir[$i]!=''){
								$data = array(
									'jam_awal'=>$waktu_awal[$i],
									'jam_akhir'=>$waktu_akhir[$i],
									'id_kegiatan'=>$kegiatan[$i],
									'id_lkd_harian'=>$id_harian
								);
								$this->LKD->insertDetail($data);
							}

						}
						echo json_encode(array('status'=>'berhasil','message'=>'Insert berhasil'));
					}
				}

			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Tanggal tidak valid!'));
			}

		}
		else{
			echo json_encode(array('status'=>'gagal','message'=>'Tanggal tidak boleh kosong!'));
		}
	}
}
