<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datadosen extends CI_Controller {

	public function index()
	{
		$this->load->model(array('Dosen'));
		$cek = $this->session->userdata('username');
		if ($cek == 'admin'){
			$array=array('page'=>2);
			$data['unit_kerja'] = $this->Dosen->getUnitKerja();
			$data['tipe'] = $this->Dosen->getTipe();
			$data['jabatan'] = $this->Dosen->getJabatan();
			$data['fakultas'] = $this->Dosen->getFakultas();
		$this->load->view('header_v',$array);
		$this->load->view('admin/datadosen_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}

	}
	function json() {
			$this->load->library('datatables');
			$this->load->model(array('Dosen'));
	        header('Content-Type: application/json');
	        echo $this->Dosen->json();
	    }

	function getDosen(){
		$this->load->model(array('Dosen'));
		$id = $_POST['id'];
		$pegawai = $this->Dosen->getPegawai(array('id'=>$id));

		$dosen = $this->Dosen->get(array('id_pegawai'=>$id));

		echo json_encode(array_merge($pegawai->row_array(),$dosen->row_array()));
	}
	function insert(){
		$this->load->model(array('Dosen'));
		$id = $this->input->post('id');


		if($this->input->post('status')=='')
			$status = null;
		else
			$status = $this->input->post('status');

		if($this->input->post('jabatan')=='')
			$jabatan = null;
		else
			$jabatan = $this->input->post('jabatan');

		if($this->input->post('unit_kerja')=='')
			$unit_kerja = null;
		else
			$unit_kerja = $this->input->post('unit_kerja');

		if($this->input->post('fakultas')=='')
			$fakultas = null;
		else
			$fakultas = $this->input->post('fakultas');

		$data_pegawai = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
		);
		$data_dosen = array(
			'id_tipe' => $status,
			'id_jabatan' => $jabatan,
			'id_unit_kerja' => $unit_kerja,
			'id_fakultas' => $fakultas
		);
		if(trim($data_pegawai['nama'])=='' || trim($data_pegawai['nip'])==''){
			echo json_encode(array('status'=>'gagal','message'=>'Data tidak boleh kosong!'));
		}
		else if(!is_numeric($data_pegawai['nip'])){
			echo json_encode(array('status'=>'gagal','message'=>'NIP salah!'));
		}
		else{
			$id = $this->Dosen->insertPegawai($data_pegawai);
			$data_dosen['id_pegawai'] = $id;
			$this->Dosen->insert($data_dosen);
			echo json_encode(array('status'=>'berhasil','message'=>'Input berhasil!'));
		}
	}

	function update(){
		$this->load->model(array('Dosen'));
		$id = $this->input->post('id');


		if($this->input->post('status')=='')
			$status = null;
		else
			$status = $this->input->post('status');

		if($this->input->post('jabatan')=='')
			$jabatan = null;
		else
			$jabatan = $this->input->post('jabatan');

		if($this->input->post('unit_kerja')=='')
			$unit_kerja = null;
		else
			$unit_kerja = $this->input->post('unit_kerja');

		if($this->input->post('fakultas')=='')
			$fakultas = null;
		else
			$fakultas = $this->input->post('fakultas');


			$data_pegawai = array(
				'nama' => $this->input->post('nama'),
				'nip' => $this->input->post('nip'),
			);
			$data_dosen = array(
				'id_tipe' => $status,
				'id_jabatan' => $jabatan,
				'id_unit_kerja' => $unit_kerja,
				'id_fakultas' => $fakultas
			);
		if(!is_numeric($data_pegawai['nip'])){
			echo json_encode(array('status'=>'gagal','message'=>'NIP salah!'));
		}
		else{
			$cek = $this->Dosen->updatePegawai(array('id'=>$id),$data_pegawai);
			$cek = $this->Dosen->update(array('id_pegawai'=>$id),$data_dosen);
			echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil!'));
		}
	}
}
