<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {

	public function index()
	{
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen'){
		$this->load->view('header_v');
		$this->load->view('dosen/ubahpassword_v');
		$this->load->view('footer_v');
		}else{
			header("location:".base_url());
		}
	}
	public function changePassword(){
		$cek = $this->session->userdata('status');
		if ($cek == 'dosen' && isset($_POST['old_password']) && isset($_POST['new_password'])){
			$this->load->model('Akun');
			$old_password = $_POST['old_password'];
			$new_password = $_POST['new_password'];
			$confirm_password = $_POST['confirm_password'];
			$id = $_SESSION['id'];
			if($new_password!=$confirm_password){
				echo json_encode(array('status'=>'gagal','message'=>'Password baru tidak sama'));
			}
			else if(strlen($new_password)<6){
				echo json_encode(array('status'=>'gagal','message'=>'Password minimal 6 karakter'));
			}
			else{
			$akun = $this->Akun->get(array('id'=>$id));
				if($akun->num_rows()>0){
					$akun = $akun->row();
					if (password_verify($old_password, $akun->password)) {
						$data['password'] = password_hash($new_password, PASSWORD_BCRYPT);
						$this->Akun->update(array('id'=>$id),$data);
						echo json_encode(array('status'=>'berhasil','message'=>'Password berhasil diubah!'));
					}
					else{
							echo json_encode(array('status'=>'gagal','message'=>'Password lama anda salah!'));
					}
				}
				else{
					echo json_encode(array('status'=>'gagal','message'=>'Akun tidak ditemukan!'));
				}
			}
		}
	}
}
