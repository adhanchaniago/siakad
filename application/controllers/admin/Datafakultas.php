<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datafakultas extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'212');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datafakultas/datafakultas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'212');
		$this->load->view('header_v',$array);
		$this->load->view('admin/datafakultas/tambahfakultas_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin' && isset($_GET['id'])){
			$array=array('page'=>'212');

			$id = $_GET['id'];
			$this->load->model(array('Dekan','Fakultas'));
			$role = $this->Dekan->getRole(array('id_fakultas'=>$id));
			$fakultas = $this->Fakultas->get(array('id'=>$id));
			if($fakultas->num_rows()>0){
			$data['fakultas'] = $fakultas->row();
			$data['role'] = $role;
		$this->load->view('header_v',$array);
		$this->load->view('admin/datafakultas/editfakultas_v',$data);
		$this->load->view('footer_v');
	}
	else{
		header("location:".base_url());
	}
		}else{
			header("location:".base_url());
		}
	}
	function json() {
			$this->load->library('datatables');
			$this->load->model(array('Fakultas'));
	        header('Content-Type: application/json');
	        echo $this->Fakultas->json();
	    }
	public function getDekan(){
		$this->load->model('Dekan');
		$dekan = $this->Dekan->getCalon($_GET['q']);
		echo json_encode($dekan->result());
	}
	public function insert(){
		if(isset($_POST['dekan']))
			$pimpinan['dekan'] = $_POST['dekan'];
		if(isset($_POST['wadek_akademik']))
			$pimpinan['wadek_akademik'] = $_POST['wadek_akademik'];
		if(isset($_POST['wadek_keuangan']))
			$pimpinan['wadek_keuangan'] = $_POST['wadek_keuangan'];
		if(isset($_POST['wadek_kemahasiswaan']))
			$pimpinan['wadek_kemahasiswaan'] = $_POST['wadek_kemahasiswaan'];

		if(isset($pimpinan)){
			$count = array_count_values($pimpinan);
			foreach ($count as $row => $value) {
				if($value>1){
					echo json_encode(array('status'=>'gagal','message'=>'Pimpinan tidak boleh rangkap jabatan!'));
					return;
				}
			}
		}

		$fakultas = array(
			'kode' => $_POST['kode'],
			'nama' => strtoupper($_POST['nama'])
		);
		$this->load->model(array('Fakultas','Dekan'));
		$id_fakultas = $this->Fakultas->insert($fakultas);

		if(isset($_POST['dekan'])){

			$dekan = array(
				'id_dekan' => $pimpinan['dekan'],
				'id_role' => 1,
				'id_fakultas' => $id_fakultas
			);
			$this->Dekan->insertRole($dekan);
		}
		if(isset($_POST['wadek_akademik'])){

			$wadek1 = array(
				'id_dekan' => $pimpinan['wadek_akademik'],
				'id_role' => 2,
				'id_fakultas' => $id_fakultas
			);
			$this->Dekan->insertRole($wadek1);
		}
		if(isset($_POST['wadek_keuangan'])){

			$wadek2 = array(
				'id_dekan' => $pimpinan['wadek_keuangan'],
				'id_role' => 3,
				'id_fakultas' => $id_fakultas
			);
			$this->Dekan->insertRole($wadek2);
		}
		if(isset($_POST['wadek_kemahasiswaan'])){

			$wadek3 = array(
				'id_dekan' => $pimpinan['wadek_kemahasiswaan'],
				'id_role' => 4,
				'id_fakultas' => $id_fakultas
			);
			$this->Dekan->insertRole($wadek3);
		}
		echo json_encode(array('status'=>'berhasil','message'=>'Fakultas berhasil dibuat!'));
	}
	public function editFakultas(){
		if(isset($_POST['dekan']))
			$pimpinan['dekan'] = $_POST['dekan'];
		if(isset($_POST['wadek_akademik']))
			$pimpinan['wadek_akademik'] = $_POST['wadek_akademik'];
		if(isset($_POST['wadek_keuangan']))
			$pimpinan['wadek_keuangan'] = $_POST['wadek_keuangan'];
		if(isset($_POST['wadek_kemahasiswaan']))
			$pimpinan['wadek_kemahasiswaan'] = $_POST['wadek_kemahasiswaan'];

		if(isset($pimpinan)){
			$count = array_count_values($pimpinan);
			foreach ($count as $row => $value) {
				if($value>1){
					echo json_encode(array('status'=>'gagal','message'=>'Pimpinan tidak boleh rangkap jabatan!'));
					return;
				}
			}
		}

		$fakultas = array(
			'kode' => $_POST['kode'],
			'nama' => strtoupper($_POST['nama'])
		);
		$this->load->model(array('Fakultas','Dekan'));
		$id_fakultas = $_POST['id'];
		$this->Fakultas->update(array('id'=>$id_fakultas),$fakultas);

		$dekan = array(
			'id_role' => 1,
			'id_fakultas' => $id_fakultas
		);
		if(isset($_POST['dekan'])){
			$data = array(
				'id_dekan' => $pimpinan['dekan'],
			);
			$cek = $this->Dekan->getRole($dekan)->num_rows();
			if($cek>0){
				$cek = $this->Dekan->updateRole($dekan,$data);
			}
			else{
				$dekan['id_dekan'] = $pimpinan['dekan'];
				$this->Dekan->insertRole($dekan);
			}
		}
		else{
			$this->Dekan->deleteRole($dekan);
		}

		$wadek1 = array(
			'id_role' => 2,
			'id_fakultas' => $id_fakultas
		);
		if(isset($_POST['wadek_akademik'])){
			$data = array(
				'id_dekan' => $pimpinan['wadek_akademik'],
			);
			$cek = $this->Dekan->getRole($wadek1)->num_rows();
			if($cek>0){
				$cek = $this->Dekan->updateRole($wadek1,$data);
			}
			else{
				$wadek1['id_dekan'] = $pimpinan['wadek_akademik'];
				$this->Dekan->insertRole($wadek1);
			}
		}
		else{
			$this->Dekan->deleteRole($wadek1);
		}

		$wadek2 = array(
			'id_role' => 3,
			'id_fakultas' => $id_fakultas
		);
		if(isset($_POST['wadek_keuangan'])){
			$data = array(
				'id_dekan' => $pimpinan['wadek_keuangan'],
			);
			$cek = $this->Dekan->getRole($wadek2)->num_rows();
			if($cek>0){
				$cek = $this->Dekan->updateRole($wadek2,$data);
			}
			else{
				$wadek2['id_dekan'] = $pimpinan['wadek_keuangan'];
				$this->Dekan->insertRole($wadek2);
			}
		}else{
			$this->Dekan->deleteRole($wadek2);
		}

		$wadek3 = array(
			'id_role' => 4,
			'id_fakultas' => $id_fakultas
		);
		if(isset($_POST['wadek_kemahasiswaan'])){
			$data = array(
				'id_dekan' => $pimpinan['wadek_kemahasiswaan'],
			);
			$cek = $this->Dekan->getRole($wadek3)->num_rows();
			if($cek>0){
				$cek = $this->Dekan->updateRole($wadek3,$data);
			}
			else{
				$wadek3['id_dekan'] = $pimpinan['wadek_kemahasiswaan'];
				$this->Dekan->insertRole($wadek3);
			}
		}
		else{
			$this->Dekan->deleteRole($wadek3);
		}


		echo json_encode(array('status'=>'berhasil','message'=>'Fakultas berhasil diedit!'));

	}

}
