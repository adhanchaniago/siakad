<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kaprodi extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablekaprodi = 't_kaprodi';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablekaprodi, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablekaprodi, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablekaprodi, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tablekaprodi, $parameterfilter);
      }
      public function insertRole($arraydata = array() )
      {
        $this->db->insert("t_role_kaprodi", $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }

      public function updateRole($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update("t_role_kaprodi", $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteRole($parameter=array())
        {
            $this->db->delete("t_role_kaprodi", $parameter );
            return $this->db->affected_rows();
        }
        public function cekRole($parameterfilter=array()){
          return $this->db->get_where('t_role_kaprodi', $parameterfilter);
        }
        public function getRole($parameterfilter=array()){
          $this->db->select("r.*,CONCAT(p.nip,' - ',p.nama) as text");
          $this->db->from("t_role_kaprodi r");
          $this->db->join("t_kaprodi k","k.id=r.id_kajur");
          $this->db->join("t_pegawai p","p.id = k.id_pegawai");
          $this->db->where($parameterfilter);
          $this->db->order_by("id_role","ASC");
          return $this->db->get();
        }
        public function getAdmin($parameterfilter=array()){
          $this->db->select("a.id,CONCAT(p.nip,' - ',p.nama) as text");
          $this->db->from("t_admin_jurusan aj");
          $this->db->join("t_admin a","a.id=aj.id_admin");
          $this->db->join("t_pegawai p","p.id = a.id_pegawai");
          $this->db->where($parameterfilter);
          return $this->db->get();
        }
      public function getCalon($like){
        $this->db->select("d.id, CONCAT(p.nip,' - ',p.nama) as text");
        $this->db->from($this->tablekaprodi." d");
        $this->db->join('t_pegawai p','d.id_pegawai = p.id');
        $this->db->where("(p.nip LIKE '%$like%' OR p.nama LIKE '%$like%' ) and d.id_status=1");
        //$this->db->or_like($like);
        return $this->db->get();
      }
      public function getOperator($like){
        $this->db->select("a.id, CONCAT(p.nip,' - ',p.nama) as text");
        $this->db->from("t_admin a");
        $this->db->join('t_pegawai p','a.id_pegawai = p.id');
        $this->db->join('t_role_admin r','r.id_admin = a.id');
        $this->db->where("(p.nip LIKE '%$like%' OR p.nama LIKE '%$like%' ) AND r.id_role=6 AND r.id_status=1");
        //$this->db->or_like($like);
        return $this->db->get();
      }
}
