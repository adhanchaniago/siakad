<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablepegawai = 't_pegawai';
      $this->tableakun = 't_akun';
    }


    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tablepegawai, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tablepegawai, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tablepegawai, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tablepegawai, $parameterfilter);
      }
      public function insertAkun($arraydata = array() )
      {
        $this->db->insert($this->tableakun, $arraydata);
        $last_recore = $this->db->insert_id();
        return $last_recore;
      }

      public function updateAkun($parameterfilter=array(), $arraydata=array() )
        {
            $this->db->where($parameterfilter);
            $this->db->update($this->tableakun, $arraydata);
            return $this->db->affected_rows();
        }
        public function deleteAkun($parameter=array())
        {
            $this->db->delete($this->tableakun, $parameter );
            return $this->db->affected_rows();
        }
        public function getAkun($parameterfilter=array()){
          return $this->db->get_where($this->tableakun, $parameterfilter);
        }
        public function getAkunPegawai($parameterfilter=array()){
          $this->db->select('p.*,a.id as id_akun, a.username');
          $this->db->from($this->tableakun.' a');
          $this->db->join($this->tablepegawai. ' p','a.id = p.id_akun');
          $this->db->where($parameterfilter);
          return $this->db->get();
        }
        function json() {
            $this->datatables->select('a.id, p.id as id_pegawai, p.nama,p.nip, p.email, p.no_telp, a.username');
            $this->datatables->from($this->tableakun.' a');
            $this->datatables->join($this->tablepegawai.' p','a.id = p.id_akun');
            $url = base_url()."admin/akunpegawai/edit?id=";
            $this->datatables->add_column('view', "<a class='btn btn-success btn-xs' title='Edit Role' onclick='editRole($2)'><span class='glyphicon glyphicon-user'></span></a>
            <a href='$url$1' class='btn btn-warning btn-xs' title='Edit Akun'><span class='glyphicon glyphicon-edit'></span></a>
            <a class='btn btn-danger btn-xs' title='Hapus Akun'><span class='glyphicon glyphicon-remove'></span></a>", 'id,id_pegawai');
            return $this->datatables->generate();
        }
}
