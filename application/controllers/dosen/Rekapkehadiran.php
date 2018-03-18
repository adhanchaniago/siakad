<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekapkehadiran extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		$this->load->model(array('LKD'));
		$data['bulan'] = $this->LKD->getBulanPengajuan();
		$this->load->view('header_v');
		$this->load->view('dosen/rekapkehadiran_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function getData(){
		$this->load->model(array('LKD','Dosen'));
		$id_dosen = $_SESSION['data']['id'];
		$dosen = $this->Dosen->getAll(array('d.id'=>$id_dosen))->row();
		$periode = $_POST['kode'];
		$pengajuan_bulanan = $this->LKD->getPengajuanBulanan(array('id_dosen'=>$id_dosen,'kode_bulan'=>$periode));
		$pengajuan = $pengajuan_bulanan->row();
		if($pengajuan!=null)
			$pengajuan->id = md5($pengajuan->id);
		$kode = explode("-",$periode);
		$data = $this->LKD->getBulanData($id_dosen,$kode[0],$kode[1]);
		echo json_encode(array('dosen'=>$dosen,'bulan'=>$data->result_array(),'pengajuan'=>$pengajuan));
	}
	function pengajuan(){
		$this->load->model(array('LKD','Dosen'));
		$id_dosen = $_SESSION['data']['id'];
		$kode = $_POST['kode'];

		$kode_ex = explode("-",$kode);
		$bulan = $this->LKD->getBulanData($id_dosen,$kode_ex[0],$kode_ex[1]);
		$cek = true;
		if(count($bulan->result_array())<4){
			echo json_encode(array('status'=>'gagal','message'=>"Pengajuan masih kurang!"));
		}
		else{
			foreach ($bulan->result() as $row) {
				if($row->status_pengajuan!='1'){
					echo json_encode(array('status'=>'gagal','message'=>"Pastikan semua pengajuan mingguan telah di-ACC oleh dekan!"));
				}
			}

			$pengajuan_bulanan = $this->LKD->getPengajuanBulanan(array('id_dosen'=>$id_dosen,'kode_bulan'=>$kode));
			if($pengajuan_bulanan->num_rows()>0)
			{
				$data = array(
					'status_pengajuan'=>0
				);
				$this->LKD->updatePengajuanBulanan(array('id'=>$pengajuan_bulanan->row()->id),$data);
			}
			else{
				$data = array(
					'id_dosen'=>$id_dosen,
					'kode_bulan'=>$kode,
					'status_pengajuan'=>0
				);
				$this->LKD->insertPengajuanBulanan($data);

			}
			echo json_encode(array('status'=>'berhasil','message'=>"Pengajuan berhasil dilakukan!"));
		}


	}
}
