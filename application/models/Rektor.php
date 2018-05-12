<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Rektor extends CI_Model {
  private $tablerektor;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablerektor = 't_rektor';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablerektor, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablerektor, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablerektor, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tablerektor, $parameterfilter);
      }

}
