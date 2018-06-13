<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PT extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tabledekan = 't_config_kampus';
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
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tabledekan);
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
      public function getCalon($like){
        $this->db->select("d.id, CONCAT(p.nip,' - ',p.nama) as text");
        $this->db->from($this->tabledekan." d");
        $this->db->join('t_pegawai p','d.id_pegawai = p.id');
        $this->db->where("(p.nip LIKE '%$like%' OR p.nama LIKE '%$like%' )");
        //$this->db->or_like($like);
        return $this->db->get();
      }
}
