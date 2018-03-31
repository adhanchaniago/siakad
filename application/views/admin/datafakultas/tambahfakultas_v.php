
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Tambah Fakultas Baru</h2>
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
            [class^='select2'] {
                border-radius: 0px !important;
                }
            </style>

            <div class="wrapper wrapper-content">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <form id="form" class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Fakultas:</label>
                          <div class="col-lg-6"><input type="number" name="kode" class="form-control" placeholder="Masukkan Kode Fakultas" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Fakultas:</label>
                          <div class="col-lg-6"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Fakultas" style="text-transform:uppercase;" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Dekan:</label>
                          <div class="col-lg-6"><select type="text" name="dekan" class="dekan standart form-control">

                                </select></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Wakil Dekan Akademik:</label>
                            <div class="col-lg-6"><select type="text" id="wadek_akademik" name="wadek_akademik" class="wakildekan standart form-control">

                                  </select></div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Wakil Dekan Keuangan:</label>
                              <div class="col-lg-6"><select type="text" id="wadek_keuangan" name="wadek_keuangan" class="wakildekan standart form-control">

                                    </select></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Wakil Dekan Kemahasiswaan:</label>
                                <div class="col-lg-6"><select type="text" id="wadek_kemahasiswaan" name="wadek_kemahasiswaan" class="wakildekan standart form-control">

                                      </select></div>
                              </div>
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-send"></i> Submit</button>
                  <button type="button" class="btn btn-w-m btn-warning" name="button" onclick="goBack()"><i class="fa fa-mail-reply"></i> Kembali</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>
<script>
    $(document).ready(function(){
      $(".wakildekan").select2();
      $('.dekan').select2({
        placeholder: 'Pilih Dekan',
        allowClear:true,
        ajax: {
          url: '<?php echo base_url()."admin/Datafakultas/getDekan"?>',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
      $('#wadek_akademik').select2({
        placeholder: 'Pilih Wadek Akademik',
        allowClear:true,
        ajax: {
          url: '<?php echo base_url()."admin/Datafakultas/getDekan"?>',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
      $('#wadek_keuangan').select2({
        placeholder: 'Pilih Wadek Keuangan',
        allowClear:true,
        ajax: {
          url: '<?php echo base_url()."admin/Datafakultas/getDekan"?>',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
      $('#wadek_kemahasiswaan').select2({
        placeholder: 'Pilih Wadek Kemahasiswaan',
        allowClear:true,
        ajax: {
          url: '<?php echo base_url()."admin/Datafakultas/getDekan"?>',
          dataType: 'json',
          delay: 250,
          processResults: function (data) {
            return {
              results: data
            };
          },
          cache: true
        }
      });
    });

    function goBack() {
    window.history.back();
  }
  $('#form').submit(function(){

              var form = $('#form')[0]; // You need to use standart javascript object here
              var formData = new FormData(form);
              $.ajax({
                url: '<?php echo base_url("admin/Datafakultas/insert");?>',
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
                  if(data.status=="berhasil"){
                    window.location.href = "<?php echo base_url()."admin/datafakultas"?>";
                  }
                },
                    error: function(jqXHR, textStatus, errorThrown)
                    {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
                alert('gagal');
              }
              })

              return false;
          });
</script>
