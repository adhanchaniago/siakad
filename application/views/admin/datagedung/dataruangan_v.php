
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Ruangan</h2>
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
              <div class="ibox-title">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">Filter Gedung:</label>
                        <div><select id="id_gedung" class="form-control">
                          <option value="0" selected>SEMUA</option>
                          <?php foreach ($gedung->result() as $row){
                            echo "<option value='$row->id'>$row->kode - $row->nama</option>";
                          }?>
                        </select></div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="ibox-content">
              <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered table-hover datatabelruangan" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Daya Tampung</th>
                    <th>Gedung</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="addModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Data Ruangan Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="form" class="form-horizontal">
                          <div class="form-group">
                            <label>Pilih Gedung: <span style="color:red;">*</span></label>
                            <select name="gedung" class="form-control" required>
                              <option selected disabled>-Pilih Gedung-</option>
                              <?php foreach ($gedung->result() as $row){
                                echo "<option value='$row->id'>$row->kode - $row->nama</option>";
                              }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Kode Ruangan: <span style="color:red;">*</span></label><small> Kode ruangan otomatis mengikuti kode gedung</small>
                            <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label>Nama Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Daya Tampung:</label>
                            <input type="number" min="0" name="kapasitas" class="form-control" placeholder="Masukkan Daya Tampung Ruangan" required>
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
                            <h4 class="modal-title">Edit Data Ruangan</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEdit" class="form-horizontal">
                          <div class="form-group">
                            <label>Pilih Gedung: <span style="color:red;">*</span></label>
                            <select name="gedung" id="gedung" class="form-control" required>
                              <option selected disabled>-Pilih Gedung-</option>
                              <?php foreach ($gedung->result() as $row){
                                echo "<option value='$row->id'>$row->kode - $row->nama</option>";
                              }?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Kode Ruangan: <span style="color:red;">*</span></label><small> Kode ruangan otomatis mengikuti kode gedung</small>
                            <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan Kode Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label>Nama Ruangan: <span style="color:red;">*</span></label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Daya Tampung:</label>
                            <input type="number" min="0" id="kapasitas" name="kapasitas" class="form-control" placeholder="Masukkan Daya Tampung Ruangan" required>
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
            var id_gedung = 0,id_ruangan;
            $('#id_gedung').change(function(){
              id_gedung = $(this).val();
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
                            ajax: {"url": "<?php echo base_url("admin/Dataruangan/json");?>", "type": "POST","data":{

                            "id_gedung":id_gedung,
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
                                {"data": "nama"},
                                {"data": "kapasitas"},
                                {"data": "gedung"},
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
            };
            function edit(id){
              id_ruangan=id;

              $.ajax({
                 url : "<?php echo site_url('admin/Dataruangan/get')?>",
                 type: "POST",
                 data: {"id":id},
                 dataType: "JSON",
                 success: function(data)
                 {
                   if (data.status=='berhasil') {
                     $('#gedung').val(data.data.id_gedung);
                     $('#nama').val(data.data.nama);
                     $('#kode').val(data.data.kode);
                     $('#kapasitas').val(data.data.kapasitas);
                     $('#editModal').modal();
                   }else {
                     swal("Gagal!", data.message, "error");
                   }
                   console.log();
                 },
                     error: function (jqXHR, textStatus, errorThrown)
                     {
                       console.log(jqXHR);
                 console.log(textStatus);
                 console.log(errorThrown);
                     }
               });
            }
            function hapus(id){
              swal({
                      title: "Anda yakin?",
                      text: "Ruangan akan dihapus",
                      type: "warning",
                      showCancelButton: true,
                      confirmButtonColor: "#1ab394",
                      confirmButtonText: "Ya, hapus!",
                      closeOnConfirm: false
                  }, function () {
              $.ajax({
                 url : "<?php echo site_url('admin/Dataruangan/delete')?>",
                 type: "POST",
                 data: {"id":id},
                 dataType: "JSON",
                 success: function(data)
                 {
                   if (data.status=='berhasil') {
                    swal("Berhasil!", data.message, "success");
                    reload_table();
                   }else {
                     swal("Gagal!", data.message, "error");
                   }
                   console.log();
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
            $('#form').submit(function(){
                        var form = $('#form')[0]; // You need to use standart javascript object here
                        var formData = new FormData(form);
                        $.ajax({
                          url: '<?php echo base_url("admin/Dataruangan/insert");?>',
                          data: formData,
                          type: 'POST',
                          // THIS MUST BE DONE FOR FILE UPLOADING
                          contentType: false,
                          processData: false,
                          dataType: "JSON",
                          success: function(data){
                            if (data.status=='berhasil') {
                              swal("Berhasil!", data.message, "success");
                              $('#form')[0].reset();
                              $('#addModal').modal('hide');
                              reload_table();
                            }else {
                              swal("Gagal!", data.message, "error");
                            }
                          },
                              error: function(jqXHR, textStatus, errorThrown)
                              {
                          console.log(jqXHR);
                          console.log(textStatus);
                          console.log(errorThrown);
                          alert('gagal');
                        }
                        })

                        return false;
                    });
                    $('#formEdit').submit(function(){
                                var form = $('#formEdit')[0]; // You need to use standart javascript object here
                                var formData = new FormData(form);
                                formData.append('id',id_ruangan);
                                $.ajax({
                                  url: '<?php echo base_url("admin/Dataruangan/update");?>',
                                  data: formData,
                                  type: 'POST',
                                  // THIS MUST BE DONE FOR FILE UPLOADING
                                  contentType: false,
                                  processData: false,
                                  dataType: "JSON",
                                  success: function(data){
                                    if (data.status=='berhasil') {
                                      swal("Berhasil!", data.message, "success");
                                      $('#formEdit')[0].reset();
                                      $('#editModal').modal('hide');
                                      reload_table();
                                    }else {
                                      swal("Gagal!", data.message, "error");
                                    }
                                  },
                                      error: function(jqXHR, textStatus, errorThrown)
                                      {
                                  console.log(jqXHR);
                                  console.log(textStatus);
                                  console.log(errorThrown);
                                  alert('gagal');
                                }
                                })

                                return false;
                            });
                    function reload_table()
                  {
                      $('#mytable').DataTable().ajax.reload(null,false); //reload datatable ajax
                  }
            </script>
