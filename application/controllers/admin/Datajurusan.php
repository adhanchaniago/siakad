<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datajurusan extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
			$this->load->model(array('Fakultas','Jurusan'));
			$data['fakultas'] = $this->Fakultas->get(null);
		$this->load->view('header_v',$array);
		$this->load->view('admin/datajurusan/datajurusan_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
		$this->load->model(array('Fakultas','Jurusan','Semester'));
		$data['fakultas'] = $this->Fakultas->get(null);
		$data['jenjang'] = $this->Jurusan->getJenjang();
		$data['status'] = $this->Jurusan->getStatus();
		$data['semester'] = $this->Semester->getDetailAjaran();
		$this->load->view('header_v',$array);
		$this->load->view('admin/datajurusan/tambahjurusan_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'213');
			$this->load->model(array('Fakultas','Jurusan','Semester','Kaprodi'));
			$id = $_GET['id'];
			$role = $this->Kaprodi->getRole(array('id_jurusan'=>$id));
			$admin = $this->Kaprodi->getAdmin(array('id_jurusan'=>$id));
			$jurusan = $this->Jurusan->get(array('id'=>$id));
			if($jurusan->num_rows()>0){
			$data['jurusan'] = $jurusan->row();
			$data['admin'] = $admin->row();
			$data['role'] = $role;
			$data['fakultas'] = $this->Fakultas->get(null);
			$data['jenjang'] = $this->Jurusan->getJenjang();
			$data['status'] = $this->Jurusan->getStatus();
			$data['semester'] = $this->Semester->getDetailAjaran();
		$this->load->view('header_v',$array);
		$this->load->view('admin/datajurusan/editjurusan_v',$data);
		$this->load->view('footer_v');
		}
		else{
			header("location:".base_url());
		}
		}else{
			header("location:".base_url());
		}
	}

	public function insert(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			if(isset($_POST['kajur']))
				$pimpinan['kajur'] = $_POST['kajur'];
			if(isset($_POST['sekre']))
				$pimpinan['sekre'] = $_POST['sekre'];
			if(isset($_POST['operator']))
				$admin = $_POST['operator'];

			if(isset($pimpinan)){
				$count = array_count_values($pimpinan);
				foreach ($count as $row => $value) {
					if($value>1){
						echo json_encode(array('status'=>'gagal','message'=>'Pimpinan tidak boleh rangkap jabatan!'));
						return;
					}
				}
			}

			$jurusan = array(
				'id_fakultas'=> $_POST['id_fakultas'],
				'id_jenjang'=> $_POST['id_jenjang'],
				'kode' => $_POST['kode'],
				'uuid'=> $_POST['uuid'],
				'nama' => strtoupper($_POST['nama']),
				'tanggal_berdiri' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berdiri']))))),
				'nama_gelar' => $_POST['nama_gelar'],
				'total_sks' => $_POST['total_sks'],
				'id_semester_mulai' => $_POST['id_semester_mulai'],
				'id_status' => $_POST['id_status'],
				'no_telp' => $_POST['no_telp'],
				'email' => $_POST['email'],
				'no_sk_dikti' => $_POST['no_sk_dikti'],
				'tanggal_sk_dikti' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_sk_dikti']))))),
				'tanggal_berakhir_sk_dikti' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berakhir_sk_dikti']))))),
				'no_sk_ban' => $_POST['no_sk_ban'],
				'tanggal_sk_ban' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_sk_ban']))))),
				'tanggal_berakhir_sk_ban' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berakhir_sk_ban']))))),
			);
			$this->load->model(array('Jurusan','Kaprodi','Admin'));
			$id_jurusan = $this->Jurusan->insert($jurusan);

			if(isset($_POST['kajur'])){

				$kajur = array(
					'id_kajur' => $pimpinan['kajur'],
					'id_role' => 1,
					'id_jurusan' => $id_jurusan
				);
				$this->Kaprodi->insertRole($kajur);
			}
			if(isset($_POST['sekre'])){

				$sekre = array(
					'id_kajur' => $pimpinan['sekre'],
					'id_role' => 2,
					'id_jurusan' => $id_jurusan
				);
				$this->Kaprodi->insertRole($sekre);
			}
			if(isset($_POST['operator'])){
				$operator = array(
					'id_admin' => $admin,
					'id_jurusan' => $id_jurusan
				);
				$this->Admin->insertAdminJurusan($operator);
			}

			echo json_encode(array('status'=>'berhasil','message'=>'Jurusan berhasil dibuat!'));
		}
	}
	function editJurusan(){
		//print_r($_POST);
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){

			if(isset($_POST['kajur']))
				$pimpinan['kajur'] = $_POST['kajur'];
			if(isset($_POST['sekre']))
				$pimpinan['sekre'] = $_POST['sekre'];
			if(isset($_POST['operator']))
				$admin = $_POST['operator'];

			if(isset($pimpinan)){
				$count = array_count_values($pimpinan);
				foreach ($count as $row => $value) {
					if($value>1){
						echo json_encode(array('status'=>'gagal','message'=>'Pimpinan tidak boleh rangkap jabatan!'));
						return;
					}
				}
			}
			$id_jurusan = $_POST['id_jurusan'];
			$jurusan = array(
				'id_fakultas'=> $_POST['id_fakultas'],
				'id_jenjang'=> $_POST['id_jenjang'],
				'kode' => $_POST['kode'],
				'uuid'=> $_POST['uuid'],
				'nama' => strtoupper($_POST['nama']),
				'tanggal_berdiri' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berdiri']))))),
				'nama_gelar' => $_POST['nama_gelar'],
				'total_sks' => $_POST['total_sks'],
				'id_semester_mulai' => $_POST['id_semester_mulai'],
				'id_status' => $_POST['id_status'],
				'no_telp' => $_POST['no_telp'],
				'email' => $_POST['email'],
				'no_sk_dikti' => $_POST['no_sk_dikti'],
				'tanggal_sk_dikti' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_sk_dikti']))))),
				'tanggal_berakhir_sk_dikti' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berakhir_sk_dikti']))))),
				'no_sk_ban' => $_POST['no_sk_ban'],
				'tanggal_sk_ban' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_sk_ban']))))),
				'tanggal_berakhir_sk_ban' => date('Y-m-d',strtotime(implode("-", array_reverse(explode("/", $_POST['tanggal_berakhir_sk_ban']))))),
			);
			$this->load->model(array('Jurusan','Kaprodi','Admin'));
			$this->Jurusan->update(array('id'=>$id_jurusan),$jurusan);


			$kajur = array(
				'id_role' => 1,
				'id_jurusan' => $id_jurusan
			);
			//print_r($kajur);
			if(isset($_POST['kajur'])){
				$data = array(
					'id_kajur' => $pimpinan['kajur'],
				);

				$cek = $this->Kaprodi->getRole($kajur)->num_rows();
				if($cek>0){
					$cek = $this->Kaprodi->updateRole($kajur,$data);
				}
				else{
					$kajur['id_kajur'] = $pimpinan['kajur'];
					$this->Kaprodi->insertRole($kajur);
				}
			}
			else{
				$this->Kaprodi->deleteRole($kajur);
			}

			$sekre = array(
				'id_role' => 2,
				'id_jurusan' => $id_jurusan
			);
			if(isset($_POST['sekre'])){
				$data = array(
					'id_kajur' => $pimpinan['sekre'],
				);

				$cek = $this->Kaprodi->cekRole($sekre)->num_rows();
				if($cek>0){
					$cek = $this->Kaprodi->updateRole($sekre,$data);
				}
				else{
					$kajur['id_kajur'] = $pimpinan['sekre'];
					$this->Kaprodi->insertRole($sekre);
				}
			}
			else{
				$this->Kaprodi->deleteRole($sekre);
			}

			$operator = array(
				'id_jurusan' => $id_jurusan
			);
			if(isset($_POST['operator'])){
				$data = array(
					'id_admin' => $admin
				);

				$cek = $this->Admin->getAdminJurusan($operator)->num_rows();
				if($cek>0){
					$cek = $this->Admin->updateAdminJurusan($operator,$data);
				}
				else{
					$operator['id_admin'] = $admin;
					$this->Admin->insertAdminJurusan($operator);
				}

			}else{
				$this->Admin->deleteAdminJurusan($operator);
			}

			echo json_encode(array('status'=>'berhasil','message'=>'Jurusan berhasil diubah!'));
		}
	}
	public function getKaprodi(){
		$this->load->model('Kaprodi');
		$kaprodi = $this->Kaprodi->getCalon($_GET['q']);
		echo json_encode($kaprodi->result());
	}
	public function getOperator(){
		$this->load->model('Kaprodi');
		$admin = $this->Kaprodi->getOperator($_GET['q']);
		echo json_encode($admin->result());
	}
	function json() {
			$this->load->library('datatables');
			$fakultas = $_POST['id_fakultas'];
			$this->load->model(array('Jurusan'));
	        header('Content-Type: application/json');
	        echo $this->Jurusan->json($fakultas);
	    }
	function getSelectedRole(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
		$id_jurusan = $_POST['id_jurusan'];
		$this->load->model('Jurusan');
		$kelas = $this->Jurusan->getSelectedRole($id_jurusan);
		if($kelas->num_rows()==0)
		{
			$data = "<tr><td colspan='3'><center>Tidak Ada Kelas</center></td></tr>";
		}
		else{
			$data ="";
			$i = 1;
			foreach ($kelas->result() as $row) {
				$data.= "<tr><td>$i</td><td>$row->kelas<td><button type='button' name='button' class='btn btn-xs btn-danger' onclick='deleteRole($row->id)'><span class='fa fa-remove'></span></button></td>";
				$i++;
			}
		}
		echo json_encode(array('status'=>'berhasil','data'=>$data));
	}
	}
	function getNotSelectedRole(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
		$id_jurusan = $_POST['id_jurusan'];
		$this->load->model('Jurusan');
		$kelas = $this->Jurusan->getNotSelectedRole($id_jurusan);
		if($kelas->num_rows()==0)
		{
			$data= "<option selected disabled>-- Tidak Ada Kelas --</option>";
		}
		else{
			$data ="";
			foreach ($kelas->result() as $row) {
				$data.="<option value='$row->id'>$row->kelas</option>";
			}
		}
		echo json_encode(array('status'=>'berhasil','data'=>$data));
	}
	}
	function deleteRole(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
		$id_role = $_POST['id_role'];
		$this->load->model('Jurusan');
		$param = array('id'=>$id_role);
		$data = array('id_status'=>0);
		$kelas = $this->Jurusan->updateRole($param,$data);
		if($kelas){
			echo json_encode(array('status'=>'berhasil','message'=>'Kelas berhasil dihapus!'));
		}
		else{
			echo json_encode(array('status'=>'gagal','message'=>'Terjadi kesalahan!'));
		}
		}
	}
	function addRole(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
		$id_kelas = $_POST['id_kelas'];
		$id_jurusan = $_POST['id_jurusan'];
		$this->load->model('Jurusan');
		$data = array('id_kelas'=>$id_kelas,'id_jurusan'=>$id_jurusan);
		$cek = $this->Jurusan->getRole($data);
		if($cek->num_rows()==0){
			$kelas = $this->Jurusan->insertRole($data);
		}
		else{
			$kelas = $this->Jurusan->updateRole($data,array('id_status'=>1));
		}
		if($kelas){
			echo json_encode(array('status'=>'berhasil','message'=>'Kelas berhasil ditambahkan!'));
		}
		else{
			echo json_encode(array('status'=>'gagal','message'=>'Terjadi kesalahan!'));
		}
	}
	}
}
