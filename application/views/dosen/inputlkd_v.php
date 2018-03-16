
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Form Input Lembar Kerja Dosen</h2>
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

            <style media="screen">
            .readonlynone {
                background-image: none !important;
                background-color: #FFFFFF !important;
              }
            </style>

            <div class="wrapper wrapper-content" id="item">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <form id="form" class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Hari/Tanggal:</label>
                          <div class="col-lg-6"><input type="text" id="datepicker" class="form-control" required></div>
                        </div><hr >
                        <div id="activities">
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kegiatan 1:</label>
                          <div class="col-lg-6">
                            <select id="kegiatan1" name="kegiatan[]" class="form-control">
                            <option value="" selected>-Pilih Kegiatan-</option>
                            <?php foreach ($kegiatan->result() as $row) {
                              echo "<option value='$row->id'>$row->nama</option>";
                            } ?>

                          </select></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Waktu 1:</label>
                            <div class="col-lg-6 input-group">
                              <div class="col-lg-12">
                              <input type="text" name="waktu_awal[]" class="form-control clockpicker readonlynone" data-autoclose="true" required readonly>
                            </div>
                              <span class="input-group-addon">s/d</span>
                              <div class="col-lg-12">
                                <input type="text" name="waktu_akhir[]" class="form-control clockpicker readonlynone" data-autoclose="true" required readonly>
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

    $('.clockpicker').clockpicker({
      minutestep:30
    });
    // $('#kegiatan2').change(function(){
    //   kegiatan = $('#kegiatan2').val();
    //   if(kegiatan=='1'){
    //     $('#nama_kegiatan2').addClass('hidden');
    //   }
    //   else{
    //     $('#nama_kegiatan2').removeClass('hidden');
    //   }
    // });
    // $('#kegiatan3').change(function(){
    //   kegiatan = $('#kegiatan3').val();
    //   if(kegiatan=='1'){
    //     $('#nama_kegiatan3').addClass('hidden');
    //   }
    //   else{
    //     $('#nama_kegiatan3').removeClass('hidden');
    //   }
    // });
    // $('#kegiatan4').change(function(){
    //   kegiatan = $('#kegiatan4').val();
    //   if(kegiatan=='1'){
    //     $('#nama_kegiatan4').addClass('hidden');
    //   }
    //   else{
    //     $('#nama_kegiatan4').removeClass('hidden');
    //   }
    // });
    var kegiatan_num=1;
    var htm = $('#kegiatan1').html();
    function addActivity(){
    kegiatan_num++;
var html = '<div class="form-group">'+
'                        <label class="col-lg-2 control-label">Kegiatan '+kegiatan_num+':</label>'+
'                          <div class="col-lg-6"><select name="kegiatan[]" class="form-control">';
html+=htm;

html +='                          </select></div>'+
'                        </div>'+

'                        <div class="form-group">'+
'                          <label class="col-lg-2 control-label">Waktu '+kegiatan_num+':</label>'+
'                            <div class="col-lg-6 input-group">'+
'                              <div class="col-lg-12">'+
'                              <input type="text" name="waktu_awal[]" class="form-control clockpicker readonlynone" data-autoclose="true" required readonly>'+
'                            </div>'+
'                              <span class="input-group-addon">s/d</span>'+
'                              <div class="col-lg-12">'+
'                                <input type="text" name="waktu_akhir[]" class="form-control clockpicker readonlynone" data-autoclose="true" required readonly>'+
'                              </div>'+
'                              </div>'+
'                          </div>'+
'                          <hr>';


      $('#activities').append(html);
      $('.clockpicker').clockpicker({
        minutestep:30
      });

    }

  $('#form').submit(function(){
    var kegiatanArray = [];
    var waktuAwalArray = [];
    var waktuAkhirArray = [];
    var tanggal = $('#datepicker').val();
    $( "select[name='kegiatan[]']" ).each(function() {
        kegiatanArray.push($( this ).val());
    });
    $( "input[name='waktu_awal[]']" ).each(function() {
        waktuAwalArray.push($( this ).val());
    });
    $( "input[name='waktu_akhir[]']" ).each(function() {
        waktuAkhirArray.push($( this ).val());
    });
    var formData = new FormData;
    for(var i=0; i<kegiatanArray.length;i++){

      formData.append('kegiatan[]',kegiatanArray[i]);
      formData.append('waktu_awal[]',waktuAwalArray[i]);
      formData.append('waktu_akhir[]',waktuAkhirArray[i]);
    }
    formData.append('tanggal',tanggal);

    $.ajax({
      url: '<?php echo base_url("dosen/Inputlkd/insert");?>',
      data: formData,
      type: 'POST',
      // THIS MUST BE DONE FOR FILE UPLOADING
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data){
        if (data.status=='berhasil') {
          swal("Berhasil!", data.message, "success");
        }else {
          swal("Gagal!", data.message, "error");
        }
        if(data.status=='berhasil'){
          location.reload();
        }
      },
    error: function(jqXHR, textStatus, errorThrown)
    {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
          });

    return false;
  });
    </script>
