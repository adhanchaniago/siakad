
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
                <form class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Fakultas:</label>
                          <div class="col-lg-6"><input type="number" class="form-control" placeholder="Masukkan Kode Fakultas"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Fakultas:</label>
                          <div class="col-lg-6"><input type="text" class="form-control" placeholder="Masukkan Nama Fakultas" style="text-transform:uppercase;"></div>
                        </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Dekan:</label>
                          <div class="col-lg-6"><select type="text" class="dekan standart form-control">
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                    <option value="4">Option 4</option>
                                    <option value="5">Option 5</option>
                                </select></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Nama Wakil Dekan:</label>
                            <div class="col-lg-6"><select type="text" class="wakildekan standart form-control">
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
      $(".dekan").select2();
      $(".wakildekan").select2();
    });
    function goBack() {
    window.history.back();
  }
</script>
