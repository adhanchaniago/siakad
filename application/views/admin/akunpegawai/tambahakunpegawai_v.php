
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Tambah Akun Pegawai Baru</h2>
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

            <div class="wrapper wrapper-content">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <form id="form" class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">NIP:</label>
                          <div class="col-lg-6"><input type="number" min="0" name="nip" class="form-control" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Pegawai:</label>
                          <div class="col-lg-6"><input type="text" name="nama" class="form-control" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Email:</label>
                          <div class="col-lg-6"><input type="email" name="email" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Nomor Kontak:</label>
                            <div class="col-lg-6"><input type="number" min="0" name="no_telp" class="form-control"></div>
                          </div>
                          <div class="form-group">

                            <label class="col-lg-2 control-label">Username:</label>
                              <div class="col-lg-6"><input type="text" name="username" class="form-control" required></div>
                              <div class="col-lg-4">Password akan mengikuti username</div>
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
          function goBack() {
          window.history.back();
          }
          $('#form').submit(function(){

                    var form = $('#form')[0]; // You need to use standart javascript object here
                    var formData = new FormData(form);
                    $.ajax({
                      url: '<?php echo base_url("admin/Akunpegawai/insert");?>',
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
                          window.location.href = "<?php echo base_url()."admin/akunpegawai"?>";
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
