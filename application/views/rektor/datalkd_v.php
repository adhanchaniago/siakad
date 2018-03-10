
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
                <div class="row">
                <div class=" col-md-3" style="margin-top:5px;margin-bottom:-10px;">
                  <label for="semester">Filter Periode</label>
                  <div class="form-group">
                    <select class="form-control">
                      <option selected>05/03/18 - 10/03/18</option>
                      <option value="1">12/03/18 - 17/03/18</option>
                      <option value="1">19/03/18 - 24/03/18</option>
                      <option value="1">26/03/18 - 31/03/18</option>
                      <option value="1">02/04/18 - 07/04/18</option>
                    </select>

                  </div>
                </div><div class=" col-md-3" style="margin-top:5px;margin-bottom:-10px;">
                  <label for="semester">Filter Bulan</label>
                  <div class="form-group">
                    <select class="form-control">
                      <option selected>Mei 2018</option>
                      <option value="1">April 2018</option>
                      <option value="1">Maret 2018</option>
                      <option value="1">Februari 2018</option>
                      <option value="1">Januari 2018</option>
                    </select>

                  </div>
                </div>
              </div><br>
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Bulan</th>
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
                    <td>03/2018</td>
                    <td>06/03/2018 12:01 PM</td>
                    <td>Menunggu ACC</td>
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
                                  <th rowspan="2" style="text-align:center;vertical-align:middle;width:10px;">No</th>
                                  <th rowspan="2" style="text-align:center;vertical-align:middle;width:100px;">Nama/NIP/Jabatan</th>
                                  <th>Minggu I</th>
                                  <th>Minggu II</th>
                                  <th>Minggu III</th>
                                  <th>Minggu IV</th>
                                  <th rowspan="2" style="text-align:center;vertical-align:middle;">Keterangan</th>
                                </tr>
                                <tr>
                                  <td>Akumulasi Jam Kerja</td>
                                  <td>Akumulasi Jam Kerja</td>
                                  <td>Akumulasi Jam Kerja</td>
                                  <td>Akumulasi Jam Kerja</td>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Udin/NIP. 19630417199802011001/Lektor</td>
                                  <td>37.5</td>
                                  <td>37.5</td>
                                  <td>37.5</td>
                                  <td>37.5</td>
                                  <td>Lengkap</td>
                                </tr>
                              </tbody>
                            </table>
                            <center>
                              <button type="button" id="acc" class="btn btn-success" onclick="accept()"><i class="fa fa-check-circle"></i> ACC Kegiatan</button>
                              <button type="button" id="reset" class="btn btn-danger" onclick="accept()"><i class="fa fa-refresh"></i> Reset Kegiatan</button>
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
            $('#acc').addClass('btn-warning disabled');
            $('#acc').html('<i class="fa fa-minus-circle"></i> Telah diACC');
            check = 1;
          }else{
            $('#acc').removeClass('btn-warning disabled');
            $('#acc').addClass('btn-success');
            $('#acc').html('<i class="fa fa-check-circle"></i> ACC Kegiatan');
            check = 0;
          }
        };
      </script>
