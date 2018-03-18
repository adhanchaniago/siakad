
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
//header("Content-type:application/pdf");
class PrintLKD extends CI_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->library('dompdf_gen');
		}
		public function index()
		{
			$cek = $this->session->userdata('status');
			if ($cek == 'dosen'){
				$pdfname = 'scheduling_'.date('YmdHis').".pdf";
				$this->load->model(array('LKD','Dosen'));
$id = $_GET['q'];
$pengajuan = $this->LKD->getPengajuanEncrypted($id);
$id_pengajuan = $pengajuan->row()->id;
$periode = $this->LKD->getPeriode(array('id'=>$pengajuan->row()->id_periode));
$dosen = $this->Dosen->get(array('id'=>$pengajuan->row()->id_dosen));
$dosen = $dosen->row();
$pegawai = $this->Dosen->getPegawai(array('id'=>$dosen->id_pegawai));
$pegawai = $pegawai->row();
$jabatan = $this->Dosen->getJabatan(array('id'=>$dosen->id_jabatan));
$unit_kerja = $this->Dosen->getUnitKerja(array('id'=>$dosen->id_unit_kerja));
$jabatan = $jabatan->row();
$unit_kerja = $unit_kerja->row();
	$html = "

	<h3><center>LEMBAR KERJA DOSEN (MANUAL)</center></h3>
	<table>
	<tr>
	<td>Nama/NIP</td>
	<td>: $pegawai->nama / $pegawai->nip</td>
	</tr>
	<tr>
	<td>Jabatan/Unit Kerja</td>
	<td>: $jabatan->nama / $unit_kerja->nama</td>
	</tr>
	<tr>
	<td>Bidang Ilmu</td>
	<td>: Ekonomi Syariah</td>
	</tr>
	</table>
	<style>
	table.table1 {
	    border-collapse: collapse;
	}

	table.table1, table.table1 th,table.table1 td {
	    border: 1px solid black;
	}
	</style>";
	$kategori = $this->LKD->getKategoriSorted();
	$data = $this->getData($id_pengajuan);
// 	print_r($data);
// foreach($kategori->result() as $row){
// 	print_r($row);
// }

	$html.='<table class="table1" style="width:100%;margin-top:20px" >
	                        <thead>
	                          <tr>
	                            <th style="width:5%;text-align:center">No</th>
	                            <th style="width:12%;text-align:center">Hari/Tgl</th>
	                            <th style="width:15%;text-align:center">Kegiatan</th>
	                            <th style="width:12%;text-align:center">Waktu</th>';
															$jumlah_k = $kategori->num_rows();
															$i=1;
															foreach($kategori->result() as $row){
																$html .='<th style="width:'.(54/($jumlah_k+1)).'%;text-align:center">'.$row->alias.'</th>';
															}
															$html .='<th style="width:'.(54/($jumlah_k+1)).'%;text-align:center">Jmlh</th></tr>
	 	                        </thead>
	 	                        <tbody style="text-align:center">';
														foreach ($data['tanggal'] as $key => $row) {
															$rowspan = count($row);
															$html.='<tr>';
															for($j = 0; $j < $rowspan; $j++){
																$td='';
																$baris=0;
																foreach($kategori->result() as $row_k){
																	if($row[$j]['id_kategori'] == $row_k->id){
																		$td.='<td><center>'.$row[$j]["total"].'</center></td>';
																		$baris = $row[$j]["total"];
																	}
																	else{
																		$td.='<td><center>-</center></td>';
																	}
																}
																$td.='<td>'.$baris.'</td>';
																if($j==0){
																	$html.='<td rowspan="'.$rowspan.'">'.($i++).'</td>
			                            <td rowspan="'.$rowspan.'">'.$key.'</td>

			                                <td style="text-align:left">'.$row[$j]["kegiatan"].'</td>
			                                <td>'.$row[$j]["jam_awal"].' - '.$row[$j]["jam_akhir"].'</td>'.$td;
																}
																else{


			                                $html.='<tr><td style="text-align:left">'.$row[$j]["kegiatan"].'</td>
			                                <td>'.$row[$j]["jam_awal"].' - '.$row[$j]["jam_akhir"].'</td>'.$td.'</tr>';
																}
															}
															$html.='</tr>';
														}
														if(count($data['tanggal']) == 0){
															$html = '<tr><td colspan="'.($kategori->num_rows()+5).'"><center><b>Data Kosong</b></center></td></tr>';
														}
														$html.='<tr><td colspan="4"><b>Jumlah</b></td>';
														$nilai;$total = 0;
														foreach ($kategori->result() as $row_k) {
															if(!isset($data['jam'][$row_k->id]) || $data['jam'][$row_k->id] == null){
																$nilai = 0;
															}
															else{
																$nilai = $data['jam'][$row_k->id];
															}
															$total=$total+$nilai;
															$html.="<td><center>$nilai</center></td>";
														}
														$dekan = $this->Dosen->getDekan(array('id_fakultas'=>$dosen->id_fakultas))->row();
														$p_dekan = $this->Dosen->getPegawai(array('id'=>$dekan->id_pegawai))->row();
														$fakultas = $this->Dosen->getFakultas(array('id'=>$dekan->id_fakultas))->row();
														// setlocale(LC_ALL, 'id_ID');
														// $date = strftime("%e %B %Y");
														$date = date("d M Y");
														//$date = date("d F Y", time());
	                         $html.='<td>'.$total.'</td>
	                        </tbody>
	                      </table>

	                      <table style="width:100%;margin-top:20px">
	                      <tr>
	                      	<td>Mengetahui/Mengesahkan</td>
	                      	<td width="100%"></td>
	                      	<td style="width:200px">Banjarmasin, '.$date.'</td>
	                      </tr>
	                      <tr>
	                      	<td>Dekan</td>
	                      	<td></td>
	                      	<td>Dosen yang bersangkutan,</td>
	                      </tr>
	                      <tr>
	                      	<td>'.$fakultas->nama.'</td>
	                      	<td></td>
	                      	<td></td>
	                      </tr>
	                      <tr>
	                      	<td style="height:50px;"><img src="././'.$p_dekan->ttd.'" style="height:70px"/></td>
	                      	<td></td>
	                      	<td style="height:50px;"><center><img src="././'.$pegawai->ttd.'" style="height:70px"/></center></td>
	                      </tr>
	                      <tr>
	                      	<td><u>'.$p_dekan->nama.'</u></td>
	                      	<td></td>
	                      	<td><u>'.$pegawai->nama.'</u></td>
	                      </tr>
												<tr>
	                      	<td>NIP. '.$p_dekan->nip.'</td>
	                      	<td></td>
	                      	<td>NIP. '.$pegawai->nip.'</td>
	                      </tr>
	                      </table>';

	$this->dompdf->load_html($html);

	$this->dompdf->render();
	//$output = $this->dompdf->output();
	$this->dompdf->stream("Pengajuan LKD ".$periode->row()->tanggal_awal." - ".$periode->row()->tanggal_akhir, array("Attachment"=>0));

			}else{
				header("location:".base_url());
			}
		}

		public function getData($id_pengajuan){
			$this->load->model(array('LKD'));
			$data = $this->LKD->getDetailLKD($id_pengajuan);
			$json_tanggal = array();
			$json_id = array();
			$json_jam = array();
			foreach ($data->result() as $row) {
				# code...
				if(!array_key_exists($row->tanggal,$json_tanggal)){
					$json_tanggal[$row->tanggal] = array();
				}
				$newData = array(

					'kegiatan' => $row->kegiatan,
					'id_kategori' => (int)$row->id_kategori,
					'jam_awal' => $row->jam_awal,
					'jam_akhir' => $row->jam_akhir,
					'total' => (float)$row->selisih,

				);

				array_push($json_tanggal[$row->tanggal], $newData);
				if(!in_array(md5($row->id_lkd_harian), $json_id))
				array_push($json_id, md5($row->id_lkd_harian));


				if(!array_key_exists($row->id_kategori,$json_jam)){
					$json_jam[$row->id_kategori] = 0;
				}
				$json_jam[$row->id_kategori] += $row->selisih;
			}

			$pengajuan = $this->LKD->getPengajuan(array('id'=>$id_pengajuan));
			$aju='';
			if($pengajuan->num_rows()>0){
				$aju = $pengajuan->row_array();
				$aju['id'] = md5($aju['id']);
			}

			return array('id'=>$json_id,'tanggal'=>$json_tanggal,'jam'=>$json_jam,'pengajuan'=>$aju);
		}
		public function bulanan()
		{
			$cek = $this->session->userdata('status');
			if ($cek == 'dosen'){

				$pdfname = 'scheduling_'.date('YmdHis').".pdf";
				$this->load->model(array('LKD','Dosen'));
				$id = $_GET['q'];
				$id_dosen = $_SESSION['data']['id'];
				$dosen = $this->Dosen->getAll(array('d.id'=>$id_dosen))->row();
				$pengajuan = $this->LKD->getPengajuanBulananEncrypted($id);
				$id_pengajuan = $pengajuan->row()->id;
				$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				$kode = explode("-",$pengajuan->row()->kode_bulan);
				$data = $this->LKD->getBulanData($id_dosen,$kode[0],$kode[1]);
				$b = $kode[0]-1;
				$bln = $bulan[$b];
				$rektor = $this->Dosen->getRektor()->row();
				//print_r($rektor);
				$html = "

				<h3><center>REKAPITULASI KEHADIRAN</center></h3>
				<table>
				<tr>
				<td>Fakultas/Pascasarjana</td>
				<td>: $dosen->fakultas</td>
				</tr>
				<tr>
				<td>Bulan</td>
				<td>: $bln $kode[1]</td>
				</tr>
				<tr>
				<td>Jabatan/Unit Kerja</td>
				<td>: $dosen->jabatan / $dosen->unit_kerja</td>
				</tr>

				</table>
				<style>
				table.table1 {
				    border-collapse: collapse;
				}

				table.table1, table.table1 th,table.table1 td {
				    border: 1px solid black;
				}
				</style>";
				$html.='<table class="table1" style="width:100%;margin-top:20px" >';
				$html.= "<thead><tr><th rowspan='2' style='text-align:center;vertical-align:middle;width:5%;'>No</th>
				<th rowspan='2' style='text-align:center;vertical-align:middle;width:30%;'>Nama/NIP/Jabatan</th>'";
				$i=1;
				foreach($data->result() as $row){

					$html.="<th style='width:13%;text-align:center;vertical-align:middle;'>Minggu ".$i++."</th>";

				}
				$html.='                              <th rowspan="2" style="text-align:center;vertical-align:middle;width:15%;">Keterangan</th></tr><tr>';
				foreach($data->result() as $row){

					$html.="<th style='width:10%;text-align:center;vertical-align:middle;'>Akumulasi Jam Kerja</th>";

				}
				$html.="</tr></thead></tbody><tr><td><center>1</center></td><td style='padding:5px;'>$dosen->nama / NIP. $dosen->nip / $dosen->jabatan</td?";
				foreach($data->result() as $row){
					if($row->total!=null){
					$html.="<td><center>$row->total</center></td>";
					}else{
						$html.="<td><center> - </center></td>";
					}
				}

				$html.="<td><center> Lengkap </center></td></tr></tbody></table>";
				$html.='<table style="width:100%;margin-top:20px">
				<tr>
					<td>Mengetahui/Menyetujui:</td>
					<td width="100%"></td>
					<td style="width:200px">Penanggung Jawab</td>
				</tr>
				<tr>
					<td>Atasan Langsung</td>
					<td></td>
					<td>Rekapitulasi Kehadiran,</td>
				</tr>

				<tr>
					<td style="height:50px"></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><u>..........................................</u></td>
					<td></td>
					<td><u>..........................................</u></td>
				</tr>
				<tr>
					<td>NIP.</td>
					<td></td>
					<td>NIP.</td>
				</tr>
				</table>


				<table style="margin-top:40px;margin:0 auto">
				<tr>
				<td><center><b>REKTOR</b></center></td>
				</tr>
				<tr>
					<td style="height:50px;"><center><img src="././'.$rektor->ttd.'" style="height:70px"/></center></td>
				</tr>
				<tr>
					<td><b>'.$rektor->nama.'</b></td>
				</tr>
				<tr>
					<td>NIP. '.$rektor->nip.'</td>
				</tr>
				</table>';
				// echo $html;
				$this->dompdf->load_html($html);
				$this->dompdf->render();
				//$output = $this->dompdf->output();
				$this->dompdf->stream("Pengajuan LKD Bulanan ".$pengajuan->row()->kode_bulan, array("Attachment"=>0));

		}
	}
}
