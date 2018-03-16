<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Model {
  private $tablepegawai;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablepegawai = 't_pegawai';
      $this->tabledosen = 't_dosen';
    }
  public function insertPegawai($arraydata = array() )
  {
    $this->db->insert($this->tablepegawai, $arraydata);
    $last_recore = $this->db->insert_id();
    return $last_recore;
  }
  public function updatePegawai($parameterfilter=array(), $arraydata=array() )
    {
        $this->db->where($parameterfilter);
        $this->db->update($this->tablepegawai, $arraydata);
        return $this->db->affected_rows();
    }
    public function deletePegawai($parameter=array())
    {
        $this->db->delete($this->tablepegawai, $parameter );
        return $this->db->affected_rows();
    }
    public function getPegawai($parameterfilter=array()){
      return $this->db->get_where($this->tablepegawai, $parameterfilter);
    }

    public function insert($arraydata = array() )
    {
      $this->db->insert($this->tabledosen, $arraydata);
      $last_recore = $this->db->insert_id();
      return $last_recore;
    }
    public function update($parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($this->tabledosen, $arraydata);
          return $this->db->affected_rows();
      }
      public function delete($parameter=array())
      {
          $this->db->delete($this->tabledosen, $parameter );
          return $this->db->affected_rows();
      }
      public function get($parameterfilter=array()){
        return $this->db->get_where($this->tabledosen, $parameterfilter);
      }

    public function getJabatan($param = array()){

      return $this->db->get_where('m_jabatan_dosen',$param);
    }
    public function getUnitKerja($param = array()){
      return $this->db->get('m_unit_kerja',$param);
    }
    public function getDekan($param = array()){
      return $this->db->get('t_dekan',$param);
    }
    public function getTipe(){
      return $this->db->get('m_tipe_dosen');
    }
    public function getFakultas($param = array()){
      return $this->db->get_where('t_fakultas',$param);
    }
    function json() {
        $this->datatables->select('p.id, d.id as id_dosen, p.nip,p.nama, p.no_telp as kontak, t.nama as status');
        $this->datatables->from($this->tablepegawai.' p');
        $this->datatables->join($this->tabledosen.' d',' p.id = d.id_pegawai');
        $this->datatables->join('m_tipe_dosen t', 'd.id_tipe = t.id','left');

        $this->datatables->add_column('view', '<center><button class=\'btn btn-primary btn-xs\' title=\'Lihat Data\'><span class=\'fa fa-eye\'></span></button> <button class=\'btn btn-success btn-xs\' onclick=\'edit($1)\' title=\'Edit Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></button> <button class=\'btn btn-danger btn-xs\' value=\'$1\' onclick=\'hapus(this.value)\' title=\'Hapus Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-remove\'></span></button></center>', 'id');
        return $this->datatables->generate();
    }
}
