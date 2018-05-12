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
                                  <h4>Bagi Mahasiswa Pindahan, isilah data berikut</h4>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">NIM Asal:</label>
                                      <div class="col-lg-6"><input type="number" name="nim_asal" class="form-control" placeholder="Masukkan NIM Asal" required></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode P.T. Asal:</label>
                                      <div class="col-lg-6"><input type="text" name="kodept_asal" class="form-control" placeholder="Masukkan Kode Perguruan Tinggi Asal" required></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Pindahan Dari Asing:</label>
                                      <div class="col-lg-6"><select id="pindahan" class="form-control" required>
                                        <option value="0" selected disabled>-Pilih-</option>
                                        <option value="1">YA</option>
                                        <option value="2">TIDAK</option>
                                      </select>
                                      </div>
                                    </div><br>
                                    <div id="pilih1" class="hidden">
                                      <h4>Mahasiswa Pindahan Asing</h4>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Nama P.T. Asal:</label>
                                          <div class="col-lg-6"><input type="text" name="namapt_asal" class="form-control" placeholder="Masukkan Nama Perguruan Tinggi Asal" required></div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Nama Prodi Asal:</label>
                                          <div class="col-lg-6"><input type="text" name="namaprodi_asal" class="form-control" placeholder="Masukkan Nama Program Studi Asal" required></div>
                                        </div>
                                    </div>

                                    <div id="pilih2" class="hidden">
                                      <h4>Mahasiswa Pindahan Dalam Negeri</h4>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Kode Jenjang Asal:</label>
                                          <div class="col-lg-6"><select name="kodejenjang_asal" class="form-control" required>
                                            <option value="0" selected disabled>-Pilih-</option>
                                            <option value="1">S3</option>
                                            <option value="2">S2</option>
                                            <option value="3">S1</option>
                                            <option value="4">SP-1</option>
                                            <option value="5">SP-2</option>
                                            <option value="6">D4</option>
                                            <option value="7">D3</option>
                                            <option value="8">D2</option>
                                            <option value="9">D1</option>
                                            <option value="10">PROFESI</option>
                                            <option value="11">NON-AKADEMIK</option>
                                          </select></div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Kode Prodi Asal:</label>
                                          <div class="col-lg-6"><input type="text" name="namaprodi_asal" class="form-control" placeholder="Masukkan Nama Program Studi Asal" required></div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">SKS Diakui:</label>
                                          <div class="col-lg-6"><input type="number" min="0" name="sksdiakui" class="form-control" placeholder="Masukkan Jumlah SKS yang Diakui/Disetarakan" required></div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane">
                              <div class="panel-body">
                                <h4>Data NO. Registrasi Pendaftaran Calon Mahasiswa</h4>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. Registrasi Pendaftaran:</label>
                                    <div class="col-lg-6"><input type="number" name="no_regist" class="form-control" value="000000000" required></div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. NISN:</label>
                                    <div class="col-lg-6"><input type="number" name="no_nisn" class="form-control" value="000000000" required></div>
                                  </div>
                              </div>
                            </div>
                            <div id="tab-4" class="tab-pane">
                              <div class="panel-body">
                                <h4>Data Pribadi Mahasiswa</h4>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Agama:</label>
                                    <div class="col-lg-6"><select class="form-control" required>
                                      <option value="0" selected disabled>-Pilih-</option>
                                      <option value="1">BUDHA</option>
                                      <option value="2">HINDU</option>
                                      <option value="3">ISLAM</option>
                                      <option value="4">KATOLIK</option>
                                      <option value="5">PROTESTAN</option>
                                      <option value="6">LAIN-LAIN</option>
                                    </select>
                                    </div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. KTP:</label>
                                    <div class="col-lg-6"><input type="number" name="no_ktp" class="form-control" placeholder="Masukkan Nomor KTP" required></div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">NIK KK:</label>
                                    <div class="col-lg-6"><input type="number" name="nik_kk" class="form-control" placeholder="Masukkan NIK KK" required></div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. KPS:</label>
                                    <div class="col-lg-6"><input type="number" name="no_kps" class="form-control" placeholder="Masukkan Nomor KPS" >
                                      <small>Nomor Kartu Perlindungan Sosial (Opsional)</small>
                                    </div>
                                  </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Alamat:</label>
                                    <div class="col-lg-6">
                                      <label><small>Provinsi</small></label><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih Provinsi-</option>
                                        <option value="1">JAWA BARAT</option>
                                      </select><br>
                                       <label><small>Kabupaten/Kota</small></label><select class="form-control" required>
                                         <option value="0" selected disabled>-Pilih Kabupaten/Kota-</option>
                                         <option value="1">BANDUNG KABUPATEN</option>
                                       </select><br>
                                      <label><small>Desa/Kelurahan & Kecamatan</small></label><input value='#' type="text" name="desa" class="form-control" required><br>
                                       <label><small>Jalan & Nomor</small></label><input value='#' type="text" name="jalan" class="form-control" required>
                                    </div>
                                </div>
                              <div class="form-group">
                                <label class="col-lg-2 control-label">Kode POS:</label>
                                  <div class="col-lg-6"><input value='#' type="number" min="0" name="pos" class="form-control" required></div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Kewarganegaraan:</label>
                                    <div class="col-lg-6"><select class="form-control" required>
                                      <option value="0" selected disabled>-Pilih-</option>
                                      <option value="1">WNI</option>
                                      <option value="2">WNA</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. Telepon:</label>
                                    <div class="col-lg-6"><input value='0' type="number" min="0" name="telp" class="form-control" required></div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Email:</label>
                                    <div class="col-lg-6"><input type="Email" name="email" class="form-control" placeholder="Masukkan Email" required></div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Tinggi Badan (Cm):</label>
                                    <div class="col-lg-6"><input value='0' type="number" min="0" name="tinggi_badan" class="form-control" required></div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Berat Badan (Kg):</label>
                                    <div class="col-lg-6"><input value='0' type="number" min="0" name="berat_badan" class="form-control" required></div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Gol. Darah:</label>
                                    <div class="col-lg-6"><select class="form-control" required>
                                      <option value="0" selected disabled>-Pilih-</option>
                                      <option value="1">A</option>
                                      <option value="2">B</option>
                                      <option value="3">AB</option>
                                      <option value="4">O</option>
                                    </select>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div id="tab-5" class="tab-pane">
                              <div class="panel-body">
                                <h4>Data Orang Tua / Wali</h4>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Nama Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Nama Ayah</small></label><input value='#' type="text" name="nama_ayah" class="form-control" required><br>
                                       <label><small>Nama Ibu</small></label><input value='#' type="text" name="nama_ibu" class="form-control" required><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Tgl Lahir Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Tgl Lahir Ayah</small></label><input value='#' id="datepicker4" type="text" name="tgl_ayah" class="form-control" required><br>
                                       <label><small>Tgl Lahir Ibu</small></label><input value='#' id="datepicker5" type="text" name="tgl_ibu" class="form-control" required><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Pekerjaan Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Pekerjaan Ayah</small></label><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih-</option>
                                        <option value="1">BURUH</option>
                                        <option value="2">PEDAGANG</option>
                                        <option value="3">NELAYAN</option>
                                        <option value="4">PENGUSAHA/WIRAUSAHA</option>
                                        <option value="5">PNS NON-GURU</option>
                                        <option value="6">TNI/POLRI</option>
                                        <option value="7">PNS GURU/DOSEN</option>
                                        <option value="8">KARYAWAN SWASTA</option>
                                        <option value="9">PETANI</option>
                                        <option value="10">LAINNYA</option>
                                      </select><br>
                                       <label><small>Pekerjaan Ibu</small></label><select class="form-control" required>
                                         <option value="0" selected disabled>-Pilih-</option>
                                         <option value="1">BURUH</option>
                                         <option value="2">PEDAGANG</option>
                                         <option value="3">NELAYAN</option>
                                         <option value="4">PENGUSAHA/WIRAUSAHA</option>
                                         <option value="5">PNS NON-GURU</option>
                                         <option value="6">TNI/POLRI</option>
                                         <option value="7">PNS GURU/DOSEN</option>
                                         <option value="8">KARYAWAN SWASTA</option>
                                         <option value="9">PETANI</option>
                                         <option value="10">LAINNYA</option>
                                       </select><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Pendidikan Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Pendidikan Ayah</small></label><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih-</option>
                                        <option value="1">=&lt;SMA</option>
                                        <option value="2">DIPLOMA</option>
                                        <option value="3">S1</option>
                                        <option value="4">S2</option>
                                        <option value="5">S3</option>
                                      </select><br>
                                       <label><small>Pendidikan Ibu</small></label><select class="form-control" required>
                                         <option value="0" selected disabled>-Pilih-</option>
                                         <option value="1">=&lt;SMA</option>
                                         <option value="2">DIPLOMA</option>
                                         <option value="3">S1</option>
                                         <option value="4">S2</option>
                                         <option value="5">S3</option>
                                       </select><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Penghasilan Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Penghasilan Ayah</small></label><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih-</option>
                                        <option value="1">&lt;1.000.000</option>
                                        <option value="2">1.000.001&lt;2.000.000</option>
                                        <option value="3">2.000.001&lt;4.000.000</option>
                                        <option value="4">4.000.001&lt;6.000.000</option>
                                        <option value="5">6.000.000&lt;</option>
                                      </select><br>
                                       <label><small>Penghasilan Ibu</small></label><select class="form-control" required>
                                         <option value="0" selected disabled>-Pilih-</option>
                                         <option value="1">=&lt;SMA</option>
                                         <option value="2">DIPLOMA</option>
                                         <option value="3">S1</option>
                                         <option value="4">S2</option>
                                         <option value="5">S3</option>
                                       </select><br>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">Alamat Ortu/Wali:</label>
                                    <div class="col-lg-6">
                                      <label><small>Provinsi</small></label><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih Provinsi-</option>
                                        <option value="1">JAWA BARAT</option>
                                      </select><br>
                                       <label><small>Kabupaten/Kota</small></label><select class="form-control" required>
                                         <option value="0" selected disabled>-Pilih Kabupaten/Kota-</option>
                                         <option value="1">BANDUNG KABUPATEN</option>
                                       </select><br>
                                      <label><small>Desa/Kelurahan & Kecamatan</small></label><input value='#' type="text" name="desa" class="form-control" required><br>
                                       <label><small>Jalan & Nomor</small></label><input value='#' type="text" name="jalan" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label class="col-lg-2 control-label">No. Telepon:</label>
                                    <div class="col-lg-6"><input value='0' type="number" min="0" name="telp" class="form-control" required></div>
                                </div>
                              </div>
                            </div>
                            <div id="tab-6" class="tab-pane">
                                <div class="panel-body">
                                  <h4>Data Pendidikan</h4>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Kelas:</label>
                                      <div class="col-lg-6"><input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" required></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Jurusan:</label>
                                      <div class="col-lg-6"><select class="form-control" required>
                                        <option value="0" selected disabled>-Pilih-</option>
                                        <option value="1">IPA</option>
                                        <option value="2">IPS</option>
                                        <option value="3">BAHASA</option>
                                        <option value="4">KEAGAMAAN</option>
                                        <option value="5">LAINNYA</option>
                                      </select></div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Pend. Terakhir:</label>
                                        <div class="col-lg-6"><select class="form-control" required>
                                          <option value="0" selected disabled>-Pilih-</option>
                                          <option value="1">SMU</option>
                                          <option value="2">SMK</option>
                                          <option value="3">MA/MAN</option>
                                          <option value="4">LAIN-LAIN</option>
                                        </select></div>
                                      </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Nilai Ujian Akhir (UNAS):</label>
                                      <div class="col-lg-6"><input type="number" min="0" name="unas" class="form-control" placeholder="0" required></div>
                                    </div><br>
                                  <h4>Data Sekolah</h4>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama Sekolah:</label>
                                      <div class="col-lg-6"><input type="text" name="nama_sekolah" class="form-control" placeholder="Masukkan Nama Sekolah" required></div>
                                    </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Alamat Sekolah:</label>
                                      <div class="col-lg-6">
                                        <label><small>Provinsi</small></label><select class="form-control" required>
                                          <option value="0" selected disabled>-Pilih Provinsi-</option>
                                          <option value="1">JAWA BARAT</option>
                                        </select><br>
                                         <label><small>Kabupaten/Kota</small></label><select class="form-control" required>
                                           <option value="0" selected disabled>-Pilih Kabupaten/Kota-</option>
                                           <option value="1">BANDUNG KABUPATEN</option>
                                         </select><br>
                                        <label><small>Desa/Kelurahan & Kecamatan</small></label><input value='#' type="text" name="desa" class="form-control" required><br>
                                         <label><small>Jalan & Nomor</small></label><input value='#' type="text" name="jalan" class="form-control" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Kode POS:</label>
                                      <div class="col-lg-6"><input type="number" min="0" name="pos" class="form-control" placeholder="0" required></div>
                                    </div>
                                </div>
                              </div>
                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                  <h4>Kebutuhan Khusus</h4>
                                  <div class="form-group">
                                    <label class="col-lg-2 control-label">Mahasiswa:</label>
                                      <div class="col-lg-6"><select class="form-control" multiple="">
                                        <option value="1">INDIGO</option>
                                        <option value="2">NARKOBA</option>
                                        <option value="3">KESULITAN BELAJAR</option>
                                        <option value="4">BAKAT ISTIMEWA</option>
                                        <option value="5">CERDAS ISTIMEWA</option>
                                        <option value="6">HIPERAKTIF</option>
                                        <option value="7">TUNA WICARA</option>
                                        <option value="8">TUNA LARAS</option>
                                        <option value="9">TUNA DAKSA SEDANG</option>
                                        <option value="10">TUNA DAKSA RINGAN</option>
                                        <option value="11">TUNA GRAHITA RINGAN</option>
                                        <option value="12">TUNA GRAHITA</option>
                                        <option value="13">TUNA RUNGU</option>
                                        <option value="14">DOWN SYNDROME</option>
                                        <option value="15">AUTIS</option>
                                         <option value="16">TUNA NETRA</option>
                                      </select>
                                      <small><p>bisa pilih lebih dari 1</p> </small>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Ayah:</label>
                                        <div class="col-lg-6"><select class="form-control" multiple="">
                                          <option value="1">INDIGO</option>
                                          <option value="2">NARKOBA</option>
                                          <option value="3">KESULITAN BELAJAR</option>
                                          <option value="4">BAKAT ISTIMEWA</option>
                                          <option value="5">CERDAS ISTIMEWA</option>
                                          <option value="6">HIPERAKTIF</option>
                                          <option value="7">TUNA WICARA</option>
                                          <option value="8">TUNA LARAS</option>
                                          <option value="9">TUNA DAKSA SEDANG</option>
                                          <option value="10">TUNA DAKSA RINGAN</option>
                                          <option value="11">TUNA GRAHITA RINGAN</option>
                                          <option value="12">TUNA GRAHITA</option>
                                          <option value="13">TUNA RUNGU</option>
                                          <option value="14">DOWN SYNDROME</option>
                                          <option value="15">AUTIS</option>
                                           <option value="16">TUNA NETRA</option>
                                        </select>
                                        <small><p>bisa pilih lebih dari 1</p> </small>
                                        </div>
                                      </div>
                                    <div class="form-group">
                                      <label class="col-lg-2 control-label">Ibu:</label>
                                        <div class="col-lg-6"><select class="form-control" multiple="">
                                          <option value="1">INDIGO</option>
                                          <option value="2">NARKOBA</option>
                                          <option value="3">KESULITAN BELAJAR</option>
                                          <option value="4">BAKAT ISTIMEWA</option>
                                          <option value="5">CERDAS ISTIMEWA</option>
                                          <option value="6">HIPERAKTIF</option>
                                          <option value="7">TUNA WICARA</option>
                                          <option value="8">TUNA LARAS</option>
                                          <option value="9">TUNA DAKSA SEDANG</option>
                                          <option value="10">TUNA DAKSA RINGAN</option>
                                          <option value="11">TUNA GRAHITA RINGAN</option>
                                          <option value="12">TUNA GRAHITA</option>
                                          <option value="13">TUNA RUNGU</option>
                                          <option value="14">DOWN SYNDROME</option>
                                          <option value="15">AUTIS</option>
                                           <option value="16">TUNA NETRA</option>
                                        </select>
                                        <small><p>bisa pilih lebih dari 1</p> </small>
                                        </div>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                      <!-- </div> -->

                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
                  <button type="button" class="btn btn-w-m btn-danger" name="button" onClick="history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Kembali</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

<script type="text/javascript">
    pindahan=0;
    $('#pindahan').change(function(){
    pindahan = $('#pindahan').val();
    if(pindahan=='1'){
      $('#pilih1').removeClass('hidden');
      $('#pilih2').addClass('hidden');
    }
    else{
      $('#pilih1').addClass('hidden');
      $('#pilih2').removeClass('hidden');
    }
    });
</script>
