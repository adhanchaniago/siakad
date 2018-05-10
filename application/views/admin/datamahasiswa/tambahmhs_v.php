<link href="<?php echo base_url()."assets" ?>/css/tabs_style.css" rel="stylesheet">
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Tambah Data Mahasiswa Baru</h2>
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

            <style media="screen">
            [class^='select2'] {
                border-radius: 0px !important;
                }

            </style>
            <script type="text/javascript">
            </script>
            <div class="wrapper wrapper-content">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <form id="form" class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <!-- <div class="col-lg-12"> -->
                        <div class="tabs-container">
                          <div class="nav nav-tabs2 desktop">
                              <div class="btn-group " data-toggle="buttons">
                                 <button class="btn btn-primary active" data-toggle="tab" href="#tab-1"> <input type="radio" name="options" id="option1" autocomplete="off"> Data Akademik</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-2"> <input class="desktop" type="radio" name="options" id="option2" autocomplete="off"> Informasi Pindahan</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-3"> <input class="desktop" type="radio" name="options" id="option3" autocomplete="off"> Informasi Pendaftaran</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-4"> <input class="desktop" type="radio" name="options" id="option4" autocomplete="off"> Data Pribadi</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-5"> <input class="desktop" type="radio" name="options" id="option5" autocomplete="off"> Data Orang Tua / Wali</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-6"> <input class="desktop" type="radio" name="options" id="option6" autocomplete="off"> Data Pendidikan</button>
                                 <button class="btn btn-primary" data-toggle="tab" href="#tab-7"> <input class="desktop" type="radio" name="options" id="option7" autocomplete="off"> Kebutuhan Khusus</button>
                              </div>
                              <!-- <li class="active"><a class="btn btn-primary" data-toggle="tab" href="#tab-1"> Data Induk</a></li> -->
                           <!-- <li class=""> <a class="btn btn-primary" data-toggle="tab" href="#tab-2"> Data Pribadi</a></li> -->
                           </div>
                           <div class="nav nav-tabs phone">
                             <div class="btn-group " data-toggle="buttons">
                             <button class="btn btn-primary btn-block active" data-toggle="tab" href="#tab-1"> <input type="radio" name="options" id="option1" autocomplete="off"> Data Akademik</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-2"> <input class="desktop" type="radio" name="options" id="option2" autocomplete="off"> Informasi Pindahan</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-3"> <input class="desktop" type="radio" name="options" id="option3" autocomplete="off"> Informasi Pendaftaran</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-4"> <input class="desktop" type="radio" name="options" id="option4" autocomplete="off"> Data Pribadi</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-5"> <input class="desktop" type="radio" name="options" id="option5" autocomplete="off"> Data Orang Tua / Wali</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-6"> <input class="desktop" type="radio" name="options" id="option6" autocomplete="off"> Data Pendidikan</button>
                             <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-7"> <input class="desktop" type="radio" name="options" id="option7" autocomplete="off"> Kebutuhan Khusus</button>
                             </div>
                           </div>
                              <br>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <div class="panel-body">
                                <div class="col-lg-8">
                                  <div class="form-group">
                                    <label class="col-lg-3 control-label">Program Studi:</label>
                                      <div class="col-lg-7"><select class="form-control" required>
                                          <option value="0" selected>SEMUA</option>
                                          <optgroup label="Fakultas DAKWAH DAN KOMUNIKASI">
                                            <option value="1">S1 - BIMBINGAN DAN PENYULUHAN</option>
                                            <option value="2">S1 - KOMUNIKASI DAN PENYIARAN ISLAM</option>
                                          </optgroup>
                                          <optgroup label="Fakultas EKONOMI DAN BISNIS ISLAM">
                                            <option value="">S1 - ASURANSI SYARIAH</option>
                                          </optgroup>
                                          <optgroup label="Fakultas PASCASARJANA">
                                            <option value="">S2 - AKHLAK DAN TASAWUF</option>
                                          </optgroup>
                                          <optgroup label="Fakultas SYARIAH">
                                            <option value="">S1 - HUKUM EKONOMI SYARIAH (MUAMALAH)</option>
                                          </optgroup>
                                          <optgroup label="Fakultas TARBIYAH DAN KEGURUAN">
                                            <option value="">S1 - BIMBINGAN KONSELING ISLAM</option>
                                          </optgroup>
                                          <optgroup label="Fakultas USHULUDDIN DAN HUMANIORA">
                                            <option value="">S1 - AQIDAH DAN FILSAFAT ISLAM</option>
                                          </optgroup>
                                      </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">NIM:</label>
                                        <div class="col-lg-7"><input type="number" min="0" name="nim" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa" required></div>
                                      </div>
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Nama:</label>
                                        <div class="col-lg-7"><input type="nama" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap Mahasiswa(i)" required></div>
                                      </div>
                                    <div class="form-group">
                                      <label class="col-lg-3 control-label">Kelas:</label>
                                        <div class="col-lg-3"><select class="form-control" required>
                                          <option value="0" selected disabled>-Pilih-</option>
                                          <option value="1">KERJASAMA</option>
                                          <option value="2">NON-REGULER</option>
                                          <option value="3">REGULER</option>
                                        </select></div>
                                        <div class="col-lg-4"><select class="form-control" required>
                                          <option value="0" selected disabled>-Pilih KP-</option>
                                          <option value="1">Dual Model System</option>
                                          <option value="2">Program Kualifikasi Guru</option>
                                          <option value="3">Program Khusus Kajian Keislaman</option>
                                          <option value="4">Program Khusus Ulama</option>
                                          <option value="5">Reguler</option>
                                          <option value="6">KPI TI</option>
                                        </select></div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Jenis Kelamin:</label>
                                          <div class="col-lg-7"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">LAKI-LAKI</option>
                                              <option value="2">PEREMPUAN</option>
                                          </select>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Tahun Masuk:</label>
                                          <div class="col-lg-7"><input type="text" name="thnmasuk" id="yearpicker" class="form-control" placeholder="Masukkan Tahun Masuk" required></div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Tempat Lahir:</label>
                                          <div class="col-lg-7"><input type="text" name="tempatlahir" class="form-control" placeholder="Masukkan Tempat Lahir" required></div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Tanggal Lahir:</label>
                                          <div class="col-lg-7"><input type="text" name="tgllahir" id="datepicker" class="form-control" placeholder="Masukkan Tanggal Lahir" required></div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Status Kuliah Mhs. :</label>
                                          <div class="col-lg-7"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">AKTIF</option>
                                              <option value="2">CUTI/TERMINAL</option>
                                              <option value="3">DROP OUT/PUTUS STUDI</option>
                                              <option value="4">KELUAR</option>
                                              <option value="5">LULUS</option>
                                              <option value="6">NON-AKTIF</option>
                                              <option value="7">PINDAH JURUSAN</option>
                                          </select>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Status Identitas Klasifikasi:</label>
                                          <div class="col-lg-7"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1"> </option>
                                          </select>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Status Mhs Baru/Pindahan:</label>
                                          <div class="col-lg-7"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">BARU</option>
                                              <option value="2">PINDAHAN/PROGRAM STUDI</option>
                                              <option value="3">BELUM DIKETAHUI</option>
                                              <option value=""></option>
                                          </select>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Masa Studi:</label>
                                          <div class="col-lg-7">
                                          <div class="input-group">
                                              <input type="number" min="0" name="mulaistudi" class="form-control" required>
                                             <span class="input-group-addon">/</span>
                                              <input type="number" min="0" name="batasstudi" class="form-control" required>
                                          </div>
                                          <div class="col-xs-12">
                                            <small>Tahun Ajaran Mulai Studi / Batas Studi (Cth: 20061 -> 2006/Ganjil , 20062 -> 2006/Genap)</small>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Tanggal Masuk:</label>
                                          <div class="col-lg-7"><input type="text" name="tglmasuk" id="datepicker2" class="form-control" placeholder="Masukkan Tanggal Masuk" required></div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-lg-3 control-label">Tanggal Lulus:</label>
                                          <div class="col-lg-7"><input type="text" name="tgllulus" id="datepicker3" class="form-control" placeholder="Masukkan Tanggal Lulus" required></div>
                                      </div>
                                </div>
                                <div class="col-lg-4 col-md-pull-2">
                                  <div class="form-group">
                                    <label class="col-lg-5 control-label">Foto:</label>
                                      <div class="col-lg-7">
                                        <center>
                                        <img class="crop" src="<?php echo base_url()."assets" ?>/img/profile3x4.jpg" alt="foto_profil"><br>
                                        <!-- <input type="file" name="foto" class="form-control" required> --><br>
                                        <label title="Upload image file" for="inputImage" class="btn btn-sm btn-primary" style="color:white !important;margin-left:34px !important;">
                                          <input type="file" accept="image/*" name="file" id="inputImage" class="hide"><i class="fa fa-camera"></i>
                                          Upload new image
                                        </label>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode Fakultas:</label>
                                      <div class="col-lg-6"><input type="number" name="kode" class="form-control" placeholder="Masukkan Kode Fakultas" value="#" required></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      <!-- </div> -->

                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-send"></i> Save</button>
                  <button type="button" class="btn btn-w-m btn-warning" name="button" onclick="goBack()"><i class="fa fa-mail-reply"></i> Kembali</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>
