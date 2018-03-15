<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuanlkd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
			$this->load->model(array('LKD','Dosen'));
			$id_dosen = $_SESSION['data']['id'];
			$dosen = $this->Dosen->get(array('id'=>$id_dosen));
			$id_jabatan = $dosen->row()->id_jabatan;

			$pengajuan = $this->LKD->getPengajuanMingguan($id_dosen);

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
		$this->load->view('dosen/pengajuanlkd_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		$this->load->view('header_v');
		$this->load->view('dosen/editlkd_v');
		$this->load->view('footer_v');
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
		echo json_encode(array('id'=>$json_id,'tanggal'=>$json_tanggal,'jam'=>$json_jam));
	}
}
