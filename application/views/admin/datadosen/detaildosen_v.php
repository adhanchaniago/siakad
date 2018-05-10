<link href="<?php echo base_url()."assets" ?>/css/tabs_style.css" rel="stylesheet">
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Detail Dosen</h2>
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
                <form id="form" class="form-horizontal">
                      <h2>Form</h2>
                      <div class="hr-line-dashed"></div>
                      <div class="tabs-container">
                         <div class="nav nav-tabs2 desktop">
                             <div class="btn-group " data-toggle="buttons">
                                <button class="btn btn-primary active" data-toggle="tab" href="#tab-1"> <input type="radio" name="options" id="option1" autocomplete="off"> Data Induk</button>
                                <button class="btn btn-primary" data-toggle="tab" href="#tab-2"> <input class="desktop" type="radio" name="options" id="option2" autocomplete="off"> Data Pribadi</button>
                                <button class="btn btn-primary" data-toggle="tab" href="#tab-3"> <input class="desktop" type="radio" name="options" id="option3" autocomplete="off"> SK Pengangkatan</button>
                                <button class="btn btn-primary" data-toggle="tab" href="#tab-4"> <input class="desktop" type="radio" name="options" id="option4" autocomplete="off"> Skill Kebutuhan Khusus DLL</button>
                             </div>
                             <!-- <li class="active"><a class="btn btn-primary" data-toggle="tab" href="#tab-1"> Data Induk</a></li> -->
                          <!-- <li class=""> <a class="btn btn-primary" data-toggle="tab" href="#tab-2"> Data Pribadi</a></li> -->
                          </div>
                          <div class="nav nav-tabs phone">
                            <div class="btn-group " data-toggle="buttons">
                            <button class="btn btn-primary btn-block active" data-toggle="tab" href="#tab-1"> <input type="radio" name="options" id="option1" autocomplete="off"> Data Induk</button>
                            <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-2"> <input class="desktop" type="radio" name="options" id="option2" autocomplete="off"> Data Pribadi</button>
                            <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-3"> <input class="desktop" type="radio" name="options" id="option3" autocomplete="off"> SK Pengangkatan</button>
                            <button class="btn btn-primary btn-block" data-toggle="tab" href="#tab-4"> <input class="desktop" type="radio" name="options" id="option4" autocomplete="off"> Skill Kebutuhan Khusus DLL</button>
                            </div>
                          </div>
                             <br>
                             <div class="tab-content">
                                 <div id="tab-1" class="tab-pane active">
                                     <div class="panel-body">
                                       <h4>Data Akademik</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">No. Induk:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="nip" class="form-control" required></div>
                                         </div>
                                     <div class="form-group">
                                       <label class="col-lg-2 control-label">NIP PNS:</label>
                                         <div class="col-lg-6"><input value='#' type="number" min="0" name="nip" class="form-control" required></div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">NIDN:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="nip" class="form-control" required></div>
                                         </div>
                                     <div class="form-group">
                                       <label class="col-lg-2 control-label">Nama Dosen:</label>
                                         <div class="col-lg-6"><input value='#' type="text" name="nama" class="form-control" required></div>
                                       </div>
                                     <div class="form-group">
                                       <label class="col-lg-2 control-label">Gelar Dosen:</label>
                                         <div class="col-lg-6"><input value='#' type="text" name="nama" class="form-control" required>
                                           <small> <p>Singkatan dan pisahkan koma untuk gelar lebih dari 1 terurut dari gelar depan pisah koma gelar belakang dst...</p> </small>
                                         </div>
                                       </div><br>
                                      <h4>Data Akademik Terkini</h4>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">HomeBase Jen. :</label>
                                          <div class="col-lg-6"><select class="form-control" required>
                                            <option value="0" selected disabled>-Pilih-</option>
                                            <option value="1">S3</option>
                                            <option value="2">S2</option>
                                            <option value="3">S1</option>
                                            <option value="4">D3</option>
                                          </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">HomeBase P.S :</label>
                                            <div class="col-lg-6"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">BIMBINGAN DAN PENYULUHAN ISLAM</option>
                                              <option value="2">KOMUNIKASI DAN PENYIARAN ISLAM</option>
                                              <option value="3">MANAJEMEN DAKWAH</option>
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-lg-2 control-label">Status Aktif :</label>
                                              <div class="col-lg-6"><select class="form-control" required>
                                                <option value="0" selected disabled>-Pilih-</option>
                                                <option value="1">AKTIF MENGAJAR</option>
                                                <option value="2">CUTI</option>
                                                <option value="3">KELUAR</option>
                                                <option value="4">AKMARHUM</option>
                                                <option value="5">PENSIUN</option>
                                                <option value="6">STUDI LANJUT</option>
                                                <option value="7">TUGAS DI INSTANSI LAIN</option>
                                              </select>
                                              </div>
                                            </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Akta Mengajar :</label>
                                          <div class="col-lg-6"><select class="form-control" required>
                                            <option value="0" selected disabled>-Pilih-</option>
                                            <option value="1">YA</option>
                                            <option value="2">TIDAK</option>
                                          </select>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Ijin Mengajar :</label>
                                          <div class="col-lg-6"><select class="form-control" required>
                                            <option value="0" selected disabled>-Pilih-</option>
                                            <option value="1">YA</option>
                                            <option value="2">TIDAK</option>
                                          </select>
                                          </div>
                                        </div><br>
                                        <h4>Data Riwayat Akademik Terakhir</h4>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Pend. Tertinggi :</label>
                                          <div class="col-lg-6"><select class="form-control" required>
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
                                          </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Pangkat Gol. PNS :</label>
                                            <div class="col-lg-6"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">IV/E - PEMBINA UTAMA</option>
                                              <option value="2">IV/D - PEMBINA UTAMA MADYA</option>
                                              <option value="3">IV/C - PEMBINA UTAMA MUDA</option>
                                              <option value="4">IV/B - PEMBINA TINGKAT I</option>
                                              <option value="5">IV/A - PEMBINA</option>
                                              <option value="6">III/D - PENATA TINGKAT I</option>
                                              <option value="7">III/C - PENATA</option>
                                              <option value="8">III/B - PENATA MUDA TINGKAT I</option>
                                              <option value="9">II/D - PENGATUR TINGKAT I</option>
                                              <option value="10">II/C - PENGATUR</option>
                                              <option value="11">II/B - PENGATUR MUDA TINGKAT I</option>
                                              <option value="12">II/A - PENGATUR MUDA</option>
                                              <option value="13">I/D - JURU TINGKAT I</option>
                                              <option value="14">I/C - JURU</option>
                                              <option value="15">I/B - JURU MUDA TINGKAT I</option>
                                              <option value="16">I/A - JURU MUDA</option>
                                            </select>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-lg-2 control-label">Jabatan Akademik :</label>
                                              <div class="col-lg-6"><select class="form-control" required>
                                                <option value="0" selected disabled>-Pilih-</option>
                                                <option value="1">TENAGA PENGAJAR</option>
                                                <option value="2">ASISTEN AHLI</option>
                                                <option value="3">LEKTOR</option>
                                                <option value="4">LEKTOR KEPALA</option>
                                                <option value="5">GURU BESAR</option>
                                              </select>
                                              </div>
                                            </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Unit Kerja :</label>
                                            <div class="col-lg-6"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">BAGIAN AKADEMIK</option>
                                              <option value="2">SISTEM INFORMASI</option>
                                            </select>
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">Ikatan Kerja :</label>
                                            <div class="col-lg-6"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">DOSEN TETAP PNS</option>
                                              <option value="2">DOSEN TETAP PNS DPK</option>
                                              <option value="3">DOSEN TETAP NON PNS</option>
                                              <option value="4">DOSEN HONORER</option>
                                              <option value="5">DOSEN KONTRAK</option>
                                              <option value="6">TIM DOSEN / UPT</option>
                                            </select>
                                            </div>
                                          </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Mulai Semester Keluar:</label>
                                          <div class="col-lg-6"><input value='#' type="text" name="nama" class="form-control" required>
                                            <small> <p>Hanya diisi untuk dosen yang Keluar/Pensiun/Almarhum !Cth: 20061:2006/Ganjil, 20062:2006/Genap.</p> </small>
                                          </div>
                                        </div><br>
                                        <h4>Data dari Instansi Induk Awal</h4>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Kode PTI:</label>
                                          <div class="col-lg-6"><input value='#' type="text" name="nama" class="form-control" required>
                                            <small> <p>Bila dari internal dikosongi saja, Bila bukan dari Perguruan Tinggi, pilih 888888</p> </small>
                                          </div>
                                        </div>
                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">HomeBase Jen. :</label>
                                          <div class="col-lg-6"><select class="form-control" required>
                                            <option value="0" selected disabled>-Pilih-</option>
                                            <option value="1">S3</option>
                                            <option value="2">S2</option>
                                            <option value="3">S1</option>
                                            <option value="4">D3</option>
                                          </select>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-lg-2 control-label">HomeBase P.S :</label>
                                            <div class="col-lg-6"><select class="form-control" required>
                                              <option value="0" selected disabled>-Pilih-</option>
                                              <option value="1">BIMBINGAN DAN PENYULUHAN ISLAM</option>
                                              <option value="2">KOMUNIKASI DAN PENYIARAN ISLAM</option>
                                              <option value="3">MANAJEMEN DAKWAH</option>
                                            </select>
                                            </div>
                                          </div>
                                     </div>
                                 </div>
                                 <div id="tab-2" class="tab-pane">
                                     <div class="panel-body">
                                       <h4>Data Pribadi</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">No. KTP:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="ktp" class="form-control" required></div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">NPWP:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="npwp" class="form-control" required></div>
                                         </div>
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
                                         <label class="col-lg-2 control-label">Tempat Lahir:</label>
                                           <div class="col-lg-6"><input value='#' type="text" min="0" name="ktp" class="form-control" required></div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Tanggal Lahir:</label>
                                           <div class="col-lg-6"><input value='#' type="text" name="tgl" id="datepicker" class="form-control" required></div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Jenis Kelamin:</label>
                                           <div class="col-lg-6"><select class="form-control" required>
                                             <option value="0" selected disabled>-Pilih-</option>
                                             <option value="1">LAKI-LAKI</option>
                                             <option value="2">PEREMPUAN</option>
                                           </select>
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
                                         <label class="col-lg-2 control-label">Email:</label>
                                           <div class="col-lg-6"><input type="Email" name="email" class="form-control" required></div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">No. Telepon:</label>
                                           <div class="col-lg-6"><input value='0' type="number" min="0" name="telp" class="form-control" required></div>
                                       </div><br>
                                       <h4>Data Keluarga</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Nama Ibu Kandung:</label>
                                           <div class="col-lg-6"><input value='#' type="text" name="namaibu" class="form-control" required></div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Status Perkawinan:</label>
                                           <div class="col-lg-6"><select class="form-control" required>
                                             <option value="0" selected disabled>-Pilih-</option>
                                             <option value="1">Menikah</option>
                                             <option value="2">Belum Menikah</option>
                                             <option value="3">Janda/Duda</option>
                                           </select>
                                           </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Nama Suami/Istri:</label>
                                           <div class="col-lg-6"><input value='#' type="text" name="namasuis" class="form-control" required></div>
                                       </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Pekerjaan Suami/Istri:</label>
                                         <div class="col-lg-6"><select class="form-control" required>
                                           <option value="0" selected disabled>-Pilih-</option>
                                           <option value="1">BURUH</option>
                                           <option value="2">DAGANG</option>
                                           <option value="3">NELAYAN</option>
                                           <option value="4">WIRAUSAHA/PENGUSAHA</option>
                                           <option value="5">PNS NON-GURU</option>
                                           <option value="6">TNI/POLRI</option>
                                           <option value="7">PNS GURU/DOSEN</option>
                                           <option value="8">GURU/DOSEN NON-PNS</option>
                                           <option value="9">KARYAWAN SWASTA</option>
                                           <option value="10">PETANI</option>
                                           <option value="11">LAINNYA</option>
                                         </select></div>
                                       </div><br>
                                       <h4>Kepegawaian</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Status:</label>
                                           <div class="col-lg-6"><select id="pns" class="form-control" required>
                                             <option value="0" selected disabled>-Pilih-</option>
                                             <option value="1">PNS</option>
                                             <option value="2">NON-PNS</option>
                                           </select></div>
                                         </div>
                                        <div id="inputpns" class="hidden">
                                           <div class="form-group">
                                             <label class="col-lg-2 control-label">NIP:</label>
                                               <div class="col-lg-6"><input value='0' type="number" min="0" name="pns" class="form-control" required></div>
                                           </div>
                                           <div class="form-group">
                                             <label class="col-lg-2 control-label">Tgl. TMT SK PNS:</label>
                                               <div class="col-lg-6"><input value='#' type="text" name="tgl" id="datepicker2" class="form-control" required></div>
                                           </div>
                                       </div>
                                     </div>
                                 </div>
                                 <div id="tab-3" class="tab-pane">
                                     <div class="panel-body">
                                       <h4>SK Pengangkatan Bagi PNS</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">No. SK:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="nosk" class="form-control" required></div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Tgl. Keluar SK:</label>
                                           <div class="col-lg-6"><input type="text" min="0" name="tgl" id="datepicker3" class="form-control" required></div>
                                         </div><br>
                                       <h4>SK Pengangkatan Bagi NON-PNS</h4>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">No. SK:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="nosk2" class="form-control" required></div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Tgl. Keluar SK:</label>
                                           <div class="col-lg-6"><input type="text" min="0" name="tgl" id="datepicker4" class="form-control" required></div>
                                         </div>
                                     </div>
                                 </div>
                                 <div id="tab-4" class="tab-pane">
                                     <div class="panel-body">
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">NIK Asesor:</label>
                                           <div class="col-lg-6"><input value='#' type="number" min="0" name="nikas" class="form-control"><small>(Jika Jadi Asesor)</small> </div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Kemampuan Handle Kebutuhan Khusus:</label>
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
                                         <label class="col-lg-2 control-label">Mampu Baca Braile:</label>
                                           <div class="col-lg-6"><select class="form-control">
                                             <option value="0" selected disabled>-Pilih-</option>
                                             <option value="1">YA</option>
                                             <option value="2">TIDAK</option>
                                           </select> </div>
                                         </div>
                                       <div class="form-group">
                                         <label class="col-lg-2 control-label">Mampu Bahasa Isyarat:</label>
                                           <div class="col-lg-6"><select class="form-control">
                                             <option value="0" selected disabled>-Pilih-</option>
                                             <option value="1">YA</option>
                                             <option value="2">TIDAK</option>
                                           </select> </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                <br >
                <center>
                  <button type="button" class="btn btn-w-m btn-danger" name="button" onClick="history.go(-1); return false;"><i class="fa fa-arrow-left"></i> Kembali</button>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

<script type="text/javascript">
    pns=0;
    $('#pns').change(function(){
    pns = $('#pns').val();
    if(pns=='1'){
      $('#inputpns').removeClass('hidden');
    }
    else{
      $('#inputpns').addClass('hidden');
    }
    });
</script>
