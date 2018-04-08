
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Tambah Kelas Baru</h2>
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
                <form class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Fakultas:</label>
                          <div class="col-lg-6"><select type="text" class="form-control">
                            <option value="0" disabled selected>-Pilih Fakultas</option>
                            <option value="1" >DAKWAH DAN KOMUNIKASI</option>
                            <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                            <option value="3">PASCASARJANA</option>
                            <option value="4">SYARIAH</option>
                            <option value="5">TARBIYAH DAN KEGURUAN</option>
                            <option value="6">USHULUDDIN DAN HUMANIORA</option>
                          </select></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Program Studi:</label>
                          <div class="col-lg-6"><select type="text" class="form-control">
                            <option value="0" disabled selected>-Pilih Prodi</option>
                            <option value="1" >S1-BIMBINGAN DAN PENYULUHAN ISLAM</option>
                          </select></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kelas Prodi:</label>
                          <div class="col-lg-6"><select type="text" class="form-control">
                            <option value="0" disabled selected>-Pilih Jenis Kelas</option>
                            <option value="1" >REGULER (R)</option>
                            <option value="2">EXTENSI (EX)</option>
                          </select></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Kelas:</label>
                          <div class="col-lg-6"><input type="text" class="form-control"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kuota:</label>
                          <div class="col-lg-6"><input type="number" min="0" class="form-control"></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Dosen Wali:</label>
                            <div class="col-lg-6"><select type="text" class="dosenwali standart form-control">
                                      <option value="1">Option 1</option>
                                      <option value="2">Option 2</option>
                                      <option value="3">Option 3</option>
                                      <option value="4">Option 4</option>
                                      <option value="5">Option 5</option>
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
          $(".dosenwali").select2();
        });
        function goBack() {
        window.history.back();
      }
    </script>
