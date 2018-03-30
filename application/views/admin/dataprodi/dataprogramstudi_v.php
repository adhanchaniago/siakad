
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Program Studi</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-sm-8">
                    <div class="title-action">
                        <a href="<?php echo base_url()."admin/dataprogramstudi/add"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-title">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">Filter Fakultas:</label>
                        <div><select type="text" class="form-control">
                          <option value="0" selected>SEMUA</option>
                          <option value="1" >DAKWAH DAN KOMUNIKASI</option>
                          <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                          <option value="3">PASCASARJANA</option>
                          <option value="4">SYARIAH</option>
                          <option value="5">TARBIYAH DAN KEGURUAN</option>
                          <option value="6">USHULUDDIN DAN HUMANIORA</option>
                        </select></div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatabelakun" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Program Studi</th>
                    <th>Jenjang</th>
                    <th>Kepala Prodi</th>
                    <th>Kelas</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>112</td>
                    <td>Kedokteran</td>
                    <td>S1</td>
                    <td>DR. Budi Santoso</td>
                    <td>Reguler (R)<br>
                      Ekstensi (Ex) </td>
                    <td>AKTIF</td>
                    <td>
                      <center>
                        <a class='btn btn-primary btn-xs' title='Data Kelas' data-toggle="modal" data-target="#kelasModal"><span class='fa fa-list'></span></a>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='<?php echo base_url()."admin/dataprogramstudi/edit"?>'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="kelasModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Kelas Program Studi</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Kelas Prodi: <span style="color:red;">*</span></label>
                                  <select type="text" class="form-control">
                                    <option value="2">EKSTENSI (EX)</option>
                                  </select>
                                </div>
                              </div>
                            <div class="col-xs-1">
                              <a class="btn btn-xs btn-success" style="margin-top:30px;">Tambahkan</a>
                            </div>
                        </div>
                        <div class="row">
                          <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Kelas Aktif</th>
                                <th>Hapus</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>REGULER (R)</td>
                                <td><center> <a type="button" name="button" class="btn btn-xs btn-danger"><span class="fa fa-remove"></span></a></td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(document).ready(function(){
                  $('.datatabelakun').DataTable({
                      pageLength: 25,
                      responsive: true,
                      dom: 'lTfgitp',
                      buttons: [
                          { extend: 'copy'},
                          {extend: 'csv'},
                          {extend: 'excel', title: 'ExampleFile'},
                          {extend: 'pdf', title: 'ExampleFile'},

                          {extend: 'print',
                           customize: function (win){
                                  $(win.document.body).addClass('white-bg');
                                  $(win.document.body).css('font-size', '10px');

                                  $(win.document.body).find('table')
                                          .addClass('compact')
                                          .css('font-size', 'inherit');
                          }
                          }
                      ]

                  });

              });
            </script>
