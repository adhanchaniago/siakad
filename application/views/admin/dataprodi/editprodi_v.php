
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Edit Data Program Studi</h2>
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
                <form class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Fakultas:</label>
                          <div class="col-lg-6"><select type="text" class="form-control">
                            <option value="0" disabled>-Pilih Fakultas-</option>
                            <option value="1" selected>DAKWAH DAN KOMUNIKASI</option>
                            <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                            <option value="3">PASCASARJANA</option>
                            <option value="4">SYARIAH</option>
                            <option value="5">TARBIYAH DAN KEGURUAN</option>
                            <option value="6">USHULUDDIN DAN HUMANIORA</option>
                          </select></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Jenjang:</label>
                          <div class="col-lg-6"><select type="text" class="form-control">
                            <option value="0" disabled>-Pilih Jenjang-</option>
                            <option value="1">S3</option>
                            <option value="2">S2</option>
                            <option value="3" selected>S1</option>
                            <option value="4">D4</option>
                            <option value="5">D3</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Kode Program Studi:</label>
                          <div class="col-lg-6"><input type="text" class="form-control" value="ABC1" required></div>
                        </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">UUID SMS Feeder:</label>
                        <div class="col-lg-6"><input type="text" class="form-control" value="70123" required></div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Nama Program Studi:</label>
                          <div class="col-lg-6"><input type="text" class="form-control" value="Program Studi Contoh" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Tanggal Berdiri:</label>
                          <div class="col-lg-6"><input type="text" class="form-control" id="datepicker" value="03/06/2018" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Gelar Akademik:</label>
                            <div class="col-lg-6"><input type="text" class="form-control" value="S.Ab" required></div>
                          </div>
                      <div class="form-group">
                        <label class="col-lg-2 control-label">Total SKS:</label>
                          <div class="col-lg-6"><input type="number" min="0" class="form-control" value="144" required></div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Mulai Semester:</label>
                            <div class="col-lg-6">
                              <select type="text" class="form-control">
                              <option value="0" disabled>-Pilih Semester-</option>
                              <option value="1" selected>17/18(2)</option>
                              <option value="2">17/18(1)</option>
                            </select>
                            <small>(1):ganjil;(2):genap</small>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Status:</label>
                            <div class="col-lg-6"><select type="text" class="form-control">
                              <option value="0" disabled>-Pilih Status-</option>
                              <option value="1" selected>AKTIF</option>
                              <option value="2">ALIG BENTUK</option>
                              <option value="3">ALIH KELOLA</option>
                              <option value="4">MERGER</option>
                              <option value="5">NON-AKTIF</option>
                            </select>
                          </div>
                        </div>
                        <style media="screen">
                        [class^='select2'] {
                            border-radius: 0px !important;
                            }
                        </style>
                          <div class="hr-line-dashed"></div><br >
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Ketua Prodi:</label>
                              <div class="col-lg-6"><select type="text" class="select2_demo_1 standart form-control">
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                        <option value="4">Option 4</option>
                                        <option value="5">Option 5</option>
                                    </select></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">No Telepon Prodi:</label>
                                <div class="col-lg-6"><input type="number" min="0" class="form-control" placeholder="Masukkan Nomor Telepon Kantor Prodi"></div>
                              </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email Prodi:</label>
                              <div class="col-lg-6"><input type="email" class="form-control" placeholder="Masukkan Email Prodi"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Operator Prodi:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" value="-"></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">No HP Operator:</label>
                                <div class="col-lg-6"><input type="number" class="form-control" value="0" ></div>
                              </div>
                            <div class="hr-line-dashed"></div><br >
                            <h4>Pemutakhiran/Peninjauan Kurikulum</h4><br>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Frekuensi:</label>
                              <div class="col-lg-6"><select type="text" class="form-control">
                                <option value="0" disabled>-Pilih-</option>
                                <option value="1">SETIAP 1 THN</option>
                                <option value="2">SETIAP 2 THN</option>
                                <option value="3">SETIAP 3 THN</option>
                                <option value="4" selected>SETIAP 4 THN</option>
                                <option value="5">SESUAI PERATURAN PEMERINTAH</option>
                                <option value="6">SESUAI KEBUTUHAN</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pelaksanaan:</label>
                            <div class="col-lg-6"><select type="text" class="form-control">
                              <option value="0" disabled>-Pilih-</option>
                              <option value="1">OLEH JURUSAN SENDIRI</option>
                              <option value="2" selected>BERSAMA TIM PT</option>
                              <option value="3">ORIENTASI PT LAIN</option>
                              <option value="4">ORIENTASI KEBUTUHAN PASAR</option>
                              <option value="5">BERSAMA STAKEHOLDER</option>
                            </select>
                          </div>
                        </div>
                        <div class="hr-line-dashed"></div><br >
                        <h4>Nomor dan Tanggal S.K Izin Operasional Dikti (Terakhir)</h4><br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No SK Dikti:</label>
                              <div class="col-lg-6"><input type="number" class="form-control" value="0" required></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal SK Dikti:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" id="datepicker2" value="01/01/2001" required></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Tgl Berakhir SK Dikti:</label>
                                <div class="col-lg-6"><input type="text" class="form-control" id="datepicker3" value="01/01/2003" required></div>
                              </div>
                          <div class="hr-line-dashed"></div><br >
                          <h4>Nomor dan Tanggal S.K Akreditasi BAN-PT (Terakhir, Jika ada)</h4><br>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">No SK BAN:</label>
                              <div class="col-lg-6"><input type="number" class="form-control" value="0"></div>
                            </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal SK BAN:</label>
                              <div class="col-lg-6"><input type="text" class="form-control" id="datepicker5" value="-"></div>
                            </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Tgl Berakhir SK BAN:</label>
                                <div class="col-lg-6"><input type="text" class="form-control" id="datepicker6" value="-"></div>
                              </div>
                            <div class="form-group">
                              <label class="col-lg-2 control-label">Akreditasi:</label>
                                <div class="col-lg-6"><select type="text" class="form-control">
                                  <option value="0" selected disabled>-Pilih-</option>
                                  <option value="1">Akreditasi A</option>
                                  <option value="2">Akreditasi B</option>
                                  <option value="3">Akreditasi C</option>
                                  <option value="4">Belajar</option>
                                  <option value="5">Unggul</option>
                                </select></div>
                              </div>
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-send"></i> Submit</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

  <script>
      $(document).ready(function(){
          $(".select2_demo_1").select2();
      });
  </script>
