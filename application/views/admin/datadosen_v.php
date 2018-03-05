
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Dosen</h2>
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
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Kontak</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>12398</td>
                    <td>Budi Santoso</td>
                    <td>0851908198</td>
                    <td>Dosen Tetap</td>
                    <td>
                      <center>
                        <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='#'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Data Dosen Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan NIP Dosen" required>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Dosen" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">No. Kontak:</label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan Nomor Kontak Dosen">
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
