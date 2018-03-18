
<!-- Chosen -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/chosen/chosen.jquery.js"></script>

  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Akun Pegawai</h2>
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
                        <a class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover datatabelakun" >
                        <thead>
                        <tr>
                          <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td width="5%">1</td>
                            <td>123456789</td>
                            <td>Abdul</td>
                            <td>abdul@gmail.com</td>
                            <td>0819291919</td>
                            <td>abdulabdul</td>
                            <td><p><span class="label label-primary">Dosen</span></p></td>
                            <td width="10%">
                              <center>
                                <a class='btn btn-warning btn-xs' title='Edit Akun' data-toggle="modal" data-target="#editModal"><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Hapus Akun'><span class='glyphicon glyphicon-remove'></span></a>
                              </center>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>

            <div class="modal inmodal fade" id="addModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Tambah Akun Pegawai Baru</h4>
                        </div>
                        <form>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="nip" class="form-control" placeholder="Masukkan NIP Pegawai" required>
                          </div>
                          <div class="form-group">
                            <label for="nip">Nama: <span style="color:red;">*</span></label>
                            <input type="text" name="..." class="form-control" placeholder="Masukkan Nama Pegawai" required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email: <span style="color:red;">*</span></label>
                            <input type="email" name="..." class="form-control" placeholder="Masukkan Email Pegawai" required>
                          </div>
                          <div class="form-group">
                            <label for="nip">No. Kontak: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="..." class="form-control" placeholder="Masukkan Nomor Kontak Pegawai" required>
                          </div>
                          <div class="form-group">
                            <label>Pilih Role Pengguna</label>
                            <div>
                            <select data-placeholder="Tidak ada role..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="" disabled>Select</option>
                            <option value="" selected>Dosen</option>
                            <option value="">Dekan</option>
                            <option value="">Admin Fakultas</option>
                            <option value="">Ketua Program Studi</option>
                            <option value="">Rektor</option>
                            </select>
                            </div>
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

            <div class="modal inmodal fade" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Edit Akun Pegawai</h4>
                        </div>
                        <form>
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="nip" class="form-control" value="0" required>
                          </div>
                          <div class="form-group">
                            <label for="nip">Nama: <span style="color:red;">*</span></label>
                            <input type="text" name="..." class="form-control" value="..." required>
                          </div>
                          <div class="form-group">
                            <label for="email">Email: <span style="color:red;">*</span></label>
                            <input type="email" name="..." class="form-control" value="..." required>
                          </div>
                          <div class="form-group">
                            <label for="nip">No. Kontak: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="..." class="form-control" value="0" required>
                          </div>
                          <div class="form-group">
                            <label>Pilih Role Pengguna</label>
                            <div>
                            <select data-placeholder="Tidak ada role..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="" disabled>Select</option>
                            <option value="" selected>Dosen</option>
                            <option value="">Dekan</option>
                            <option value="">Admin Fakultas</option>
                            <option value="">Ketua Program Studi</option>
                            <option value="">Rektor</option>
                            </select>
                            </div>
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
        $('.chosen-select').chosen({width: "100%"});
      </script>

      <script type="text/javascript">
      $(document).ready(function(){
            $('.datatabelakun').DataTable({
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
