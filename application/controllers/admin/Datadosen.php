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
		$dosen = $this->Dosen->get(array('id'=>$id));
		echo json_encode($dosen->row());

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
		

		
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
			'id_tipe' => $status,
			'id_jabatan' => $jabatan,
			'id_unit_kerja' => $unit_kerja,
		);
		if(trim($data['nama'])=='' || trim($data['nip'])==''){
			echo json_encode(array('status'=>'gagal','message'=>'Data tidak boleh kosong!'));
		}
		else if(!is_numeric($data['nip'])){
			echo json_encode(array('status'=>'gagal','message'=>'NIP salah!'));
		}
		else{
			$cek = $this->Dosen->insert($data);
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
		

		
		$data = array(
			'nama' => $this->input->post('nama'),
			'nip' => $this->input->post('nip'),
			'id_tipe' => $status,
			'id_jabatan' => $jabatan,
			'id_unit_kerja' => $unit_kerja,
		);
		if(!is_numeric($data['nip'])){
			echo json_encode(array('status'=>'gagal','message'=>'NIP salah!'));
		}
		else{
			$cek = $this->Dosen->update(array('id'=>$id),$data);
			echo json_encode(array('status'=>'berhasil','message'=>'Update berhasil!'));
		}
	}
}
