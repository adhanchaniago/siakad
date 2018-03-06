
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Lembar Kerja Dosen</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <!-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a> -->
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Periode</th>
                    <th>Waktu Pengajuan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>12398</td>
                    <td>Budi Santoso</td>
                    <td>05/03/2018 - 10/03/2018</td>
                    <td>06/03/2018 12:01 PM</td>
                    <td>Belum ACC</td>
                    <td>
                      <center>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='' data-toggle="modal" data-target="#myModalEdit"><span class='glyphicon glyphicon-edit'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>
            <div class="modal inmodal" id="myModalEdit" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Kegiatan</h4>
                            <small>Tanggal Pengajuan: 06/03/2018</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th>Tanggal</th>
                                  <th>Kegiatan</th>
                                  <th>Waktu</th>
                                  <th>Ajar</th>
                                  <th>Bimbing</th>
                                  <th>Uji</th>
                                  <th>Litab</th>
                                  <th>Tunjang</th>
                                  <th>Jmlh</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td rowspan="3" style="text-align:center;vertical-align:middle;">1</td>
                                  <td rowspan="3" style="text-align:center;vertical-align:middle;">20-01-2018</td>
                                      <td>Menguji</td>
                                      <td>10:00-12:30</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>2.5</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>

                                    <tr>
                                      <td>Membaca Jurnal</td>
                                      <td>15:30-16:30</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>1</td>
                                      <td>-</td>
                                      <td>-</td>
                                    </tr>
                                    <tr>
                                      <td>Membimbing</td>
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
                                  <td rowspan="2" style="text-align:center;vertical-align:middle;">2</td>
                                  <td rowspan="2" style="text-align:center;vertical-align:middle;">27-01-2018</td>
                                      <td>Mengajar</td>
                                      <td>08:00-10:30</td>
                                      <td>2.5</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                    <tr>
                                      <td>Tunjang</td>
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
                                  <td colspan="4" style="text-align:center;vertical-align:middle;"><b>Jumlah</b></td>
                                  <td>2.5</td>
                                  <td>0.5</td>
                                  <td>2.5</td>
                                  <td>1</td>
                                  <td>1</td>
                                  <td>7.5</td>
                                </tr>
                              </tbody>
                            </table>
                            <center>
                            <button type="button" id="acc" class="btn btn-success" onclick="accept()"><i class="fa fa-check-circle"></i> ACC Kegiatan</button><br><br>
                            <span id="accept" class="hidden">Telah di ACC</span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Kembali</button>
                            <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                        </div>
                      </form>
                    </div>
                </div>
            </div>

      <script>
        var check = 0;
        function accept(){
          if (check == 0) {
            $('#acc').removeClass('btn-success');
            $('#acc').addClass('btn-danger');
            $('#acc').html('<i class="fa fa-minus-circle"></i> Batalkan ACC');
            $('#accept').removeClass('hidden');
            check = 1;
          }else{
            $('#acc').removeClass('btn-danger');
            $('#acc').addClass('btn-success');
            $('#acc').html('<i class="fa fa-check-circle"></i> ACC Kegiatan');
            $('#accept').addClass('hidden');
            check = 0;
          }
        };
      </script>
