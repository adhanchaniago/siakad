
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-8">
                    <h2>Data Konfigurasi Waktu Minimal Kegiatan</h2>
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
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
                <div class="row">
                  <div class="col-md-4">
                    <h3>Tabel Kategori Kegiatan</h3>
                  </div>
                  <div class="col-md-2 pull-right">
                    <a href="" data-toggle="modal" data-target="#modalTmbh1" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                  </div>
                </div><br>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover dataTables-example" >
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Alias</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr class="gradeX">
                          <td>1</td>
                          <td>Pengajaran</td>
                          <td>ajar</td>
                          <td>
                            <center>
                              <a class='btn btn-warning btn-xs' title='Edit Data' href='' data-toggle="modal" data-target="#modalEdit1"><span class='glyphicon glyphicon-edit'></span></a>
                              <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                            </center>
                            </td>
                      </tr>
                      </tbody>
                      </table>
                    </div>
                </div>
              <br>
            </div>
            <div class="modal inmodal" id="modalTmbh1" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kategori Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="kategori">Nama Kategori: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Kategori" required>
                          </div>
                          <div class="form-group">
                            <label for="alias">Alias: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan alias max 7 karakter" maxlength="7" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal inmodal" id="modalTmbh2" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kegiatan Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nama">Nama Kegiatan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Kategori: <span style="color:red;">*</span></label>
                            <select type="text" class="form-control">
                              <option>Pengajaran</option>
                              <option>Pembimbingan</option>
                              <option>Pengujian</option>
                              <option>Penlitian dan Pengabdian</option>

                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal inmodal" id="modalEdit2" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Kegiatan</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nama">Nama Kegiatan: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Kegiatan" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Kategori: <span style="color:red;">*</span></label>
                            <select type="text" class="form-control">
                              <option>Pengajaran</option>
                              <option>Pembimbingan</option>
                              <option>Pengujian</option>
                              <option>Penlitian dan Pengabdian</option>

                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
