<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
	parent::__construct();
		// session_start();
	}

	public function index(){
		$this->load->library('session');
		$cek = $this->session->userdata('status');
		if(empty($cek)) {
			$this->load->view('login_v');
		}else{
			$st = $this->session->userdata('status');
			if ($st == 'admin')
					header("location:".base_url().'admin/home');
			else if($st == 'rek')
					header("location:".base_url().'pakrek/home');
			else if($st == 'dek')
					header("location:".base_url().'pakdek/home');
			else if($st == 'dosn')
					header("location:".base_url().'pakdos/home');
			else if($st == 'mhs')
					header("location:".base_url().'mhs/home');
			else
				header('location:'.base_url());
		}

	}
	function login(){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if(trim($username)=='' || $password==''){
			echo json_encode(array('status'=>'gagal','message'=>'Data tidak boleh kosong!'));
		}
		else{
			$this->load->model(array('LoginModel'));
			$result = $this->LoginModel->login($username,$password);
			if($result>0){
				reset($_SESSION['roles']);
				$first_key = key($_SESSION['roles']);

				ob_start();
				$this->selectRole($first_key,null);
				ob_end_clean();
				//print_r($_SESSION);
				echo json_encode(array('status'=>'berhasil','message'=>'Berhasil login'));
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Username atau password salah!'));
			}
		}
	}
	function selectRole($kode,$id){
		$_SESSION['data'] = $_SESSION['roles'][$kode]['data'];
		$_SESSION['status'] = $_SESSION['roles'][$kode]['status'];
		$_SESSION['status_name'] = $_SESSION['roles'][$kode]['status_name'];
		if(is_null($id))
		{
			$list = $_SESSION['roles'][$kode]['data']['list'];
			if(!is_null($list))
				$id=0;
		}
		if(!is_null($id)){
			if(isset($_SESSION['data']['list'][$id]))
			foreach ($_SESSION['data']['list'][$id] as $key => $value) {
				$_SESSION['data'][$key] = $value;
			}
		}
		$_SESSION['data']['id_list'] = $id;

		echo json_encode(array('status'=>'berhasil','message'=>'Berhasil mengganti role'));
	}
}
