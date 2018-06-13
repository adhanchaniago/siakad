
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Jadwal Kartu Rencana Studi Mahasiswa</h2>
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
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
              <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Anjungan Mandiri</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Sem. Pendek</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                  <h4>Jadwal KRS Anjungan Mandiri</h4>
                                    <div class="row">
                                      <form>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                          <label class="control-label">Fakultas:</label>
                                            <div><select type="text" class="form-control">
                                                  <option value="1">DAKWAH DAN KOMUNIKASI</option>
                                                  <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                                                  <option value="3">PASCASARJANA</option>
                                                  <option value="4">SYARIAH</option>
                                                  <option value="5">TARBIYAH DAN KEGURUAN</option>
                                                  <option value="6">USHULUDDIN DAN HUMANIORA</option>
                                                  </select></div>
                                          </div>
                                        </div>
                                        <div class="col-sm-3">
                                          <div class="form-group">
                                            <label class="control-label">Prodi:</label>
                                              <div><select type="text" class="form-control">
                                                    <option value="1">SEMUA</option>
                                                    </select></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label">Tgl. Mulai:</label>
                                              <div><input type="text" class="form-control" id="datepicker" required></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label">Tgl. Selesai:</label>
                                              <div><input type="text" class="form-control" id="datepicker2" required></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label"> </label><div>
                                              <button type="submit" class="btn btn-md btn-success"><span class="fa fa-check"></span> Set Jadwal</button>
                                            </div>
                                            </div>
                                          </div>
                                        </form>
                                        <div class="col-sm-12 table-responsive">
                                          <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Prodi</th>
                                                <th>Tgl. Mulai</th>
                                                <th>Tgl. Selesai</th>
                                                <th>Status</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th style="background-color:#fff !important;" colspan="5">Fakultas SYARIAH</th>
                                              </tr>
                                              <tr>
                                                <td>1</td>
                                                <td>S1 HUKUM EKONOMI SYARIAH (MUAMALAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>3/27/2018</td>
                                                <td>SELESAI</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>S1 HUKUM KELUARGA (AKHWAL SYAKHSHIYYAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>4/27/2018</td>
                                                <td>AKTIF</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color:#fff !important;" colspan="5">Fakultas TARBIYAH DAN KEGURUAN</th>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>S1 HUKUM EKONOMI SYARIAH (MUAMALAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>3/27/2018</td>
                                                <td>SELESAI</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>S1 HUKUM KELUARGA (AKHWAL SYAKHSHIYYAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>4/27/2018</td>
                                                <td>AKTIF</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                        <!-- <table class="table">
                                          <thead>
                                            <tr>
                                              <th width="30%">Fakultas</th>
                                              <th>Program Studi</th>
                                              <th width="20%">Tanggal Mulai</th>
                                              <th width="20%">Tanggal Berakhir</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <td>
                                                <div class="form-group">
                                                    <div><select type="text" class="form-control">
                                                          <option value="1">DAKWAH DAN KOMUNIKASI</option>
                                                          <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                                                          <option value="3">PASCASARJANA</option>
                                                          <option value="4">SYARIAH</option>
                                                          <option value="5">TARBIYAH DAN KEGURUAN</option>
                                                          <option value="6">USHULUDDIN DAN HUMANIORA</option>
                                                          </select></div>
                                                  </div>
                                              </td>
                                              <td>
                                                <div class="form-group">
                                                    <div><select type="text" class="form-control">
                                                          <option value="1">SEMUA</option>
                                                          </select></div>
                                                  </div>
                                              </td>
                                              <td><div class="form-group">
                                                  <div><input type="text" class="form-control" id="datepicker"></div>
                                                </div></td>
                                              <td><div class="form-group">
                                                  <div><input type="text" class="form-control" id="datepicker2"></div>
                                                </div></td>
                                            </tr>
                                          </tbody>
                                        </table> -->
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                  <h4>Jadwal KRS Semester Pendek</h4>
                                    <div class="row">
                                      <form>
                                      <div class="col-sm-3">
                                        <div class="form-group">
                                          <label class="control-label">Fakultas:</label>
                                            <div><select type="text" class="form-control">
                                                  <option value="1">DAKWAH DAN KOMUNIKASI</option>
                                                  <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                                                  <option value="3">PASCASARJANA</option>
                                                  <option value="4">SYARIAH</option>
                                                  <option value="5">TARBIYAH DAN KEGURUAN</option>
                                                  <option value="6">USHULUDDIN DAN HUMANIORA</option>
                                                  </select></div>
                                          </div>
                                        </div>
                                        <div class="col-sm-3">
                                          <div class="form-group">
                                            <label class="control-label">Prodi:</label>
                                              <div><select type="text" class="form-control">
                                                    <option value="1">SEMUA</option>
                                                    </select></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label">Tgl. Mulai:</label>
                                              <div><input type="text" class="form-control" id="datepicker" required></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label">Tgl. Selesai:</label>
                                              <div><input type="text" class="form-control" id="datepicker2" required></div>
                                            </div>
                                          </div>
                                        <div class="col-sm-2">
                                          <div class="form-group">
                                            <label class="control-label"> </label><div>
                                              <button type="submit" class="btn btn-md btn-success"><span class="fa fa-check"></span> Set Jadwal</button>
                                            </div>
                                            </div>
                                          </div>
                                        </form>
                                        <div class="col-sm-12 table-responsive">
                                          <table class="table table-bordered">
                                            <thead>
                                              <tr>
                                                <th>No</th>
                                                <th>Prodi</th>
                                                <th>Tgl. Mulai</th>
                                                <th>Tgl. Selesai</th>
                                                <th>Status</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th style="background-color:#fff !important;" colspan="5">Fakultas SYARIAH</th>
                                              </tr>
                                              <tr>
                                                <td>1</td>
                                                <td>S1 HUKUM EKONOMI SYARIAH (MUAMALAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>3/27/2018</td>
                                                <td>SELESAI</td>
                                              </tr>
                                              <tr>
                                                <td>2</td>
                                                <td>S1 HUKUM KELUARGA (AKHWAL SYAKHSHIYYAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>4/27/2018</td>
                                                <td>AKTIF</td>
                                              </tr>
                                              <tr>
                                                <th style="background-color:#fff !important;" colspan="5">Fakultas TARBIYAH DAN KEGURUAN</th>
                                              </tr>
                                              <tr>
                                                <td>3</td>
                                                <td>S1 HUKUM EKONOMI SYARIAH (MUAMALAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>3/27/2018</td>
                                                <td>SELESAI</td>
                                              </tr>
                                              <tr>
                                                <td>4</td>
                                                <td>S1 HUKUM KELUARGA (AKHWAL SYAKHSHIYYAH) (Reguler)</td>
                                                <td>2/28/2018</td>
                                                <td>4/27/2018</td>
                                                <td>AKTIF</td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
