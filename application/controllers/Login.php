<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
	parent::__construct();
		// session_start();
		$this->load->model('M_login');
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
			else if($st == 'rektor')
					header("location:".base_url().'rektor/home');
			else if($st == 'dekan')
					header("location:".base_url().'dekan/home');
			else if($st == 'dosen')
					header("location:".base_url().'dosen/home');
			else if($st == 'mhs')
					header("location:".base_url().'mahasiswa/home');
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
				echo json_encode(array('status'=>'berhasil','message'=>'Berhasil login'));
			}
			else{
				echo json_encode(array('status'=>'gagal','message'=>'Username atau password salah!'));
			}
		}
	}
}
