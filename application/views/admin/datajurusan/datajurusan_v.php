
                        <div class="row wrapper border-bottom white-bg page-heading">
                            <div class="col-sm-4">
                                <h2>Data Program Studi</h2>
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
                                    <a href="<?php echo base_url()."admin/datajurusan/add"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper wrapper-content">
                          <div class="ibox-title">
                            <div class="row">
                              <div class="col-lg-4">
                                <div class="form-group">
                                  <label class="control-label">Filter Fakultas:</label>
                                    <div><select id="fakultas" class="form-control">
                                      <option value="0" selected>SEMUA</option>
                                      <?php foreach ($fakultas->result() as $row){
                                        echo "<option value='$row->id'>$row->nama</option>";
                                      }?>
                                    </select></div>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <div class="ibox-content">
                          <div class="table-responsive">
                            <table id="mytable" class="table table-striped table-bordered table-hover datatabelakun" >
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Jenjang</th>
                                <th>Program Studi</th>

                                <th>Kepala Jurusan</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            </table>
                                </div>
                            </div>
                        </div>

                        <div class="modal inmodal" id="kelasModal" tabindex="-1" role="dialog"  aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content animated fadeInDown">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Kelas Program Studi</h4>
                                        <small>Pastikan data yang diisi telah sesuai</small>
                                    </div>
                                    <div class="modal-body">
                                      <form class="form-horizontal">
                                        <div class="row">
                                          <div class="col-xs-6">
                                            <div class="form-group">
                                              <label>Kelas Prodi: <span style="color:red;">*</span></label>
                                              <select id="not_selected" type="text" class="form-control">

                                              </select>
                                            </div>
                                          </div>
                                        <div class="col-xs-1">
                                          <button type="button" class="btn btn-xs btn-success" style="margin-top:30px;" onclick="tambah()">Tambahkan</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="table-responsive">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Kelas Aktif</th>
                                            <th>Hapus</th>
                                          </tr>
                                        </thead>
                                        <tbody id="selected">

                                        </tbody>
                                      </table>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-white" onclick="$('#kelasModal').hide()">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            var id_fakultas = 0, id_jurusan;
                            $('#fakultas').change(function(){
                              id_fakultas = $(this).val();
                              loadData();
                            });
                            loadData();
                            function loadData(){
                              $('#mytable').DataTable().destroy();
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
                                          ajax: {"url": "<?php echo base_url("admin/Datajurusan/json");?>", "type": "POST","data":{

                                          "id_fakultas":id_fakultas,
                                        }},
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
                                              {"data": "kode"},
                                              {"data": "jenjang"},
                                              {"data": "nama"},
                                              {"data": "kajur"},
                                              {"data": "kelas"},
                                              {"data": "status"},
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
                          }
                          function reload_table()
                        {
                            $('#mytable').DataTable().ajax.reload(null,false); //reload datatable ajax
                        }
                        function kelas(id){
                          id_jurusan = id;
                          cek1 = false;
                          cek2 = false;
                          $.ajax({
                               url : "<?php echo site_url('admin/Datajurusan/getNotSelectedRole')?>",
                               type: "POST",
                               data: {'id_jurusan':id_jurusan},
                               dataType: "JSON",
                               success: function(data)
                               {
                                 if(data.status=='berhasil'){
                                   $('#not_selected').html(data.data);
                                   cek1 = true;
                                   if(cek2){
                                     $("#kelasModal").show();
                                   }

                                 }
                               },
                                   error: function (jqXHR, textStatus, errorThrown)
                                   {
                                     console.log(jqXHR);
                               console.log(textStatus);
                               console.log(errorThrown);
                                   }
                             });
                             $.ajax({
                                  url : "<?php echo site_url('admin/Datajurusan/getSelectedRole')?>",
                                  type: "POST",
                                  data: {'id_jurusan':id_jurusan},
                                  dataType: "JSON",
                                  success: function(data)
                                  {
                                    if(data.status=='berhasil'){
                                      $('#selected').html(data.data);
                                      cek2 = true;
                                      if(cek1){
                                        $("#kelasModal").show();
                                      }
                                    }
                                  },
                                      error: function (jqXHR, textStatus, errorThrown)
                                      {
                                        console.log(jqXHR);
                                  console.log(textStatus);
                                  console.log(errorThrown);
                                      }
                                });
                          $("#kelasModal").show();
                        }
                        function deleteRole(id_role){
                          swal({
                                  title: "Anda yakin?",
                                  text: "Kelas tersebut akan dihapus",
                                  type: "warning",
                                  showCancelButton: true,
                                  confirmButtonColor: "#1ab394",
                                  confirmButtonText: "Ya, hapus!",
                                  closeOnConfirm: false
                              }, function () {
                                $.ajax({
                                     url : "<?php echo site_url('admin/Datajurusan/deleteRole')?>",
                                     type: "POST",
                                     data: {'id_role':id_role},
                                     dataType: "JSON",
                                     success: function(data)
                                     {
                                       if (data.status=='berhasil') {
                                         kelas(id_jurusan);
                                         swal("Berhasil!", data.message, "success");
                                         reload_table();
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
                        }
                        function tambah(){
                          var id_kelas = $('#not_selected').val();
                          if(id_kelas==null){
                            swal("Gagal!", "Tidak ada kelas yang ditambah", "");
                          }
                          else{
                          swal({
                                  title: "Anda yakin?",
                                  text: "Kelas tersebut akan ditambah",
                                  type: "warning",
                                  showCancelButton: true,
                                  confirmButtonColor: "#1ab394",
                                  confirmButtonText: "Ya, tambah!",
                                  closeOnConfirm: false
                              }, function () {

                                $.ajax({
                                     url : "<?php echo site_url('admin/Datajurusan/addRole')?>",
                                     type: "POST",
                                     data: {'id_kelas':id_kelas, 'id_jurusan':id_jurusan},
                                     dataType: "JSON",
                                     success: function(data)
                                     {
                                       if (data.status=='berhasil') {
                                         kelas(id_jurusan);
                                         swal("Berhasil!", data.message, "success");
                                         reload_table();
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
                            }
                        }
                        </script>
