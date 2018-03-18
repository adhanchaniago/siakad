<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formttd extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
			$array=array('page'=>6);
			$this->load->model(array('Dosen'));
			$id_pegawai = $_SESSION['data']['id_pegawai'];
			$data['pegawai'] = $this->Dosen->getPegawai(array('id'=>$id_pegawai))->row();
		$this->load->view('header_v',$array);
		$this->load->view('dekan/formttd_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function signature()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dekan'){
		$this->load->view('signature_v');
		}else{
			header("location:".base_url());
		}
	}
	function upload(){
		$config['upload_path'] = '././assets/images/signatures';
		$id_pegawai = $_SESSION['data']['id_pegawai'];
				$config['allowed_types'] = 'png';
				$config['max_size']  = '9999999';
				$config['max_width']  = '99999';
				$config['max_height']  = '99999';
				$config['file_name'] = md5($id_pegawai);
				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('ttd')){
						$status = "gagal";
						$msg = $this->upload->display_errors();
				}
				else{
						$dataupload = $this->upload->data();
						$url_ttd = "assets/images/signatures/".$dataupload['file_name'];
						$status = "berhasil";
						$msg = $dataupload['file_name']." berhasil diupload";
				}
				if($status=="berhasil"){
					$this->load->model(array('Dosen'));
					$pegawai = $this->Dosen->getPegawai(array('id'=>$id_pegawai))->row();
					$old_file = '././'.$pegawai->ttd;
					if($pegawai->ttd!='')
					unlink($old_file);
					$this->Dosen->updatePegawai(array('id'=>$id_pegawai),array('ttd'=>$url_ttd));
				}
				echo json_encode(array('status'=>$status,'message'=>$msg));
	}
}
