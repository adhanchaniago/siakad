<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Fakultas extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablefakultas = 't_fakultas';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablefakultas, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablefakultas, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablefakultas, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tablefakultas, $parameterfilter);
      }
}
