
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
                        <a href="<?php echo base_url()."admin/akunpegawai/add" ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
                <div class="table-responsive">
                    <table id="mytable" class="table table-striped table-bordered table-hover datatabelakun" >
                        <thead>
                        <tr>
                          <th>No</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Kontak</th>
                            <th>Username</th>
                            <!-- <th>Role</th> -->
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- <tr class="gradeX">
                            <td width="5%">1</td>
                            <td>123456789</td>
                            <td>Abdul</td>
                            <td>abdul@gmail.com</td>
                            <td>0819291919</td>
                            <td>abdulabdul</td>
                            <td><p><span class="label label-primary">Dosen</span></p></td>
                            <td width="10%">
                              <center>
                                <a class='btn btn-success btn-xs' title='Edit Role' data-toggle="modal" data-target="#editModal"><span class='glyphicon glyphicon-user'></span></a>
                                <a href="<?php //echo base_url()."admin/akunpegawai/edit" ?>" class='btn btn-warning btn-xs' title='Edit Akun'><span class='glyphicon glyphicon-edit'></span></a>
                                <a class='btn btn-danger btn-xs' title='Hapus Akun'><span class='glyphicon glyphicon-remove'></span></a>
                              </center>
                            </td>
                        </tr> -->
                        </tbody>
                    </table>
                </div>
              </div>
            </div>

            <div class="modal inmodal fade" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="title">Edit Role Akun Pegawai</h4>
                        </div>
                        <form>
                        <div class="modal-body">
                            <div class="row">
                              <div class="col-xs-6">
                                <div class="form-group">
                                  <label>Kelas Prodi: <span style="color:red;">*</span></label>
                                  <select id="role" class="form-control">

                                  </select>
                                </div>
                              </div>
                            <div class="col-xs-1">
                              <button type="button" onclick='tambahRole()' class="btn btn-xs btn-success" style="margin-top:30px;">Tambahkan</button>
                            </div>
                        </div>
                        <div class="row">
                          <div class="table-responsive">
                          <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Role User</th>
                                <th>Hapus</th>
                              </tr>
                            </thead>
                            <tbody id="tbody">

                            </tbody>
                          </table>
                        </div>
                        </div>
                          <!-- <div class="form-group">
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
                          </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Kembali</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>

      <script type="text/javascript">
        $('.chosen-select').chosen({width: "100%"});
      </script>

      <script type="text/javascript">
      var id_pegawai;
      function editRole(id){
        id_pegawai = id;
        $.ajax({
             url : "<?php echo site_url('admin/Akunpegawai/getRole')?>",
             type: "POST",
             data: {"id_pegawai":id},
             dataType: "JSON",
             success: function(data)
             {
               if (data.status=='berhasil') {
                 console.log(data);
                 $('#editModal').modal();
                 $('#title').html("Edit Role Akun Pegawai "+data.data.pegawai.nip);
                 $('#role').html(data.data.not_selected);
                  $('#tbody').html(data.data.selected);
               }else {
                 swal("Gagal!", data.message, "error");
               }
             },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                   console.log(jqXHR);
             console.log(textStatus);
             console.log(errorThrown);
                 }
           });
      }

      function tambahRole(){
        $.ajax({
             url : "<?php echo site_url('admin/Akunpegawai/addRole')?>",
             type: "POST",
             data: {"id_pegawai":id_pegawai,"kode":$('#role').val()},
             dataType: "JSON",
             success: function(data)
             {
               console.log(data);
               if (data.status=='berhasil') {

                 swal("Berhasil!", data.message, "success");
                 $.ajax({
                      url : "<?php echo site_url('admin/Akunpegawai/getRole')?>",
                      type: "POST",
                      data: {"id_pegawai":id_pegawai},
                      dataType: "JSON",
                      success: function(data)
                      {
                        if (data.status=='berhasil') {
                          console.log(data);
                          $('#title').html("Edit Role Akun Pegawai "+data.data.pegawai.nip);
                          $('#role').html(data.data.not_selected);
                           $('#tbody').html(data.data.selected);
                        }else {
                          swal("Gagal!", data.message, "error");
                        }
                      },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                            console.log(jqXHR);
                      console.log(textStatus);
                      console.log(errorThrown);
                          }
                    });
               }else {
                 swal("Gagal!", data.message, "error");
               }
             },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                   console.log(jqXHR);
             console.log(textStatus);
             console.log(errorThrown);
                 }
           });
           return false;
      }
      function hapusRole(kode){
        swal({
                title: "Anda yakin?",
                text: "Role akan dihapus",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1ab394",
                confirmButtonText: "Ya, hapus!",
                closeOnConfirm: false
            }, function () {
        $.ajax({
             url : "<?php echo site_url('admin/Akunpegawai/deleteRole')?>",
             type: "POST",
             data: {"id_pegawai":id_pegawai,"kode":kode},
             dataType: "JSON",
             success: function(data)
             {
               console.log(data);
               if (data.status=='berhasil') {

                 swal("Berhasil!", data.message, "success");
                 $.ajax({
                      url : "<?php echo site_url('admin/Akunpegawai/getRole')?>",
                      type: "POST",
                      data: {"id_pegawai":id_pegawai},
                      dataType: "JSON",
                      success: function(data)
                      {
                        if (data.status=='berhasil') {
                          console.log(data);
                          $('#title').html("Edit Role Akun Pegawai "+data.data.pegawai.nip);
                          $('#role').html(data.data.not_selected);
                           $('#tbody').html(data.data.selected);
                        }else {
                          swal("Gagal!", data.message, "error");
                        }
                      },
                          error: function (jqXHR, textStatus, errorThrown)
                          {
                            console.log(jqXHR);
                      console.log(textStatus);
                      console.log(errorThrown);
                          }
                    });
               }else {
                 swal("Gagal!", data.message, "error");
               }
             },
                 error: function (jqXHR, textStatus, errorThrown)
                 {
                   console.log(jqXHR);
             console.log(textStatus);
             console.log(errorThrown);
                 }
           });
         });
           return false;
      }
      $(document).ready(function() {
        $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
                  {
                      return {
                          "iStart": oSettings._iDisplayStart,
                          "iEnd": oSettings.fnDisplayEnd(),
                          "iLength": oSettings._iDisplayLength,
                          "iTotal": oSettings.fnRecordsTotal(),
                          "iFilteredTotal": oSettings.fnRecordsDisplay(),
                          "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                          "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                      };
                  };

                  t = $("#mytable").dataTable({
                      initComplete: function() {
                          var api = this.api();
                          $('#mytable_filter input')
                                  .off('.DT')
                                  .on('keyup.DT', function(e) {
                                      if (e.keyCode == 13) {
                                          api.search(this.value).draw();
                              }
                          });
                      },
                      oLanguage: {
                          sProcessing: "loading..."
                      },
                      processing: true,
                      serverSide: true,
                      ajax: {"url": "<?php echo base_url("admin/Akunpegawai/json");?>", "type": "POST"},
                      "columnDefs": [
          {
              "targets": [ -1 ], //last column
              "orderable": false, //set not orderable
          },
          ],
                      columns: [
                          {
                              "data": "id",
                              "orderable": false
                          },
                          {"data": "nip"},
                          {"data": "nama"},
                          {"data": "email"},
                          {"data": "no_telp"},
                          {"data": "username"},
                          {"data": "view"}
                      ],
                      order: [[1, 'asc']],
                      rowCallback: function(row, data, iDisplayIndex) {
                          var info = this.fnPagingInfo();
                          var page = info.iPage;
                          var length = info.iLength;
                          var index = page * length + (iDisplayIndex + 1);
                          $('td:eq(0)', row).html(index);
                      }
                  });

      });

      </script>
