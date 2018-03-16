
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Form Edit Lembar Kerja Dosen</h2>
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
                <form class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Hari/Tanggal:</label>
                          <div class="col-lg-6"><input type="text" id="datepicker" class="form-control"></div>
                        </div><hr >
                        <div id="activities">
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kegiatan 1:</label>
                          <div class="col-lg-6"><select id="kegiatan1" type="text" class="form-control">
                            <option value="1" selected disabled>-Pilih Kegiatan-</option>
                            <option value="1">Mengajar</option>
                            <option value="1">Membimbing</option>
                            <option value="1">Menguji</option>
                            <option value="1">Tunjang</option>
                          </select></div>
                        </div>
                        <!-- <div id="nama_kegiatan1" class="form-group kegiatan">
                          <label class="col-lg-2 control-label">Nama Kegiatan:</label>
                            <div class="col-lg-6"><input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan Lainnya..."></div>
                          </div> -->
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Waktu 1:</label>
                            <div class="col-lg-6 input-group">
                              <div class="col-lg-12">
                              <input type="text" class="form-control clockpicker2" data-autoclose="true" readonly>
                            </div>
                              <span class="input-group-addon">s/d</span>
                              <div class="col-lg-12">
                                <input type="text" class="form-control clockpicker2" data-autoclose="true" readonly>
                              </div>
                              </div>
                          </div>
                          <hr>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-6 col-lg-offset-2">
                            <button type="button" class="btn btn-sm btn-success pull-right" name="button" onclick="addActivity()"><i class="fa fa-plus"></i> Kegiatan</button>
                          </div>
                        </div>
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-send"></i> Submit</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

    <script type="text/javascript">

    $('.clockpicker2').clockpicker({
      minutestep:30
    });

    var kegiatan_num=1;
    function addActivity(){
    kegiatan_num++;
var html = '<div class="form-group">'+
'                        <label class="col-lg-2 control-label">Kegiatan '+kegiatan_num+':</label>'+
'                          <div class="col-lg-6"><select id="kegiatan1" type="text" class="form-control">'+
'                            <option value="1" selected disabled>-Pilih Kegiatan-</option>'+
'                            <option value="1">Mengajar</option>'+
'                            <option value="1">Membimbing</option>'+
'                            <option value="1">Menguji</option>'+
'                            <option value="1">Tunjang</option>'+
'                          </select></div>'+
'                        </div>'+

'                        <div class="form-group">'+
'                          <label class="col-lg-2 control-label">Waktu '+kegiatan_num+':</label>'+
'                            <div class="col-lg-6 input-group">'+
'                              <div class="col-lg-12">'+
'                              <input type="text" class="form-control clockpicker2" data-autoclose="true" readonly>'+
'                            </div>'+
'                              <span class="input-group-addon">s/d</span>'+
'                              <div class="col-lg-12">'+
'                                <input type="text" class="form-control clockpicker2" data-autoclose="true" readonly>'+
'                              </div>'+
'                              </div>'+
'                          </div>'+
'                          <hr>';


      $('#activities').append(html);
      $('.clockpicker2').clockpicker({
        minutestep:30
      });
    }
    </script>
