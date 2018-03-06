
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Feeder DIKTI</h2>
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
                <h2>Form</h2>
                <div class="hr-line-dashed"></div>
                <form class="form-horizontal">
                <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Setting Server</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Data Utama</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-3">Perkuliahan</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-4">Pelengkap</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                  <form class="form-horizontal">
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">URL Server :</label>
                                      <div class="col-lg-6"><input type="URL" class="form-control"><p>contoh: http://localhost:8082/ws/live.php?wsdl</p></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">User Feeder :</label>
                                      <div class="col-lg-6"><input type="text" class="form-control"></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Password Feeder :</label>
                                      <div class="col-lg-6"><input type="text" class="form-control"></div>
                                    </div>
                                    <br >
                                    <center><button type="submit" class="btn btn-primary" name="button"><i class="fa fa-save"></i> SIMPAN</button>
                                  </form>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                  <form class="form-horizontal">
                                    <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Jenis Data</th>
                                          <th>Prodi</th>
                                          <th>Tahun</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td width="20%"><h4>Data Mahasiswa Baru</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Data Dosen</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Penugasan Dosen</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  </form>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                                <div class="panel-body">
                                  <form class="form-horizontal">
                                    <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Jenis Data</th>
                                          <th>Prodi</th>
                                          <th>Tahun</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td width="20%"><h4>Data Kurikulum</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Data Mata Kuliah</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Kelas Perkuliahan</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Nilai Perkuliahan</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Aktivitas Kuliah Mahasiswa</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Mahasiswa Lulus/Drop Out</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  </form>
                                </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                                <div class="panel-body">
                                  <form class="form-horizontal">
                                    <div class="table-responsive">
                                    <table class="table">
                                      <thead>
                                        <tr>
                                          <th>Jenis Data</th>
                                          <th>Prodi</th>
                                          <th>Tahun</th>
                                          <th>Aksi</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td width="20%"><h4>Skala Nilai</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                        <tr>
                                          <td width="20%"><h4>Kapasitas Mahasiswa Baru</h4></td>
                                          <td><div><select class="form-control" name="account">
                                            <option selected disabled>-Pilih Kode-</option>
                                            <option>Kedokteran</option>
                                            <option>Teknik Informatika</option>
                                            <option>Farmasi</option>
                                            <option>Matematika</option>
                                        </select></div></td>
                                        <td><div><select class="form-control" name="account">
                                          <option selected disabled>-Pilih Tahun-</option>
                                          <option>2019</option>
                                          <option>2018</option>
                                          <option>2017</option>
                                          <option>2016</option>
                                        </select></div></td>
                                        <td> <button type="submit" class="btn btn-sm btn-primary" name="button">PROSES</button></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                </div>
              </form>
              </div>
            </div> <br >
          </div>
