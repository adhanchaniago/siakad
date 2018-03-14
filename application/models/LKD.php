<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LKD extends CI_Model {
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


    public function getJabatan($parameter=array()){
      $this->db->select('*');
      $this->db->from('m_jabatan_dosen');
      $this->db->order_by('id','ASC');
      if($parameter!=null)
        $this->db->where($parameter);
      return $this->db->get('');
    }
    public function getConfig($id_jabatan){
      $this->db->select('*');
      $this->db->from('t_config_lkd');
      $this->db->where('id_jabatan',$id_jabatan);
      $this->db->order_by('id_kategori','ASC');
      return $this->db->get();
    }
    public function getKategoriSorted(){
      $this->db->select('*');
      $this->db->from($this->tablekategori);
      $this->db->order_by('id','ASC');
      return $this->db->get('');
    }
    public function update($tablename,$parameterfilter=array(), $arraydata=array() )
      {
          $this->db->where($parameterfilter);
          $this->db->update($tablename, $arraydata);
          return $this->db->affected_rows();
      }

    /*
    public function getUnitKerja(){
      return $this->db->get('m_unit_kerja');
    }
    public function getTipe(){
      return $this->db->get('m_tipe_dosen');
    }
    */
    public function cekPengajuan($date,$id_dosen){
        $this->db->select('*');
        $this->db->from('t_pengajuan_lkd t');
        $this->db->where("('$date' BETWEEN t.tanggal_awal AND t.tanggal_akhir) AND id_dosen='$id_dosen'");
        $query = $this->db->get();
        if($query->num_rows()>0){
          return $query->row()->id;
        }
        return 0;
    }
    public function cekHarian($parameter=array()){
        $this->db->select('id');
        $this->db->from('t_lkd_harian t');
        $this->db->where($parameter);
        $query = $this->db->get();
        if($query->num_rows()>0){
          return $query->row()->id;
        }
        return 0;
    }
    public function cekKegiatan($date,$id_harian){
      $query = $this->db->query("select * from t_detail_lkd t where t.id_lkd_harian = $id_harian AND ('$date' BETWEEN t.jam_awal AND t.jam_akhir) and '$date' != t.jam_awal AND '$date' != t.jam_akhir");
      return $query->num_rows();
    }

    public function insertPengajuan($arraydata = array() )
 {
   $tanggal = $arraydata['tanggal'];
   $id_dosen = $arraydata['id_dosen'];
   $this->db->query("INSERT INTO t_pengajuan_lkd(tanggal_awal,tanggal_akhir,id_dosen) VALUES ((SELECT DATE_ADD('$tanggal', INTERVAL - WEEKDAY('$tanggal') DAY)),(SELECT DATE_ADD('$tanggal', INTERVAL - WEEKDAY('$tanggal')+5 DAY)),$id_dosen)");
   $last_recore = $this->db->insert_id();
   return $last_recore;
 }
 public function updatePengajuan($parameterfilter=array(), $arraydata=array() )
   {
       $this->db->where($parameterfilter);
       $this->db->update('t_pengajuan_lkd', $arraydata);
       return $this->db->affected_rows();
   }
   public function deletePengajuan($parameter=array())
   {
       $this->db->delete('t_pengajuan_lkd', $parameter );
       return $this->db->affected_rows();
   }
   public function getPengajuan($parameterfilter=array()){
     return $this->db->get_where('t_pengajuan_lkd', $parameterfilter);
   }

   public function insertHarian($arraydata = array() )
{
  $this->db->insert('t_lkd_harian', $arraydata);
  $last_recore = $this->db->insert_id();
  return $last_recore;
}
public function updateHarian($parameterfilter=array(), $arraydata=array() )
  {
      $this->db->where($parameterfilter);
      $this->db->update('t_lkd_harian', $arraydata);
      return $this->db->affected_rows();
  }
  public function deleteHarian($parameter=array())
  {
      $this->db->delete('t_lkd_harian', $parameter );
      return $this->db->affected_rows();
  }
  public function getHarian($parameterfilter=array()){
    return $this->db->get_where('t_lkd_harian', $parameterfilter);
  }

  public function insertDetail($arraydata = array() )
{
 $this->db->insert('t_detail_lkd', $arraydata);
 $last_recore = $this->db->insert_id();
 return $last_recore;
}
public function updateDetail($parameterfilter=array(), $arraydata=array() )
 {
     $this->db->where($parameterfilter);
     $this->db->update('t_detail_lkd', $arraydata);
     return $this->db->affected_rows();
 }
 public function deleteDetail($parameter=array())
 {
     $this->db->delete('t_detail_lkd', $parameter );
     return $this->db->affected_rows();
 }
 public function getDetail($parameterfilter=array()){
   return $this->db->get_where('t_detail_lkd', $parameterfilter);
 }

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
