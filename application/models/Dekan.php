<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dekan extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tabledekan = 't_dekan';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tabledekan, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tabledekan, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tabledekan, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tabledekan, $parameterfilter);
      }
      public function insertRole($arraydata = array() )
      {
        $this->db->insert("t_role_dekan", $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }

      public function updateRole($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update("t_role_dekan", $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteRole($parameter=array())
        {
            $this->db->delete("t_role_dekan", $parameter );
            return $this->db->affected_rows();
        }
        public function getRole($parameterfilter=array()){
          $this->db->select("r.*,CONCAT(p.nip,' - ',p.nama) as text");
          $this->db->from("t_role_dekan r");
          $this->db->join("t_dekan d","d.id=r.id_dekan");
          $this->db->join("t_pegawai p","p.id = d.id_pegawai");
          $this->db->where($parameterfilter);
          $this->db->order_by("id_role","ASC");
          return $this->db->get();
        }
        public function getAdmin($parameterfilter=array()){
          $this->db->select("a.id,CONCAT(p.nip,' - ',p.nama) as text");
          $this->db->from("t_admin_fakultas af");
          $this->db->join("t_admin a","a.id=af.id_admin");
          $this->db->join("t_pegawai p","p.id = a.id_pegawai");
          $this->db->where($parameterfilter);
          return $this->db->get();
        }
      public function getCalon($like){
        $this->db->select("d.id, CONCAT(p.nip,' - ',p.nama) as text");
        $this->db->from($this->tabledekan." d");
        $this->db->join('t_pegawai p','d.id_pegawai = p.id');
        $this->db->where("(p.nip LIKE '%$like%' OR p.nama LIKE '%$like%' ) AND d.id_status=1");
        //$this->db->or_like($like);
        return $this->db->get();
      }
      public function getOperator($like){
        $this->db->select("a.id, CONCAT(p.nip,' - ',p.nama) as text");
        $this->db->from("t_admin a");
        $this->db->join('t_pegawai p','a.id_pegawai = p.id');
        $this->db->join('t_role_admin r','r.id_admin = a.id');
        $this->db->where("(p.nip LIKE '%$like%' OR p.nama LIKE '%$like%' ) AND r.id_role=5 AND r.id_status=1");
        //$this->db->or_like($like);
        return $this->db->get();
      }
}
