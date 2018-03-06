<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LKD extends CI_Model {
  private $tablename;
  function __construct(){
      parent::__construct();
      // $this->db1 = $this->load->database('db1', TRUE);
      $this->tablekategori = 't_kategori_kegiatan_lkd';
      $this->tablekegiatan = 't_kegiatan_lkd';
    }
  public function insertKategori($arraydata = array() )
  {
    $this->db->insert($this->tablekategori, $arraydata);
    $last_recore = $this->db->insert_id();
    return $last_recore;
  }
  public function updateKategori($parameterfilter=array(), $arraydata=array() )
    {
        $this->db->where($parameterfilter);
        $this->db->update($this->tablekategori, $arraydata);
        return $this->db->affected_rows();
    }
    public function deleteKategori($parameter=array())
    {
        $this->db->delete($this->tablekategori, $parameter );
        return $this->db->affected_rows();
    }
    public function getKategori($parameterfilter=array()){
      return $this->db->get_where($this->tablekategori, $parameterfilter);
    }
     public function insertKegiatan($arraydata = array() )
  {
    $this->db->insert($this->tablekegiatan, $arraydata);
    $last_recore = $this->db->insert_id();
    return $last_recore;
  }
  public function updateKegiatan($parameterfilter=array(), $arraydata=array() )
    {
        $this->db->where($parameterfilter);
        $this->db->update($this->tablekegiatan, $arraydata);
        return $this->db->affected_rows();
    }
    public function deleteKegiatan($parameter=array())
    {
        $this->db->delete($this->tablekegiatan, $parameter );
        return $this->db->affected_rows();
    }
    public function getKegiatan($parameterfilter=array()){
      return $this->db->get_where($this->tablekegiatan, $parameterfilter);
    }

    /*
    public function getJabatan(){
      return $this->db->get('m_jabatan_dosen');
    }
    public function getUnitKerja(){
      return $this->db->get('m_unit_kerja');
    }
    public function getTipe(){
      return $this->db->get('m_tipe_dosen');
    }
    */
    function jsonKategori() {
        $this->datatables->select('kt.id, kt.nama, kt.alias');
        $this->datatables->from($this->tablekategori.' kt');
        $this->datatables->add_column('view', '<center><button class=\'btn btn-success btn-xs\' value=\'$1\' onclick=\'editkt(this.value)\' title=\'Edit Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></button> <button class=\'btn btn-danger btn-xs\' value=\'$1\' onclick=\'hapuskt(this.value)\' title=\'Hapus Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-remove\'></span></button></center>', 'id');
        return $this->datatables->generate();
    }
    function jsonKegiatan() {
        $this->datatables->select('kg.id, kg.nama, kt.nama as kategori');
        $this->datatables->from($this->tablekegiatan.' kg');
        $this->datatables->join($this->tablekategori.' kt', 'kg.id_kategori = kt.id','left');
        $this->datatables->add_column('view', '<center><button class=\'btn btn-success btn-xs\' value=\'$1\' onclick=\'editkg(this.value)\' title=\'Edit Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></button> <button class=\'btn btn-danger btn-xs\' value=\'$1\' onclick=\'hapuskg(this.value)\' title=\'Hapus Data\' data-toggle="modal"><span class=\'glyphicon glyphicon-remove\'></span></button></center>', 'id');
        return $this->datatables->generate();
    }
}
