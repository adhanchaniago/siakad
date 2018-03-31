<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model {
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tableakun = 't_akun';
      $this->tablemahasiswa = 't_mahasiswa';
      $this->tablepegawai = 't_pegawai';
      $this->tabledosen = 't_dosen';
      $this->tableadmin = 't_admin';
      $this->tableroleadmin = 't_role_admin';
    }
    public function login($usr, $pwd){
      $usr = trim($usr);
      $usr = $this->db->escape_str($usr);
      $cek_login =  $this->db->get_where($this->tableakun,array('username' => $usr));
      $cek = $cek_login->num_rows();


      if($cek>0){
        $akun = $cek_login->row();

        if (password_verify($pwd, $akun->password)) {

          $sess = array(
            'id' => $akun->id,
            'username' => $akun->username
          );

          $cek_admin = $this->cekAdmin(array('p.id_akun' => $akun->id));
          $cek = $cek_admin->num_rows();
          if($cek>0){

            $admin = $cek_admin->row();
            $sess['status'] = 'admin';
            $sess['data'] = array();
            $sess['data']['id'] = $admin->id_admin;
            $sess['data']['id_pegawai'] = $admin->id;
            $sess['data']['nama'] = $admin->nama;
            $sess['data']['nip'] = $admin->nip;
            $this->session->set_userdata($sess);
            return 1;
          }

          $cek_mhs = $this->db->get_where($this->tablemahasiswa,array('id_akun' => $akun->id));
          $cek = $cek_mhs->num_rows();
          if($cek>0){

            $mhs = $cek_mhs->row();
            $sess['status'] = 'mahasiswa';
            $sess['data'] = array();
            $sess['data']['id'] = $mhs->id;
            $sess['data']['nama'] = $mhs->nama;
            $sess['data']['nim'] = $mhs->nim;
            $this->session->set_userdata($sess);
            return 1;
          }

          $cek_rektor = $this->cekRektor(array('p.id_akun' => $akun->id));
          $cek = $cek_rektor->num_rows();

          if($cek>0){

            $rektor = $cek_rektor->row();
            $sess['status'] = 'rektor';
            $sess['data'] = array();
            $sess['data']['id'] = $rektor->id_rektor;
            $sess['data']['id_pegawai'] = $rektor->id;
            $sess['data']['nama'] = $rektor->nama;
            $sess['data']['nip'] = $rektor->nip;
            $this->session->set_userdata($sess);
            return 1;
          }

          $cek_dekan = $this->cekDekan(array('p.id_akun' => $akun->id,'r.id_role'=>1));
          $cek = $cek_dekan->num_rows();

          if($cek>0){

            $dekan = $cek_dekan->row();
            $sess['status'] = 'dekan';
            $sess['data'] = array();
            $sess['data']['id'] = $dekan->id_dekan;
            $sess['data']['id_pegawai'] = $dekan->id;
            $sess['data']['nama'] = $dekan->nama;
            $sess['data']['nip'] = $dekan->nip;
            $sess['data']['id_fakultas'] = $dekan->id_fakultas;
            $this->session->set_userdata($sess);
            return 1;
          }



          $cek_dosen = $this->cekDosen(array('p.id_akun' => $akun->id));
          $cek = $cek_dosen->num_rows();

          if($cek>0){

            $dosen = $cek_dosen->row();
            $sess['status'] = 'dosen';
            $sess['data'] = array();
            $sess['data']['id'] = $dosen->id_dosen;
            $sess['data']['id_pegawai'] = $dosen->id;
            $sess['data']['nama'] = $dosen->nama;
            $sess['data']['nip'] = $dosen->nip;
            $this->session->set_userdata($sess);
            return 1;
          }


          return -3;

        }
        else{
          return -2;
        }
      }
      else{
        return -1;
      }

    }
    private function cekDosen($parameter = array()){
      $this->db->select('p.id,d.id as id_dosen,p.nip,p.nama');
      $this->db->from($this->tablepegawai.' p');
      $this->db->join($this->tabledosen.' d','p.id = d.id_pegawai');
      $this->db->where($parameter);
      return $this->db->get();
    }

    private function cekDekan($parameter = array()){
      $this->db->select('p.id,d.id as id_dekan,r.id_fakultas as id_fakultas,p.nip,p.nama');
      $this->db->from($this->tablepegawai.' p');
      $this->db->join('t_dekan d','p.id = d.id_pegawai');
      $this->db->join('t_role_dekan r','r.id_dekan = d.id');

      $this->db->where($parameter);
      return $this->db->get();
    }
    private function cekRektor($parameter = array()){
      $this->db->select('p.id,d.id as id_rektor,p.nip,p.nama');
      $this->db->from($this->tablepegawai.' p');
      $this->db->join('t_rektor d','p.id = d.id_pegawai');
      $this->db->where($parameter);
      return $this->db->get();
    }

    private function cekAdmin($parameter = array()){
      $this->db->select('p.id,a.id as id_admin,p.nip,p.nama');
      $this->db->from($this->tablepegawai.' p');
      $this->db->join($this->tableadmin.' a','p.id = a.id_pegawai');
      $this->db->join('t_role_admin tr','a.id = tr.id_admin');
      $parameter['tr.id_tipe'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }

}
