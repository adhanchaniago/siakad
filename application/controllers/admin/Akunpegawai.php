<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akunpegawai extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'231');
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/akunpegawai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	public function add()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$array=array('page'=>'231');
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/tambahakunpegawai_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}

	function json() {
			$this->load->library('datatables');
			$this->load->model(array('Pegawai'));
      header('Content-Type: application/json');
      echo $this->Pegawai->json();
	    }

	public function edit()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'admin' && isset($_GET['id'])){
			$this->load->model('Pegawai');
			$data['pegawai'] = $this->Pegawai->getAkunPegawai(array('a.id'=>$_GET['id']));
			$array=array('page'=>'231');
		$this->load->view('header_v',$array);
		$this->load->view('admin/akunpegawai/editakunpegawai_v',$data);
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	function insert(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model('Pegawai');
			$pegawai = array(
				'nip' => $_POST['nip'],
				'nama' => $_POST['nama'],
				'id_status' => 1
			);
			if(isset($_POST['email']))
				$pegawai['email'] = $_POST['email'];
			if(isset($_POST['no_telp']))
				$pegawai['no_telp'] = $_POST['no_telp'];
			$akun = array(
				'username' => trim($_POST['username']),
			);
			$cek = $this->Pegawai->getAkun($akun);
			if($cek->num_rows() > 0){
				echo json_encode(array('status'=>'gagal','message'=>'Username telah digunakan!'));
			}
			else{
				$cek = $this->Pegawai->get(array('nip' => $pegawai['nip']));
				if($cek->num_rows() > 0){
					echo json_encode(array('status'=>'gagal','message'=>'NIP telah digunakan!'));
				}
				else{
					$akun['password'] = password_hash($akun['username'], PASSWORD_BCRYPT);
					$id_akun = $this->Pegawai->insertAkun($akun);
					$pegawai['id_akun'] = $id_akun;
					$this->Pegawai->insert($pegawai);
					echo json_encode(array('status'=>'berhasil','message'=>'Akun pegawai berhasil dibuat!'));
				}
				}
			}
	}
	function update(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin'){
			$this->load->model('Pegawai');
			$pegawai = array(
				'nip' => $_POST['nip'],
				'nama' => $_POST['nama'],
				'id_status' => 1
			);
			$id = $_POST['id'];
			if(isset($_POST['email']))
				$pegawai['email'] = $_POST['email'];
			if(isset($_POST['no_telp']))
				$pegawai['no_telp'] = $_POST['no_telp'];
			$akun = array(
				'username' => trim($_POST['username']),
				'id !=' => $id
			);
			$cek = $this->Pegawai->getAkun($akun);
			if($cek->num_rows() > 0){
				echo json_encode(array('status'=>'gagal','message'=>'Username telah digunakan!'));
		}
		else{
			$cek = $this->Pegawai->get(array('nip' => $pegawai['nip'],'id_akun !=' => $id));
			if($cek->num_rows() > 0){
				echo json_encode(array('status'=>'gagal','message'=>'NIP telah digunakan!'));
			}
			else{
				$upd = array(
					'username' => $_POST['username'],
				);
				$this->Pegawai->updateAkun(array('id'=>$id),$upd);
				$this->Pegawai->update(array('id_akun'=>$id),$pegawai);
				echo json_encode(array('status'=>'berhasil','message'=>'Akun pegawai berhasil diupdate!'));
				}
			}
		}
	}
	function resetPassword(){
		$cek = $this->session->userdata('status');
		if ($cek == 'admin' && isset($_POST['id_akun'])){
			$this->load->model('Pegawai');
			$akun = array(
				'id' => $_POST['id_akun']
			);
			$pgw = $this->Pegawai->getAkun($akun);
			if($pgw->num_rows()>0){
				$data = array(
					'password'=> password_hash($pgw->row()->username, PASSWORD_BCRYPT)
				);
				$this->Pegawai->updateAkun($akun,$data);
				echo json_encode(array('status'=>'berhasil','message'=>'Password pegawai berhasil direset!'));
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Akun tidak ditemukan!'));
			}
		}
	}
	function getRole(){
		$cek = $this->session->userdata('status');
			if ($cek == 'admin' && isset($_POST['id_pegawai'])){
				$this->load->model(array('Role','Pegawai'));
				$id_pegawai = $_POST['id_pegawai'];
				$not_role = $this->Role->getNonRoleAdmin($id_pegawai);
				$options = "";
				foreach ($not_role->result() as $row) {
					$options .= "<option value='$row->kode'>$row->nama</option>";
				}

				$role = $this->Role->getRoleAdmin($id_pegawai);
				$table = "";
				$i = 1;
				foreach ($role->result() as $row) {
					$table .= "<tr><td>".$i++."</td><td>$row->nama</td><td><center> <button type='button' onclick='hapusRole(\"$row->kode\")' class='btn btn-xs btn-danger'><span class='fa fa-remove'></span></button></center></td></tr>";
				}

				$kaprodi = $this->Role->getRoleJurusan($id_pegawai);
				if($kaprodi->num_rows()>0){
					$table .= "<tr><td>".$i++."</td><td>Pimpinan Jurusan</td><td><center> <button type='button' onclick='hapusRole(\"prodi\")' class='btn btn-xs btn-danger'><span class='fa fa-remove'></span></button></center></td></tr>";
				}
				else{
					$options .= "<option value='prodi'>Pimpinan Jurusan</option>";
				}

				$dekan = $this->Role->getRoleDekan($id_pegawai);
				if($dekan->num_rows()>0){
					$table .= "<tr><td>".$i++."</td><td>Pimpinan Fakultas</td><td><center> <button type='button' onclick='hapusRole(\"dekan\")' class='btn btn-xs btn-danger'><span class='fa fa-remove'></span></button></center></td></tr>";
				}
				else{
					$options .= "<option value='dekan'>Pimpinan Fakultas</option>";
				}
				$dosen = $this->Role->getRoleDosen($id_pegawai);
				if($dosen->num_rows()>0){
					$table .= "<tr><td>".$i++."</td><td>Dosen</td><td><center> <button type='button' onclick='hapusRole(\"dosen\")' class='btn btn-xs btn-danger'><span class='fa fa-remove'></span></button></center></td></tr>";
				}
				else{
					$options .= "<option value='dosen'>Dosen</option>";
				}
				$data['pegawai'] = $this->Pegawai->get(array('id'=>$id_pegawai))->row();
				$data['not_selected'] = $options;
				$data['selected'] = $table;
				echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil!','data'=>$data));
			}
	}
	function addRole(){
		$cek = $this->session->userdata('status');
			if ($cek == 'admin' && isset($_POST['id_pegawai']) && isset($_POST['kode'])){
				$this->load->model(array('Role','Dosen','Admin','Dekan','Kaprodi'));
				$id_pegawai = $_POST['id_pegawai'];
				$kode = $_POST['kode'];
				if($kode == 'super' ||$kode == 'sisfo' ||$kode == 'smb' ||$kode == 'keuangan' ||$kode == 'fakultas' || $kode == 'jurusan'){
					$cek = $this->Role->cekRoleAdmin($id_pegawai,$kode);
					$id_role = $this->Role->get('t_tipe_admin', array('kode'=>$kode))->row()->id;
					if($cek->num_rows()==0){
						$id_admin = $this->Admin->insert(array('id_pegawai'=>$id_pegawai));
						$this->Role->insertRoleAdmin(array('id_admin'=>$id_admin,'id_role'=>$id_role));
					}
					else{
						$id_admin = $cek->row()->id;
						if($cek->row()->status == null)
							$this->Role->insertRoleAdmin(array('id_admin'=>$id_admin,'id_role'=>$id_role));
						else if($cek->row()->status == 0)
							$this->Role->updateRoleAdmin(array('id_admin'=>$id_admin,'id_role'=>$id_role),array('id_status'=>1));
					}

					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil ditambah!'));
				}
				else if($kode=='dosen'){
					$cek = $this->Dosen->get(array('id_pegawai'=>$id_pegawai));
					if($cek->num_rows()==0){
						$this->Dosen->insert(array('id_pegawai'=>$id_pegawai));
					}
					else{
						$this->Dosen->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>1));
					}
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil ditambah!'));
				}
				else if($kode=='dekan'){
					$cek = $this->Dekan->get(array('id_pegawai'=>$id_pegawai));
					if($cek->num_rows()==0){
						$this->Dekan->insert(array('id_pegawai'=>$id_pegawai));
					}
					else{
						$this->Dekan->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>1));
					}
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil ditambah!'));
				}
				else if($kode=='prodi'){
					$cek = $this->Kaprodi->get(array('id_pegawai'=>$id_pegawai));
					if($cek->num_rows()==0){
						$this->Kaprodi->insert(array('id_pegawai'=>$id_pegawai));
					}
					else{
						$this->Kaprodi->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>1));
					}
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil ditambah!'));
				}
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Role gagal ditambah!'));
			}
	}

	function deleteRole(){
		$cek = $this->session->userdata('status');
			if ($cek == 'admin' && isset($_POST['id_pegawai']) && isset($_POST['kode'])){
				$this->load->model(array('Role','Dosen','Admin','Dekan','Kaprodi'));
				$id_pegawai = $_POST['id_pegawai'];
				$kode = $_POST['kode'];
				if($kode == 'super' ||$kode == 'sisfo' ||$kode == 'smb' ||$kode == 'keuangan' ||$kode == 'fakultas' || $kode == 'jurusan'){
					$cek = $this->Role->cekRoleAdmin($id_pegawai,$kode);
					$id_role = $this->Role->get('t_tipe_admin', array('kode'=>$kode))->row()->id;
					$id_admin = $cek->row()->id;
					$this->Role->updateRoleAdmin(array('id_admin'=>$id_admin,'id_role'=>$id_role),array('id_status'=>0));
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil diedit!'));
				}
				else if($kode=='dosen'){
					$cek = $this->Dosen->get(array('id_pegawai'=>$id_pegawai));
					$this->Dosen->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>0));
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil diedit!'));
				}
				else if($kode=='dekan'){
					$cek = $this->Dekan->get(array('id_pegawai'=>$id_pegawai));
					$this->Dekan->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>0));
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil diedit!'));
				}
				else if($kode=='prodi'){
					$cek = $this->Kaprodi->get(array('id_pegawai'=>$id_pegawai));
					$this->Kaprodi->update(array('id_pegawai'=>$id_pegawai),array('id_status'=>0));
					echo json_encode(array('status'=>'berhasil','message'=>'Role berhasil diedit!'));
				}
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Role gagal ditambah!'));
			}
	}
}
