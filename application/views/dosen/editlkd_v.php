<!-- ClockPicker Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets" ?>/dist/bootstrap-clockpicker.min.css">

<!-- ClockPicker script -->
<script type="text/javascript" src="<?php echo base_url()."assets" ?>/dist/bootstrap-clockpicker.min.js"></script><script>
  var idArray = [];
  var hapusArray = [];
</script>
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
                          <div class="col-lg-6"><input type="text" class="form-control readonlynone" value="<?php echo $hari->row()->tanggal?>" readonly></div>
                        </div><hr>
                        <div id="activities">
                          <?php
                          $i=0;
                          foreach ($detail->result() as $row):
                            $i++;?>
                            <script>
                            idArray.push(<?php echo $row->id?>);
                            </script>
                            <div id="detail<?php echo $i?>">
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Kegiatan <?php echo $i?>:</label>
                                <div class="col-lg-6 col-sm-5">
                                  <select name="kegiatan[]" class="form-control">
                                  <option value="" selected>-Pilih Kegiatan-</option>
                                  <?php foreach ($kegiatan->result() as $rows) {
                                    if($rows->id==$row->id_kegiatan)
                                    echo "<option value='$rows->id' selected>$rows->nama</option>";
                                    else
                                    echo "<option value='$rows->id'>$rows->nama</option>";
                                  } ?>

                                </select></div>

                                <div class="col-sm-1"><button type="button" class='btn btn-danger btn-xs' value='<?php echo $i?>' onclick='hapus(this.value,<?php echo $row->id?>)' title='Hapus Data' data-toggle="modal"><span class='glyphicon glyphicon-remove'></span></button></center></div>

                              </div>
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Waktu <?php echo $i?>:</label>
                                  <div class="col-lg-6 input-group col-sm-5">
                                    <div class="col-lg-12">
                                    <input type="text" name="waktu_awal[]" class="form-control clockpicker readonlynone" data-autoclose="true" value="<?php echo $row->jam_awal?>" required readonly>
                                  </div>
                                    <span class="input-group-addon">s/d</span>
                                    <div class="col-lg-12">
                                      <input type="text" name="waktu_akhir[]" class="form-control clockpicker readonlynone" data-autoclose="true" value="<?php echo $row->jam_akhir?>" required readonly>
                                    </div>
                                    </div>
                                </div>
                                <hr>
                              </div>
                          <?php endforeach; ?>
                        </div>

                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-disk"></i> Save</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>
<script>
$('.clockpicker').clockpicker({
  minutestep:5
});
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
  for(var i=0; i<idArray.length;i++){
    formData.append('id[]',idArray[i]);
  }
  for(var i=0; i<hapusArray.length;i++){
    formData.append('id_hapus[]',hapusArray[i]);
  }
  $.ajax({
    url: '<?php echo base_url("dosen/Laporanlkd/save");?>',
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
      if(data.status=='berhasil')
      location.reload();
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

function hapus(i,id){
  hapusArray.push(id);
  $('#detail'+i).remove();
  idArray = jQuery.grep(idArray, function(value) {
        return value != id;
      });
}
  </script>
