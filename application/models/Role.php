<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Role extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tableadmin = 't_admin';
      $this->tableadminjurusan = 't_admin_jurusan';
      $this->tableadminfakultas = 't_admin_fakultas';
      $this->tabletipeadmin = 't_tipe_admin';
      $this->tableroleadmin = 't_role_admin';

      $this->tablekaprodi = 't_kaprodi';
      $this->tablerolekaprodi = 't_role_kaprodi';
    }

    public function insertRoleAdmin($arraydata = array() )
    {
      $this->db->insert($this->tableroleadmin, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function updateRoleAdmin($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tableroleadmin, $arraydata);
          return $this->db->affected_rows();
      }
      public function get($table_name,$parameterfilter=array()){
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($table_name);
      }



    // public function insert($arraydata = array() )
    // {
    //   $this->db->insert($this->tablefakultas, $arraydata);
    //   $last_recore = $this->db->insert_id();
    //   return $last_recore;
    // }
    // public function update($parameterfilter=array(), $arraydata=array() )
    //   {
    //       $this->db->where($parameterfilter);
    //       $this->db->update($this->tablefakultas, $arraydata);
    //       return $this->db->affected_rows();
    //   }
    //   public function delete($parameter=array())
    //   {
    //       $this->db->delete($this->tablefakultas, $parameter );
    //       return $this->db->affected_rows();
    //   }
    //   public function get($parameterfilter=array()){
    //     if($parameterfilter!=null)
    //     $this->db->where($parameterfilter);
    //     return $this->db->get($this->tablefakultas);
    //   }
    public function cekRoleAdmin($id_pegawai,$kode){
      return $this->db->query("select a.id,(select id_status from t_role_admin tr join t_tipe_admin ta on tr.id_role = ta.id where tr.id_admin = a.id and ta.kode='$kode') as status from t_admin a where id_pegawai=$id_pegawai
");
    }
    public function getRoleJurusan($id_pegawai){
      return $this->db->query("select * from t_kaprodi k where id_pegawai = $id_pegawai and id_status = 1");
    }
    public function getRoleDekan($id_pegawai){
      return $this->db->query("select * from t_dekan k where id_pegawai = $id_pegawai and id_status = 1");
    }
    public function getDetailRoleKaprodi($id_pegawai){
      return $this->db->query("SELECT * from t_tipe_kaprodi where id in (select id_role from t_kaprodi a join t_role_kaprodi tr on a.id = tr.id_kajur WHERE tr.id_status=1 AND id_pegawai=$id_pegawai)");
    }
    public function getDetailRoleDekan($id_pegawai){
      return $this->db->query("SELECT * from t_tipe_dekan where id in (select id_role from t_dekan a join t_role_dekan tr on a.id = tr.id_dekan WHERE tr.id_status=1 AND id_pegawai=$id_pegawai)");
    }
    public function getDetailRoleRektor($id_pegawai){
      return $this->db->query("SELECT * from t_tipe_rektor where id in (select id_role from t_rektor a join t_role_rektor tr on a.id = tr.id_rektor WHERE tr.id_status=1 AND id_pegawai=$id_pegawai)");
    }
    public function getRoleDosen($id_pegawai){
      return $this->db->query("select * from t_dosen k where id_pegawai = $id_pegawai and id_status = 1");
    }
    public function getRoleRektor($id_pegawai){
      return $this->db->query("select * from t_rektor k where id_pegawai = $id_pegawai and id_status = 1");
    }
    public function getNonRoleAdmin($id_pegawai){
      return $this->db->query("SELECT * from t_tipe_admin where id not in (select id_role from t_admin a join t_role_admin tr on a.id = tr.id_admin WHERE tr.id_status=1 AND id_pegawai=$id_pegawai)");
    }
    public function getRoleAdmin($id_pegawai){
      return $this->db->query("SELECT * from t_tipe_admin where id in (select id_role from t_admin a join t_role_admin tr on a.id = tr.id_admin WHERE tr.id_status=1 AND id_pegawai=$id_pegawai)");
    }
}
