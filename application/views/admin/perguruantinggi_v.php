
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Perguruan Tinggi</h2>
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
                <div class="row">
                  <div class="col-lg-6">
                        <h2>Identitas</h2>
                      <div class="hr-line-dashed"></div>
                      <!-- <form class="form-horizontal"> -->

                      <!-- <div class="form-group">
                        <label class="col-lg-5 control-label">Kode Badan Hukum:</label>
                          <div class="col-lg-7"><input type="number" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">Kode Perguruan Tinggi:</label>
                          <div class="col-lg-7"><input type="number" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">Nama Perguruan Tinggi:</label>
                          <div class="col-lg-7"><input type="text" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">Nama Singkatan:</label>
                          <div class="col-lg-7"><input type="text" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-5 control-label">Tanggal Berdiri:</label>
                            <div class="col-lg-7"><input type="text" class="form-control"></div>
                          </div> -->
                      <?php foreach ($data->result() as $row)
                            {
                              if($row->option_category==1)
                                echo "<div class='form-group'>
                                <label class='col-lg-5 control-label'>$row->option_name:</label>
                                <div class='col-lg-7'><input type='$row->option_type'name='$row->option_code' value='$row->option_data' class='form-control'></div>
                                </div>";
                            }
                          ?>

                      <!-- </form> -->
                  </div>
                  <div class="col-lg-6">
                        <h2>Akta Terakhir</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="pull-left">
                      <!-- <form class="form-horizontal pull-left"> -->
                      <!-- <div class="form-group">
                        <label class="col-lg-5 control-label">Nomor:</label>
                          <div class="col-lg-7"><input type="number" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-5 control-label">Tanggal Akta:</label>
                            <div class="col-lg-7"><input type="text" class="form-control" id="datepicker" required></div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-5 control-label">Nomor P.N:</label>
                              <div class="col-lg-7"><input type="number" class="form-control"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-5 control-label">Tanggal Berdiri:</label>
                              <div class="col-lg-7"><input type="text" class="form-control" id="datepicker3" required></div>
                            </div> -->
                            <?php foreach ($data->result() as $row)
                                  {
                                    if($row->option_category==3)
                                      echo "<div class='form-group'>
                                      <label class='col-lg-5 control-label'>$row->option_name:</label>
                                      <div class='col-lg-7'><input type='$row->option_type'name='$row->option_code' value='$row->option_data' class='form-control'></div>
                                      </div>";
                                  }
                                ?>
                      </div>
                      <!-- </form> -->
                  </div>
                </div> <br >
                <style media="screen">
                  textarea{
                    resize: none;
                  }
                </style>
                <div class="row">
                  <div class="col-lg-6">
                        <h2>Alamat dan Kontak</h2>
                      <div class="hr-line-dashed"></div>
                      <!-- <form class="form-horizontal"> -->

                      <!-- <div class="form-group">
                        <label class="col-lg-5 control-label">Alamat:</label>
                          <div class="col-lg-7"><textarea type="text" class="form-control"></textarea></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">Provinsi:</label>
                          <div class="col-lg-7"><input type="text" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">Kota:</label>
                          <div class="col-lg-7"><input type="text" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-5 control-label">POS:</label>
                          <div class="col-lg-7"><input type="number" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-5 control-label">No. Telepon:</label>
                            <div class="col-lg-7"><input type="number" class="form-control"></div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-5 control-label">FAX:</label>
                              <div class="col-lg-7"><input type="number" class="form-control"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-5 control-label">Email:</label>
                              <div class="col-lg-7"><input type="email" class="form-control"></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-5 control-label">Website:</label>
                                <div class="col-lg-7"><input type="Website" class="form-control"></div>
                              </div> -->
                              <?php foreach ($data->result() as $row)
                                    {
                                      if($row->option_category==2)
                                        echo "<div class='form-group'>
                                        <label class='col-lg-5 control-label'>$row->option_name:</label>
                                        <div class='col-lg-7'><input type='$row->option_type'name='$row->option_code' value='$row->option_data' class='form-control'></div>
                                        </div>";
                                    }
                                  ?>
                      <!-- </form> -->
                  </div>
                  <div class="col-lg-6">
                        <h2>Pengesahan</h2>
                      <div class="hr-line-dashed"></div>
                      <!-- <form class="form-horizontal pull-left"> -->
                      <div class="pull-left">
                      <!-- <div class="form-group">
                        <label class="col-lg-5 control-label">Nomor:</label>
                          <div class="col-lg-7"><input type="number" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-5 control-label">Tanggal:</label>
                            <div class="col-lg-7"><input type="text" id="datepicker2" class="form-control"></div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-5 control-label">Akreditasi:</label>
                              <div class="col-lg-7"><input type="text" class="form-control"></div>
                            </div> -->
                            <?php foreach ($data->result() as $row)
                                  {
                                    if($row->option_category==4)
                                      echo "<div class='form-group'>
                                      <label class='col-lg-5 control-label'>$row->option_name:</label>
                                      <div class='col-lg-7'><input type='$row->option_type'name='$row->option_code' value='$row->option_data' class='form-control'></div>
                                      </div>";
                                  }
                                ?>
                          </div>
                      <!-- </form> -->
                  </div>
                </div>
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

        <script>
        $('#form').submit(function(){

                    var form = $('#form')[0]; // You need to use standart javascript object here
                    var formData = new FormData(form);
                    $.ajax({
                      url: '<?php echo base_url("admin/Perguruantinggi/insert");?>',
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
