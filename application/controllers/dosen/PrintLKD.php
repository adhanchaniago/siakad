
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
header("Content-type:application/pdf");
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

	$html = '

	<h3><center>LEMBAR KERJA DOSEN (MANUAL)</center></h3>
	<table>
	<tr>
	<td>Nama/NIP</td>
	<td>: Surya Eka/121212</td>
	</tr>
	<tr>
	<td>Jabatan/Unit Kerja</td>
	<td>: Lektor Kepala</td>
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
	</style>
	<table class="table1" style="width:100%;margin-top:20px" >
	                        <thead>
	                          <tr>
	                            <th style="width:5%;text-align:center">No</th>
	                            <th style="width:12%;text-align:center">Hari/Tgl</th>
	                            <th style="width:15%;text-align:center">Kegiatan</th>
	                            <th style="width:12%;text-align:center">Waktu</th>
	                            <th style="width:9%;text-align:center">Ajar</th>
	                            <th style="width:9%;text-align:center">Bimbing</th>
	                            <th style="width:9%;text-align:center">Uji</th>
	                            <th style="width:9%;text-align:center">Litab</th>
	                            <th style="width:9%;text-align:center">Tunjang</th>
	                            <th style="width:9%;text-align:center">Jmlh</th>
	                          </tr>
	                        </thead>
	                        <tbody style="text-align:center">
	                          <tr>
	                            <td rowspan="3">1</td>
	                            <td rowspan="3">Senin, 20-01-2018</td>

	                                <td style="text-align:left">Menguji</td>
	                                <td>10:00-12:30</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>2.5</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>


	                              <tr>
	                                <td style="text-align:left">Membaca Jurnal</td>
	                                <td>15:30-16:30</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>1</td>
	                                <td>-</td>
	                                <td>-</td>
	                              </tr>
	                              <tr>
	                                <td style="text-align:left">Membimbing</td>
	                                <td>17:00-17:30</td>
	                                <td>-</td>
	                                <td>0.5</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>4</td>
	                              </tr>
	                          </tr>
	                          <tr>
	                            <td rowspan="2">2</td>
	                            <td rowspan="2">Selasa, 21-01-2018</td>

	                                <td style="text-align:left">Mengajar</td>
	                                <td>08:00-10:30</td>
	                                <td>2.5</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>


	                              <tr>
	                                <td style="text-align:left">Tunjang</td>
	                                <td>15:30-16:30</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>-</td>
	                                <td>1</td>
	                                <td>3.5</td>
	                              </tr>
	                          </tr>
	                          <tr>
	                            <td colspan="4"><b>Jumlah</b></td>
	                            <td>2.5</td>
	                            <td>0.5</td>
	                            <td>2.5</td>
	                            <td>1</td>
	                            <td>1</td>
	                            <td>7.5</td>
	                          </tr>
	                        </tbody>
	                      </table>

	                      <table style="width:100%;margin-top:20px">
	                      <tr>
	                      	<td>Mengetahui/Mengesahkan</td>
	                      	<td width="100%"></td>
	                      	<td style="width:200px">Banjarmasin, 25 Januari 2018</td>
	                      </tr>
	                      <tr>
	                      	<td>Dekan/Wakil Dekan ....</td>
	                      	<td></td>
	                      	<td>Dosen yang bersangkutan,</td>
	                      </tr>
	                      <tr>
	                      	<td>Fakultas ....</td>
	                      	<td></td>
	                      	<td></td>
	                      </tr>
	                      <tr>
	                      	<td style="height:50px"></td>
	                      	<td></td>
	                      	<td></td>
	                      </tr>
	                      <tr>
	                      	<td>...........................................</td>
	                      	<td></td>
	                      	<td>Surya Eka</td>
	                      </tr>
	                      </table>';

	$this->dompdf->load_html($html);

	$this->dompdf->render();
	//$output = $this->dompdf->output();
	$this->dompdf->stream("Webslesson", array("Attachment"=>0));

			}else{
				header("location:".base_url());
			}
		}

}
