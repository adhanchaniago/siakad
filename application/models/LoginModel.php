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

          $pgw = $this->cekPegawai(array('id_akun'=>$akun->id));
          if($pgw->num_rows()>0){
            $pgw = $pgw->row();
            $this->load->model('Role');



            $dosen = $this->cekDosen(array('id_pegawai'=>$pgw->id));
            if($dosen->num_rows()>0){
              $dosen = $dosen->row();
              $sess['roles']['dosen'] = array();
              $sess['roles']['dosen']['status'] = 'dosen';
              $sess['roles']['dosen']['status_name'] = 'Dosen';
              $sess['roles']['dosen']['data']['id'] = $dosen->id;
              $sess['roles']['dosen']['data']['tipe'] = 'Dosen';
              $sess['roles']['dosen']['data']['list'] = null;
              $sess['roles']['dosen']['data']['id_pegawai'] = $pgw->id;
              $sess['roles']['dosen']['data']['nip'] = $pgw->nip;
              $sess['roles']['dosen']['data']['nama'] = $pgw->nama;
            }
            $rektor = $this->cekRektor(array('id_pegawai'=>$pgw->id));

            if($rektor->num_rows()>0){
              $rektor = $rektor->row();
              $roles = $this->Role->getDetailRoleRektor($pgw->id);
              if($roles->num_rows()>0){
                $sess['roles']['rektor']['status'] = 'rektor';
                $sess['roles']['rektor']['status_name'] = 'Pimpinan Kampus';
                foreach ($roles->result() as $row) {
                  $sess['roles'][$row->kode]['data'] = array();

                  $sess['roles']['rektor']['data']['tipe'] = $row->nama;
                  $sess['roles']['rektor']['data']['list'] = null;
                  $sess['roles']['rektor']['data']['id'] = $rektor->id;
                  $sess['roles']['rektor']['data']['id_pegawai'] = $pgw->id;
                  $sess['roles']['rektor']['data']['nip'] = $pgw->nip;
                  $sess['roles']['rektor']['data']['nama'] = $pgw->nama;
                  }
                }
              }

            $dekan = $this->cekDekan(array('id_pegawai'=>$pgw->id));

            if($dekan->num_rows()>0){
              $dekan = $dekan->row();

              $roles = $this->Role->getDetailRoleDekan($pgw->id);

              if($roles->num_rows()>0){

                foreach ($roles->result() as $row) {
                  $id_role = $row->id;
                  $types = $this->getDekanFakultas(array('rd.id_dekan'=>$dekan->id,'rd.id_role'=>$id_role,'rd.id_status'=>1));
                  if($types->num_rows()>0){
                    $sess['roles'][$row->kode]['data'] = array();
                    $sess['roles'][$row->kode]['data']['tipe'] = $row->nama;
                    $sess['roles'][$row->kode]['data']['list'] = array();
                    $sess['roles'][$row->kode]['status'] = 'dekan';
                    $sess['roles'][$row->kode]['status_name'] = 'Pimpinan Fakultas';
                    foreach ($types->result() as $row2) {
                      $f = array(
                        'id_fakultas' => $row2->id_fakultas,
                        'nama_fakultas' => $row2->fakultas
                      );
                      array_push($sess['roles'][$row->kode]['data']['list'],$f);
                    }
                    $sess['roles'][$row->kode]['data']['id'] = $dekan->id;
                    $sess['roles'][$row->kode]['data']['id_pegawai'] = $pgw->id;
                    $sess['roles'][$row->kode]['data']['nip'] = $pgw->nip;
                    $sess['roles'][$row->kode]['data']['nama'] = $pgw->nama;
                  }
                }
              }
            }

            $kaprodi = $this->cekKaprodi(array('id_pegawai'=>$pgw->id));

            if($kaprodi->num_rows()>0){
              $kaprodi = $kaprodi->row();

              $roles = $this->Role->getDetailRoleKaprodi($pgw->id);

              if($roles->num_rows()>0){

                foreach ($roles->result() as $row) {
                  $id_role = $row->id;
                  $types = $this->getKaprodi(array('rk.id_kajur'=>$kaprodi->id,'rk.id_role'=>$id_role,'rk.id_status'=>1));
                  if($types->num_rows()>0){
                    $sess['roles'][$row->kode]['data'] = array();
                    $sess['roles'][$row->kode]['data']['tipe'] = $row->nama;
                    $sess['roles'][$row->kode]['data']['list'] = array();
                    $sess['roles'][$row->kode]['status'] = 'kaprodi';
                    $sess['roles'][$row->kode]['status_name'] = 'Pimpinan Prodi';
                    foreach ($types->result() as $row2) {
                      $f = array(
                        'id_jurusan' => $row2->id_jurusan,
                        'nama_jurusan' => $row2->jurusan
                      );
                      array_push($sess['roles'][$row->kode]['data']['list'],$f);
                    }
                    $sess['roles'][$row->kode]['data']['id'] = $dekan->id;
                    $sess['roles'][$row->kode]['data']['id_pegawai'] = $pgw->id;
                    $sess['roles'][$row->kode]['data']['nip'] = $pgw->nip;
                    $sess['roles'][$row->kode]['data']['nama'] = $pgw->nama;
                  }
                }
              }
            }

            $admin = $this->cekAdmin(array('id_pegawai'=>$pgw->id));
            if($admin->num_rows()>0){
              $admin = $admin->row();
              $roles = $this->Role->getRoleAdmin($pgw->id);
              if($roles->num_rows()>0){

                foreach ($roles->result() as $row) {

                  if($row->kode == 'fakultas'){
                    $fakultas = $this->cekAdminFakultas(array('id_admin'=>$admin->id));
                    if($fakultas->num_rows()>0){
                      $sess['roles'][$row->kode]['data'] = array();
                      $sess['roles'][$row->kode]['data']['tipe'] = $row->nama;
                      $sess['roles'][$row->kode]['data']['list'] = array();
                      foreach ($fakultas->result() as $row2) {
                        $f = array(
                          'id_admin_fakultas' => $row2->id,
                          'id_fakultas' => $row2->id_fakultas,
                          'nama_fakultas' => $row2->fakultas
                        );
                        array_push($sess['roles'][$row->kode]['data']['list'],$f);
                      }
                    }
                    else{
                      continue;
                    }
                  }
                  else if($row->kode == 'jurusan'){
                    $jurusan = $this->cekAdminJurusan(array('id_admin'=>$admin->id));
                    if($jurusan->num_rows()>0){
                      $sess['roles'][$row->kode]['data'] = array();
                      $sess['roles'][$row->kode]['data']['list'] = array();
                      $sess['roles'][$row->kode]['data']['tipe'] = $row->nama;
                      foreach ($jurusan->result() as $row2) {
                        $j = array(
                          'id_admin_jurusan' => $row2->id,
                          'id_jurusan' => $row2->id_jurusan,
                          'nama_jurusan' => $row2->jurusan
                        );
                        array_push($sess['roles'][$row->kode]['data']['list'],$j);
                      }
                    }
                    else{
                      continue;
                    }
                  }
                  else{
                    $sess['roles'][$row->kode]['data'] = array();
                    $sess['roles'][$row->kode]['data']['tipe'] = $row->nama;
                    $sess['roles'][$row->kode]['data']['list'] = null;
                  }
                  $sess['roles'][$row->kode]['status'] = 'admin';
                  $sess['roles'][$row->kode]['status_name'] = 'Admin';
                  $sess['roles'][$row->kode]['data']['id'] = $admin->id;
                  $sess['roles'][$row->kode]['data']['id_pegawai'] = $pgw->id;
                  $sess['roles'][$row->kode]['data']['nip'] = $pgw->nip;
                  $sess['roles'][$row->kode]['data']['nama'] = $pgw->nama;
                }

              }
            }
            if(isset($sess['roles'])){
              $this->session->set_userdata($sess);
              return 1;
            }
            return -1;
          }

          return -3;
        }
        }
        else{
          return -2;
        }
      }


    private function cekPegawai($parameter = array()){
      $this->db->select('p.id,p.nip,p.nama');
      $this->db->from($this->tablepegawai.' p');
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }
    // private function cekDosen($parameter = array()){
    //   $this->db->select('p.id,d.id as id_dosen,p.nip,p.nama');
    //   $this->db->from($this->tablepegawai.' p');
    //   $this->db->join($this->tabledosen.' d','p.id = d.id_pegawai');
    //   $this->db->where($parameter);
    //   return $this->db->get();
    // }
    private function cekDosen($parameter = array()){
      $this->db->select('id');
      $this->db->from($this->tabledosen);
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }

    private function cekDekan($parameter = array()){
      $this->db->select('id');
      $this->db->from('t_dekan');
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }
    private function cekKaprodi($parameter = array()){
      $this->db->select('id');
      $this->db->from('t_kaprodi');
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }
    // private function cekRektor($parameter = array()){
    //   $this->db->select('p.id,d.id as id_rektor,p.nip,p.nama');
    //   $this->db->from($this->tablepegawai.' p');
    //   $this->db->join('t_rektor d','p.id = d.id_pegawai');
    //   //$parameter['d.id_status'] = 1;
    //   $this->db->where($parameter);
    //   return $this->db->get();
    // }
    private function cekRektor($parameter = array()){
      $this->db->select('id');
      $this->db->from('t_rektor');
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }

    // private function cekAdmin($parameter = array()){
    //   $this->db->select('p.id,a.id as id_admin,p.nip,p.nama');
    //   $this->db->from($this->tablepegawai.' p');
    //   $this->db->join($this->tableadmin.' a','p.id = a.id_pegawai');
    //   $this->db->join('t_role_admin tr','a.id = tr.id_admin');
    //   $parameter['tr.id_role'] = 1;
    //   $parameter['tr.id_status'] = 1;
    //   $this->db->where($parameter);
    //   return $this->db->get();
    // }
    private function cekAdmin($parameter = array()){
      $this->db->select('id');
      $this->db->from($this->tableadmin);
      $parameter['id_status'] = 1;
      $this->db->where($parameter);
      return $this->db->get();
    }
    private function cekAdminFakultas($parameter = array()){
        $this->db->select('af.id,af.id_fakultas, f.nama as fakultas');
        $this->db->from('t_admin_fakultas af');
        $this->db->join('t_fakultas f','af.id_fakultas = f.id');
        $this->db->where($parameter);
        return $this->db->get();
    }
    private function getDekanFakultas($parameter = array()){
        $this->db->select('rd.*, f.nama as fakultas');
        $this->db->from('t_role_dekan rd');
        $this->db->join('t_fakultas f','rd.id_fakultas = f.id');
        $this->db->where($parameter);
        return $this->db->get();
    }
    private function getKaprodi($parameter = array()){
        $this->db->select('rk.*, j.nama as jurusan');
        $this->db->from('t_role_kaprodi rk');
        $this->db->join('t_jurusan j','rk.id_jurusan = j.id');
        $this->db->where($parameter);
        return $this->db->get();
    }
    private function cekAdminJurusan($parameter = array()){
        $this->db->select('aj.id,aj.id_jurusan, j.nama as jurusan');
        $this->db->from('t_admin_jurusan aj');
        $this->db->join('t_jurusan j','aj.id_jurusan = j.id');
        $this->db->where($parameter);
        return $this->db->get();
    }

}
