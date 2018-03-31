
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Mahasiswa</h2>
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
                      <a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#addModal"><i class="fa fa-cloud-download"></i> Import</a>
                      <a href="" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#addModal"><i class="fa fa-cloud-upload"></i> Export</a>
                        <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-title">
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="control-label">Filter Prodi:</label>
                        <div><select type="text" class="form-control">
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
                        </select></div>
                      </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label class="control-label">Angkatan:</label>
                      <div>
                        <select class="form-control" name="...">
                          <option value="0">SEMUA</option>
                          <option value="1">2018</option>
                          <option value="2">2017</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatabelmhs" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>Kontak</th>
                    <th>Jurusan</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>12398</td>
                    <td>Sintia Wati</td>
                    <td>0851908198</td>
                    <td>Kedokteran</td>
                    <td>
                      <center>
                        <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a>
                        <a class='btn btn-warning btn-xs' title='Edit Data' data-toggle="modal" data-target="#editModal"><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="addModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Data Mahasiswa Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIM: <span style="color:red;">*</span></label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan NIM Mahasiswa" required>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" placeholder="Masukkan Nama Mahasiswa" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">No. Kontak:</label>
                            <input type="number" min="0" class="form-control" placeholder="Masukkan Nomor Kontak Mahasiswa">
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
            <div class="modal inmodal" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data Mahasiswa</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIM: <span style="color:red;">*</span></label>
                            <input type="number" min="0" class="form-control" value="0" required>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama: <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" value="..." required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">No. Kontak:</label>
                            <input type="number" min="0" class="form-control" value="0">
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

  <script type="text/javascript">
  $(document).ready(function(){
        $('.datatabelmhs').DataTable({
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
