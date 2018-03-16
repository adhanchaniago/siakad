
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Pengajuan Rekapitulasi Kehadiran</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content" id="item">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <div class="row">
                        <div class="col-md-2">
                          <h2>Form</h2>
                        </div>
                        <div class=" col-md-3" style="margin-top:5px;margin-bottom:-10px;">
                          <label for="semester">Filter Bulanan</label>
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
                  </div>
                      <div class="hr-line-dashed"></div>
                    <form class="form-horizontal">
                      <div class="table-responsive">
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
                    </div>
                        <!-- <div class="form-group">
                          <div class="col-lg-6 col-lg-offset-2">
                            <button type="button" class="btn btn-xs btn-success" name="button"><i class="fa fa-plus"></i> Kegiatan</button>
                          </div>
                        </div> -->
                <br >
                <center>
                  <button type="button" id="ajukan" class="btn btn-w-m btn-primary" onclick="pengajuan()"><i class="fa fa-send"></i> Ajukan ACC</button>
                  <a href="<?php echo base_url()."dosen/printlkd" ?>" type="button" target="_blank" class="btn btn-w-m btn-success" ><i class="fa fa-print"></i> Export Data</a>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

<script>
  function pengajuan(){
    $('#ajukan').removeClass('btn-primary');
    $('#ajukan').addClass('btn-warning');
    $('#ajukan').html('<i class="fa fa-clock-o"></i> Menunggu ACC');
  }
</script>
