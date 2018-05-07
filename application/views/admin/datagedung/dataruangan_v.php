
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Ruangan</h2>
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
                        <a class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatabelruangan" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Daya Tampung</th>
                    <th>Gedung</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>101</td>
                    <td>A101</td>
                    <td>50</td>
                    <td>A</td>
                    <td>
                      <center>
                        <!-- <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a> -->
                        <a class='btn btn-warning btn-xs' title='Edit Data' data-toggle="modal" data-target="#editModal"><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="addModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Ruangan Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label>Pilih Gedung: <span style="color:red;">*</span></label>
                            <select class="form-control" required>
                              <option value="0" selected disabled>-Pilih Gedung-</option>
                              <option value="1">Gedung A</option>
                              <option value="2">Gedung B</option>
                              <option value="3">Gedung C</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Kode Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Kode Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label>Nama Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Daya Tampung:</label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan Daya Tampung Ruangan">
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

            <div class="modal inmodal" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data Ruangan</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label>Nama Gedung: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Gedung" required>
                          </div>
                          <div class="form-group">
                            <label>Kode Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Kode Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label>Nama Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Daya Tampung:</label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan Daya Tampung Ruangan">
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
                  $('.datatabelruangan').DataTable({
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
