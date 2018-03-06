
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Pengaturan Tahun Akademik</h2>
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
                    <th>ID</th>
                    <th>Tahun Ajaran</th>
                    <th>Semester</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>1617/1</td>
                    <td>2016/2017</td>
                    <td>Ganjil</td>
                    <td>Tidak Aktif</td>
                    <td>
                      <center>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='#'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>2</td>
                    <td>1617/2</td>
                    <td>2016/2017</td>
                    <td>Genap</td>
                    <td>Tidak Aktif</td>
                    <td>
                      <center>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='#'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                <tr class="gradeX">
                    <td>3</td>
                    <td>1718/1</td>
                    <td>2017/2018</td>
                    <td>Ganjil</td>
                    <td>Aktif</td>
                    <td>
                      <center>
                        <a class='btn btn-warning btn-xs' title='Edit Data' data-toggle="modal" data-target="#myModaledit"><span class='glyphicon glyphicon-edit'></span></a>
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
                            <h4 class="modal-title">Tahun Akademik Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">Tahun Ajaran: <span style="color:red;">*</span></label>
                            <div class="row">
                              <div class="col-lg-5">
                                <input type="text" id="yearpicker" name="yearpicker" class="form-control" placeholder="Tahun" required>
                              </div>
                              <div class="col-lg-1">
                                <font size="5"><b>&sol;</b></font>
                              </div>
                              <div class="col-lg-5">
                                <input type="text" id="yearpicker2" name="yearpicker2" class="form-control" placeholder="Tahun" required>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="semester">Semester<font color="red">*</font></label>
                            <select class="form-control" id="semester" name="semester">
                              <option value="1">Ganjil</option>
                              <option value="2">Genap</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="status">Status Semester<font color="red">*</font></label>
                            <select class="form-control" id="status" name="status">
                              <option value="1">Aktif</option>
                              <option value="0">Tidak Aktif</option>
                            </select>
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

            <div class="modal inmodal" id="myModaledit" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tahun Akademik Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">Tahun Ajaran: <span style="color:red;">*</span></label>
                            <div class="row">
                              <div class="col-lg-5">
                                <input type="text" id="yearpickerEdit" name="yearpickeredit" class="form-control" placeholder="Tahun" required>
                              </div>
                              <div class="col-lg-1">
                                <font size="5"><b>&sol;</b></font>
                              </div>
                              <div class="col-lg-5">
                                <input type="text" id="yearpicker2Edit" name="yearpicker2edit" class="form-control" placeholder="Tahun" required>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="semester">Semester<font color="red">*</font></label>
                            <select class="form-control" id="semester" name="semester">
                              <option value="1">Ganjil</option>
                              <option value="2">Genap</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="status">Status Semester<font color="red">*</font></label>
                            <select class="form-control" id="status" name="status">
                              <option value="1">Aktif</option>
                              <option value="0">Tidak Aktif</option>
                            </select>
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
