<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Semester extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablesemester = 't_semester';
      $this->tabletahun = 't_tahun';
      $this->tableajaran = 't_semester_ajaran';
    }


    public function insertSemester($arraydata = array() )
    {
      $this->db->insert($this->tablesemester, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function updateSemester($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablesemester, $arraydata);
          return $this->db->affected_rows();
      }
      public function deleteSemester($parameter=array())
      {
          $this->db->delete($this->tablesemester, $parameter );
          return $this->db->affected_rows();
      }
      public function getSemester($parameterfilter=array()){
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tablesemester);
      }

      public function insertTahun($arraydata = array() )
      {
        $this->db->insert($this->tabletahun, $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }
      public function updateTahun($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update($this->tabletahun, $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteTahun($parameter=array())
        {
            $this->db->delete($this->tabletahun, $parameter );
            return $this->db->affected_rows();
        }
        public function getTahun($parameterfilter=array()){
          if($parameterfilter!=null)
          $this->db->where($parameterfilter);
          return $this->db->get($this->tabletahun);
        }
        public function insertAjaran($arraydata = array() )
        {
          $this->db->insert($this->tableajaran, $arraydata);
          $last_recore = $this->db->insert_id();
          return $last_recore;
        }
        public function updateAjaran($parameterfilter=array(), $arraydata=array() )
          {
              $this->db->where($parameterfilter);
              $this->db->update($this->tableajaran, $arraydata);
              return $this->db->affected_rows();
          }
          public function deleteAjaran($parameter=array())
          {
              $this->db->delete($this->tableajaran, $parameter );
              return $this->db->affected_rows();
          }
          public function getAjaran($parameterfilter=array()){
            if($parameterfilter!=null)
            $this->db->where($parameterfilter);
            return $this->db->get($this->tableajaran);
          }
          public function getDetailAjaran(){
            $this->db->select("ts.id, CONCAT(t.kode,'/',ts.id_semester) as semester");
            $this->db->from($this->tableajaran." ts");
            $this->db->join($this->tabletahun." t",'ts.id_tahun = t.id');
            return $this->db->get();
          }
}
