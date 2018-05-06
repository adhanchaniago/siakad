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
        if($parameterfilter!=null)
        $this->db->where($parameterfilter);
        return $this->db->get($this->tablefakultas);
      }
      function json() {
          $this->datatables->select('f.id,  f.kode,f.nama, (select p.nama from t_dekan d left join t_pegawai p on d.id_pegawai = p.id join t_role_dekan r on d.id = r.id_dekan where r.id_fakultas=f.id and r.id_role=1 limit 1) as dekan,(select p.nama from t_dekan d left join t_pegawai p on d.id_pegawai = p.id join t_role_dekan r on d.id = r.id_dekan where r.id_fakultas=f.id and r.id_role=2 limit 1) as wadek1,(select p.nama from t_dekan d left join t_pegawai p on d.id_pegawai = p.id join t_role_dekan r on d.id = r.id_dekan where r.id_fakultas=f.id and r.id_role=3 limit 1) as wadek2,(select p.nama from t_dekan d left join t_pegawai p on d.id_pegawai = p.id join t_role_dekan r on d.id = r.id_dekan where r.id_fakultas=f.id and r.id_role=4 limit 1) as wadek3');
          $this->datatables->from($this->tablefakultas.' f');
          $url = base_url()."admin/datafakultas/edit?id=";
          $this->datatables->add_column('view', '<center><a class=\'btn btn-warning btn-xs\'  title=\'Edit Data\' href=\''.$url.'$1\' data-toggle="modal"><span class=\'glyphicon glyphicon-edit\'></span></a></center>', 'id');
          return $this->datatables->generate();
      }
      function json_dekan($id_fakultas) {
        //SELECT p.id, p.nip, p.nama, p.no_telp, td.nama as jabatan, f.nama from t_pegawai p join t_dekan d on p.id = d.id_pegawai
        //JOIN t_role_dekan rd on rd.id_dekan = d.id JOIN t_tipe_dekan td on rd.id_role = td.id JOIN t_fakultas f on rd.id_fakultas = f.id

          $this->datatables->select('p.id, p.nip, p.nama, p.no_telp, td.nama as jabatan, f.nama as fakultas');
          $this->datatables->from('t_pegawai p');
          $this->datatables->join('t_dekan d', 'p.id = d.id_pegawai');
          $this->datatables->join('t_role_dekan rd', 'd.id = rd.id_dekan');
          $this->datatables->join('t_tipe_dekan td', 'td.id = rd.id_role');
          $this->datatables->join('t_fakultas f', 'f.id = rd.id_fakultas');
          if($id_fakultas!=0)
          $this->datatables->where('f.id',$id_fakultas);
          return $this->datatables->generate();
      }
}
