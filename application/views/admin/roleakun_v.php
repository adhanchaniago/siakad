
<!-- Chosen -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/chosen/chosen.jquery.js"></script>

  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Peran Pengguna</h2>
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
                        <!-- <a href="<?php echo base_url()."admin/dataprogramstudi/tambahprodi"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
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
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td width="5%">1</td>
                            <td>Abdul</td>
                            <td>abdulabdul</td>
                            <td><p><span class="label label-primary">Dosen</span></p></td>
                            <td width="10%">
                              <center>
                                <a class='btn btn-success btn-xs' title='Tambah Role' data-toggle="modal" data-target="#roleModal"><span class='glyphicon glyphicon-user'></span> Edit Role</a>
                              </center>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
              </div>
            </div>

            <div class="modal inmodal fade" id="roleModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title">Edit Role Pengguna</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-group">
                            <label class="font-normal">Pilih Role Pengguna</label>
                            <div>
                            <select data-placeholder="Tidak ada role..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                            <option value="" disabled>Select</option>
                            <option value="" selected>Dosen</option>
                            <option value="">Dosen Wali</option>
                            <option value="">Admin Fakultas</option>
                            <option value="">Dekan</option>
                            </select>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

      <script type="text/javascript">
        $('.chosen-select').chosen({width: "100%"});
      </script>
