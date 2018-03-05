
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Pengajuan Lembar Kerja Dosen</h2>
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
                          <div class="form-group">
                            <select class="form-control">
                              <option selected disabled>-Filter Mingguan-</option>
                              <option value="1">Minggu 1</option>
                              <option value="1">Minggu 2</option>
                              <option value="1">Minggu 3</option>
                              <option value="1">Minggu 4</option>
                              <option value="1">Minggu 5</option>
                            </select>
                            <!-- <label for="semester">Filter Mingguan</label> -->
                          </div>
                        </div>
                  </div>
                      <div class="hr-line-dashed"></div>
                    <form class="form-horizontal">
                      <div class="table-responsive">
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
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td rowspan="4" style="text-align:center;vertical-align:middle;">1</td>
                            <td rowspan="4" style="text-align:center;vertical-align:middle;">20-01-2018</td>
                              <tr>
                                <td>Menguji</td>
                                <td>10:00-12:30</td>
                                <td>-</td>
                                <td>-</td>
                                <td>2.5</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td rowspan="4" align="center" style="vertical-align:middle;"><a href="<?php echo base_url()."dosen/pengajuanlkd/edit"?>" class="btn btn-xs btn-primary" type="button" name="button"> <i class="fa fa-edit"></i> edit</a></td>
                              </tr>
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
                            <td rowspan="3" style="text-align:center;vertical-align:middle;">2</td>
                            <td rowspan="3" style="text-align:center;vertical-align:middle;">27-01-2018</td>
                              <tr>
                                <td>Mengajar</td>
                                <td>08:00-10:30</td>
                                <td>2.5</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td rowspan="2" align="center" style="vertical-align:middle;"><a class="btn btn-xs btn-primary" type="button" name="button"> <i class="fa fa-edit"></i> edit</a></td>
                              </tr>
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
                            <td></td>
                            <td colspan="3" style="text-align:center;vertical-align:middle;"><b>Jumlah</b></td>
                            <td>2.5</td>
                            <td>0.5</td>
                            <td>2.5</td>
                            <td>1</td>
                            <td>1</td>
                            <td>7.5</td>
                            <td></td>
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
                  <a href="<?php echo base_url()."assets/lkd-export.pdf" ?>" type="button" class="btn btn-w-m btn-success" ><i class="fa fa-print"></i> Export Data</a>
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
