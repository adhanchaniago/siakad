
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Fakultas</h2>
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
                        <a href="<?php echo base_url()."admin/datafakultas/add"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered table-hover datatabelakun" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Fakultas</th>
                    <th>Dekan Fakultas</th>
                    <th>Wakil Dekan Fakultas</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>212</td>
                    <td>DAKWAH DAN KOMUNIKASI</td>
                    <td>123 - Prof. X</td>
                    <td>123 - Prof. Y</td>
                    <td>
                      <center>
                        <!-- <a class='btn btn-primary btn-xs' title='Lihat Data'><span class='fa fa-eye'></span></a> -->
                        <a class='btn btn-warning btn-xs' title='Edit Data' href="<?php echo base_url()."admin/datafakultas/edit"?>"><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data'><span class='glyphicon glyphicon-remove'></span></a>
                      </center>
                    </td>
                  </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <!-- <div class="modal inmodal" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Fakultas</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEdit" class="form-horizontal">
                          <div class="form-group">
                            <label for="nama">Nama Fakultas: <span style="color:red;">*</span></label>
                            <input type="text"  name="nama" id="nama" class="form-control" value="DAKWAH DAN KOMUNIKASI" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div> -->

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
