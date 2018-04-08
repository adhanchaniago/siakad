
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Edit Data Program Studi</h2>
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
                        <label class="col-lg-2 control-label">Fakultas:</label>
                          <div class="col-lg-6"><select name="id_fakultas" type="text" class="form-control">
                            <option value="0" disabled selected>-Pilih Fakultas-</option>
                            <?php foreach ($fakultas->result() as $row){
                              if($row->id!=$jurusan->id_fakultas){
                                echo "<option value='$row->id'>$row->nama</option>";
                              }
                              else {
                                echo "<option value='$row->id' selected>$row->nama</option>";
                              }
                            }?>
                          </select></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Jenjang:</label>
                          <div class="col-lg-6"><select name="id_jenjang" type="text" class="form-control">
                            <option value="0" disabled selected>-Pilih Jenjang-</option>
                            <?php foreach ($jenjang->result() as $row){
                              if($row->id!=$jurusan->id_jenjang){
                                echo "<option value='$row->id'>$row->nama</option>";
                              }
                              else {
                                echo "<option value='$row->id' selected>$row->nama</option>";
                              }
                            }?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Jurusan:</label>
                          <div class="col-lg-6"><input name="kode" type="text" class="form-control" placeholder="Masukkan Kode Jurusan" value="<?php echo $jurusan->kode?>" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">UUID SMS Feeder:</label>
                          <div class="col-lg-6"><input name="uuid" type="text" class="form-control" placeholder="Masukkan UUID SMS Feeder" value="<?php echo $jurusan->uuid?>" required></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Jurusan:</label>
                          <div class="col-lg-6"><input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Jurusan" value="<?php echo $jurusan->nama?>" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Tanggal Berdiri:</label>
                          <div class="col-lg-6"><input type="text" name="tanggal_berdiri" class="form-control" id="datepicker" placeholder="Masukkan Tanggal Berdiri Jurusan" value="<?php echo date('d/m/Y',strtotime($jurusan->tanggal_berdiri))?>" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Gelar Akademik:</label>
                            <div class="col-lg-6"><input type="text" name="nama_gelar" class="form-control" placeholder="Masukkan Gelar Akademik" value="<?php echo $jurusan->nama_gelar?>" required></div>
                          </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Total SKS:</label>
                          <div class="col-lg-6"><input type="number" min="0" name="total_sks" class="form-control" placeholder="Masukkan Jumlah SKS Lulus" value="<?php echo $jurusan->total_sks?>" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Mulai Semester:</label>
                            <div class="col-lg-6">
                              <select type="text" name="id_semester_mulai" class="form-control">
                              <option value="0" selected disabled>-Pilih Semester-</option>
                              <?php foreach ($semester->result() as $row){
                                if($row->id!=$jurusan->id_semester_mulai){
                                  echo "<option value='$row->id'>$row->semester</option>";
                                }
                                else {
                                  echo "<option value='$row->id' selected>$row->semester</option>";
                                }
                              }?>
                            </select>
                            <small>(1):ganjil;(2):genap</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Status:</label>
                            <div class="col-lg-6"><select type="text" name="id_status" class="form-control">
                              <option value="0" disabled selected>-Pilih Status-</option>
                              <?php foreach ($status->result() as $row){
                                if($row->id!=$jurusan->id_status){
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                                else {
                                  echo "<option value='$row->id' selected>$row->nama</option>";
                                }
                              }?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">No Telepon Jurusan:</label>
                            <div class="col-lg-6"><input type="number" min="0" name="no_telp" class="form-control" placeholder="Masukkan Nomor Telepon Kantor Jurusan" value="<?php echo $jurusan->no_telp?>"></div>
                          </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Email Jurusan:</label>
                          <div class="col-lg-6"><input type="email" name="email" class="form-control" placeholder="Masukkan Email Jurusan" value="<?php echo $jurusan->email?>"></div>
                        </div>
                        <style media="screen">
                        [class^='select2'] {
                            border-radius: 0px !important;
                            }
                        </style>
                          <div class="hr-line-dashed"></div><br >
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Ketua Jurusan:</label>
                              <div class="col-lg-6"><select type="text" id="kajur" name="kajur" class="select2_demo_1 standart form-control">
                                <?php
                                foreach ($role->result() as $row){
                                  if($row->id_role=='1'){
                                    echo "<option value='$row->id_kajur'>$row->text</option>";
                                  }
                                } ?>
                                    </select></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Sekretaris :</label>
                                <div class="col-lg-6"><select type="text" id="sekre" name="sekre" class="select2_demo_1 standart form-control">
                                  <?php
                                  foreach ($role->result() as $row){
                                    if($row->id_role=='2'){
                                      echo "<option value='$row->id_kajur'>$row->text</option>";
                                    }
                                  } ?>
                                      </select></div>
                              </div>

                          <div class="form-group">
                            <label class="col-lg-2 control-label">Operator Jurusan:</label>
                              <div class="col-lg-6"><select type="text" name="operator" id="operator" class="select2_demo_1 standart form-control">
                                <?php

                                if(isset($admin)){
                                  echo "<option value='$admin->id'>$admin->text</option>";
                                }
                                 ?>
                              </select></div>
                            </div>

                            <!--
                            <div class="hr-line-dashed"></div><br >
                            <h4>Pemutakhiran/Peninjauan Kurikulum</h4><br>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Frekuensi:</label>
                              <div class="col-lg-6"><select type="text" class="form-control">
                                <option value="0" disabled selected>-Pilih-</option>
                                <option value="1">SETIAP 1 THN</option>
                                <option value="2">SETIAP 2 THN</option>
                                <option value="3">SETIAP 3 THN</option>
                                <option value="4">SETIAP 4 THN</option>
                                <option value="5">SESUAI PERATURAN PEMERINTAH</option>
                                <option value="6">SESUAI KEBUTUHAN</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pelaksanaan:</label>
                            <div class="col-lg-6"><select type="text" class="form-control">
                              <option value="0" disabled selected>-Pilih-</option>
                              <option value="1">OLEH JURUSAN SENDIRI</option>
                              <option value="2">BERSAMA TIM PT</option>
                              <option value="3">ORIENTASI PT LAIN</option>
                              <option value="4">ORIENTASI KEBUTUHAN PASAR</option>
                              <option value="5">BERSAMA STAKEHOLDER</option>
                            </select>
                          </div>
                        </div> -->

                        <div class="hr-line-dashed"></div><br >
                        <h4>Nomor dan Tanggal S.K Izin Operasional Dikti (Terakhir)</h4><br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No SK Dikti:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" name="no_sk_dikti" placeholder="Masukkan Nomor SK Dikti" value="<?php echo $jurusan->no_sk_dikti?>" required></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal SK Dikti:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" id="datepicker2" name="tanggal_sk_dikti" placeholder="Masukkan Tanggal SK Dikti" value="<?php echo date('d/m/Y',strtotime($jurusan->tanggal_sk_dikti))?>" required></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Tgl Berakhir SK Dikti:</label>
                                <div class="col-lg-6"><input type="text" class="form-control" id="datepicker3" name="tanggal_berakhir_sk_dikti" placeholder="Masukkan Tanggal Berakhir SK Dikti" value="<?php echo date('d/m/Y',strtotime($jurusan->tanggal_berakhir_sk_dikti))?>" required></div>
                              </div>
                          <div class="hr-line-dashed"></div><br >
                          <h4>Nomor dan Tanggal S.K Akreditasi BAN-PT (Terakhir, Jika ada)</h4><br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No SK BAN:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" name="no_sk_ban" placeholder="Masukkan Nomor SK BAN-PT" value="<?php echo $jurusan->no_sk_ban?>"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal SK BAN:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" id="datepicker5" name="tanggal_sk_ban" placeholder="Masukkan Tanggal SK BAN-PT" value="<?php echo date('d/m/Y',strtotime($jurusan->tanggal_sk_ban))?>"></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Tgl Berakhir SK BAN:</label>
                                <div class="col-lg-6"><input type="text" class="form-control" id="datepicker6" name="tanggal_berakhir_sk_ban" placeholder="Masukkan Tanggal Berakhir SK BAN-PT" value="<?php echo date('d/m/Y',strtotime($jurusan->tanggal_berakhir_sk_ban))?>"></div>
                              </div>
                            <!-- <div class="form-group">
                              <label class="col-lg-2 control-label">Akreditasi:</label>
                                <div class="col-lg-6"><select type="text" class="form-control">
                                  <option value="0" selected disabled>-Pilih-</option>
                                  <option value="1">Akreditasi A</option>
                                  <option value="2">Akreditasi B</option>
                                  <option value="3">Akreditasi C</option>
                                  <option value="4">Belajar</option>
                                  <option value="5">Unggul</option>
                                </select></div>
                              </div> -->
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-send"></i> Submit</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

  <script>
  $(document).ready(function(){
    $('#kajur').select2({
      placeholder: 'Pilih Kepala Jurusan',
      allowClear:true,
      ajax: {
        url: '<?php echo base_url()."admin/Datajurusan/getKaprodi"?>',
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
    $('#sekre').select2({
      placeholder: 'Pilih Sekretaris Jurusan',
      allowClear:true,
      ajax: {
        url: '<?php echo base_url()."admin/Datajurusan/getKaprodi"?>',
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

    $('#operator').select2({
      placeholder: 'Pilih Operator Jurusan',
      allowClear:true,
      ajax: {
        url: '<?php echo base_url()."admin/Datajurusan/getOperator"?>',
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
            formData.append('id_jurusan','<?php echo $jurusan->id?>');
            $.ajax({
              url: '<?php echo base_url("admin/Datajurusan/editJurusan");?>',
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
                  window.location.href = "<?php echo base_url()."admin/datajurusan"?>";
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
