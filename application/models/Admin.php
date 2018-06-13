<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tableadmin = 't_admin';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tableadmin, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tableadmin, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tableadmin, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tableadmin);
      }
      public function insertAdminJurusan($arraydata = array() )
      {
        $this->db->insert('t_admin_jurusan', $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }
      public function updateAdminJurusan($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update('t_admin_jurusan', $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteAdminJurusan($parameter=array())
        {
            $this->db->delete('t_admin_jurusan', $parameter );
            return $this->db->affected_rows();
        }
        public function getAdminJurusan($parameterfilter=array()){
          if($parameterfilter!=null)
          $this->db->where($parameterfilter);
          return $this->db->get('t_admin_jurusan');
        }
      public function insertAdminFakultas($arraydata = array() )
      {
        $this->db->insert('t_admin_fakultas', $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }
      public function updateAdminFakultas($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update('t_admin_fakultas', $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteAdminFakultas($parameter=array())
        {
            $this->db->delete('t_admin_fakultas', $parameter );
            return $this->db->affected_rows();
        }
        public function getAdminFakultas($parameterfilter=array()){
          if($parameterfilter!=null)
          $this->db->where($parameterfilter);
          return $this->db->get('t_admin_fakultas');
        }
}
