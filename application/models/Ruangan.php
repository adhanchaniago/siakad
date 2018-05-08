<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ruangan extends CI_Model {
  private $tableruangan;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tableruangan = 't_ruangan';
      $this->tablegedung = 't_gedung';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tableruangan, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tableruangan, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tableruangan, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tableruangan);
      }

        function json($id_gedung) {
            $this->datatables->select('r.id, r.kode, r.nama, r.kapasitas, g.nama as gedung');
            $this->datatables->from($this->tableruangan.' r');
            $this->datatables->join($this->tablegedung.' g','g.id = r.id_gedung');
            if($id_gedung!=0){
              $this->datatables->where('r.id_gedung',$id_gedung);
            }
            $this->datatables->where('r.id_status',1);
              $this->datatables->add_column('view', "<center><button class='btn btn-success btn-xs' title='Edit ruangan' onclick='edit($1)'><span class='glyphicon glyphicon-edit'></span></button>
            <button class='btn btn-danger btn-xs' title='Hapus Ruangan' onclick='hapus($1)''><span class='glyphicon glyphicon-trash'></span></button></center>", 'id');
            return $this->datatables->generate();
        }
}
