<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dosen extends CI_Model {
  private $tablename;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablename = 'm_dosen';
    }
  public function insert($arraydata = array() )
  {
    $this->db->insert($this->tablename, $arraydata);
    $last_recore = $this->db->insert_id();
    return $last_recore;
  }
  public function update($parameterfilter=array(), $arraydata=array() )
    {
        $this->db->where($parameterfilter);
        $this->db->update($this->tablename, $arraydata);
        return $this->db->affected_rows();
    }
    public function delete($parameter=array())
    {
        $this->db->delete($this->tablename, $parameter );
        return $this->db->affected_rows();
    }
    public function get($parameterfilter=array()){
      return $this->db->get_where($this->tablename, $parameterfilter);
    }
    public function getJabatan(){
      return $this->db->get('m_jabatan_dosen');
    }
    public function getUnitKerja(){
      return $this->db->get('m_unit_kerja');
    }
    public function getTipe(){
      return $this->db->get('m_tipe_dosen');
    }
    function json() {
        $this->datatables->select('d.id, d.nip,d.nama, d.kontak, t.nama as status');
        $this->datatables->from($this->tablename.' d');
        $this->datatables->join('m_tipe_dosen t', 'd.id_tipe = t.id','left');
        $this->datatables->add_column('view', '<center><button class=\'btn btn-primary btn-xs\' title=\'Lihat Data\'><span class=\'fa fa-eye\'></span></button> <button class=\'btn btn-success btn-xs\' value=\'$1\' onclick=\'edit(this.value)\' title=\'Edit Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></button> <button class=\'btn btn-danger btn-xs\' value=\'$1\' onclick=\'hapus(this.value)\' title=\'Hapus Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-remove\'></span></button></center>', 'id');
        return $this->datatables->generate();
    }
}
