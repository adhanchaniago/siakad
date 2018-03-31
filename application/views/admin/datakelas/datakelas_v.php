
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Kelas</h2>
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
                        <a href="<?php echo base_url()."admin/datakelas/add"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatabelkelas" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Program Studi</th>
                    <th>Nama Kelas</th>
                    <th>Kuota (Orang)</th>
                    <th>Jenis Kelas</th>
                    <th>Dosen Wali</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>Akutansi</td>
                    <td>AK-47</td>
                    <td>30</td>
                    <td>Reguler (R)</td>
                    <td>Arsene Wenger</td>
                    <td>
                      <center>
                        <!-- <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a> -->
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='<?php echo base_url()."admin/datakelas/edit"?>'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <!-- <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Data Kelas Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">Prodi: <span style="color:red;">*</span></label>
                            <select name="prodi" class="form-control">
                              <option selected disabled>-Pilih Prodi-</option>
                              <option>Ilmu Kedokteran</option>
                              <option>Ilmu Hukum</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama Kelas: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Kelas" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Kapasitas:</label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan Kapasitas Kelas">
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
                  $('.datatabelkelas').DataTable({
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
