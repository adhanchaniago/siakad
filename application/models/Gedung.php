<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Gedung extends CI_Model {
  private $tablegedung;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablegedung = 't_gedung';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablegedung, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablegedung, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablegedung, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tablegedung);
      }

        function json() {
            $this->datatables->select('g.id, g.kode, (select count(*) from t_ruangan where id_gedung=g.id) as jumlah,g.nama');
            $this->datatables->from($this->tablegedung.' g');
            $this->datatables->where('g.id_status',1);
              $this->datatables->add_column('view', "<center><button class='btn btn-success btn-xs' title='Edit Gedung' onclick='edit($1)'><span class='glyphicon glyphicon-edit'></span></button>
            <button class='btn btn-danger btn-xs' title='Hapus Gedung' onclick='hapus($1)''><span class='glyphicon glyphicon-trash'></span></button></center>", 'id');
            return $this->datatables->generate();
        }
}
