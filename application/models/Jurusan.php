<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jurusan extends CI_Model {
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablejurusan = 't_jurusan';
      $this->tablerole = 't_role_jurusan';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablejurusan, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablejurusan, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablejurusan, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tablejurusan, $parameterfilter);
      }
      public function insertRole($arraydata = array() )
      {
        $this->db->insert($this->tablerole, $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }
      public function updateRole($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update($this->tablerole, $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteRole($parameter=array())
        {
            $this->db->deleteRole($this->tablerole, $parameter );
            return $this->db->affected_rows();
        }
        public function getRole($parameterfilter=array()){
          return $this->db->get_where($this->tablerole, $parameterfilter);
        }
      public function getJenjang(){
        return $this->db->get('t_jenjang_jurusan');
      }
      public function getStatus(){
        return $this->db->get('t_status_jurusan');
      }
      public function getNotSelectedRole($id_jurusan){
        $this->db->select("k.id, CONCAT(k.nama,' (',k.kode,')') as kelas");
        $this->db->from('t_kelas_jurusan k');
        $this->db->join('t_role_jurusan r',"k.id = r.id_kelas AND id_jurusan=$id_jurusan",'left');
        $this->db->where("r.id IS NULL OR r.id_status = 0");
        return $this->db->get();
      }
      public function getSelectedRole($id_jurusan){
        $this->db->select("r.id, concat(k.nama, ' (',k.kode,')') as kelas");
        $this->db->from('t_role_jurusan r');
        $this->db->join('t_kelas_jurusan k',"r.id_kelas = k.id");
        $this->db->where("r.id_jurusan = $id_jurusan AND r.id_status=1");
        return $this->db->get();
      }
      function json($id_fakultas) {
          $this->datatables->select("j.id,  j.kode,j.nama, jj.nama as jenjang,
          (select p.nama from t_kaprodi d left join t_pegawai p on d.id_pegawai = p.id
          join t_role_kaprodi r on d.id = r.id_kajur where r.id_jurusan=j.id and r.id_role=1 limit 1) as kajur,
          (select group_concat(concat(k.nama,' (',k.kode,')')) as kelas
          from t_role_jurusan rj join t_kelas_jurusan k on rj.id_kelas = k.id where rj.id_jurusan = j.id AND rj.id_status = 1) as kelas, s.nama as status");
          $this->datatables->from($this->tablejurusan.' j');
          $this->datatables->join('t_jenjang_jurusan jj','j.id_jenjang = jj.id');
          $this->datatables->join('t_status_jurusan s','j.id_status = s.id');
          $url = base_url()."admin/datajurusan/edit?id=";
          if($id_fakultas!=0)
          $this->datatables->where('id_fakultas',$id_fakultas);
          $this->datatables->add_column('view', '<center><button class=\'btn btn-primary btn-xs\' title=\'Data Kelas\' onclick="kelas($1)"><span class=\'fa fa-list\'></span></button> <a class=\'btn btn-success btn-xs\'  title=\'Edit Data\' href=\''.$url.'$1\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></a></center>', 'id');
          return $this->datatables->generate();
      }
}
