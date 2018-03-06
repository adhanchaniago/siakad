
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Lembar Kerja Dosen</h2>
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
                        <a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
                <div class="row">
                  <div class="col-md-4">
                    <h3>Tabel Kategori Kegiatan</h3>
                  </div>
                  <div class="col-md-2 pull-right">
                    <a href="" data-toggle="modal" data-target="#myModal1" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                  </div>
                </div><br>
                    <div class="table-responsive">
                      <table id="tablekategori" class="table table-striped table-bordered table-hover " >
                      <thead>
                      <tr>
                          <th>No</th>
                          <th>Nama Kategori</th>
                          <th>Alias</th>
                          <th>Action</th>
                      </tr>
                      </thead>

                      </table>
                    </div>
                </div>
              <br>
              <div class="ibox-content">
                  <div class="row">
                    <div class="col-md-4">
                      <h3>Tabel Kegiatan</h3>
                    </div>
                    <div class="col-md-2 pull-right">
                      <a href="" data-toggle="modal" data-target="#myModal2" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                  </div><br>
                  <div class="table-responsive">
                        <table id="tablekegiatan" class="table table-striped table-bordered table-hover " >
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Ketegori</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        </table>
                      </div>
                  </div>
            </div>

            <div class="modal inmodal" id="myModal1" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kategori Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formkt" class="form-horizontal">
                          <div class="form-group">
                            <label for="kategori">Nama Kategori: <span style="color:red;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Kategori" required>
                          </div>
                          <div class="form-group">
                            <label for="alias">Alias: <span style="color:red;">*</span></label>
                            <input type="text" name="alias" class="form-control" placeholder="Masukkan alias max 7 karakter" maxlength="7" required>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Tambah Kegiatan Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formkg" class="form-horizontal">
                          <div class="form-group">
                            <label for="nama">Nama Kegiatan: <span style="color:red;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Kegiatan" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Kategori: <span style="color:red;">*</span></label>
                            <select type="text" name="kategori" class="form-control">
                              <?php
                              foreach ($kategori->result() as $row) {
                                echo "<option value='$row->id'>$row->nama</option>";
                              }
                              ?>

                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            <div class="modal inmodal" id="myModalEdit1" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Kategori</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEditkt" class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">Nama Kategori: <span style="color:red;">*</span></label>
                            <input type="text" id="namakt" name="nama" class="form-control" placeholder="Masukkan Nama Kategori" required>
                          </div>
                          <div class="form-group">
                            <label for="nama">alias: <span style="color:red;">*</span></label>
                            <input type="text" id="alias" name="alias" class="form-control" placeholder="Masukkan alias max 7 karakter" maxlength="7" required>
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
            <div class="modal inmodal" id="myModalEdit2" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Kegiatan</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEditkg" class="form-horizontal">
                          <div class="form-group">
                            <label for="nama">Nama Kegiatan: <span style="color:red;">*</span></label>
                            <input type="text" id="namakg" name="nama" class="form-control" placeholder="Masukkan Nama Kegiatan" required>
                          </div>
                          <div class="form-group">
                            <label for="kategori">Kategori: <span style="color:red;">*</span></label>
                            <select type="text" id="kategori" name="kategori" class="form-control">
                              <?php
                              foreach ($kategori->result() as $row) {
                                echo "<option value='$row->id'>$row->nama</option>";
                              }
                              ?>
                            </select>
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
  var id_kt, id_kg;
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

              t = $("#tablekategori").dataTable({
                  initComplete: function() {
                      var api = this.api();
                      $('#tablekategori_filter input')
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
                  ajax: {"url": "<?php echo base_url("admin/Datalkd/jsonKategori");?>", "type": "POST"},
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
                      {"data": "nama"},
                      {"data": "alias"},
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
              tt = $("#tablekegiatan").dataTable({
                  initComplete: function() {
                      var api = this.api();
                      $('#tablekegiatan_filter input')
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
                  ajax: {"url": "<?php echo base_url("admin/Datalkd/jsonKegiatan");?>", "type": "POST"},
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
                      {"data": "nama"},
                      {"data": "kategori"},
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
  function reload_kategori()
{
    $('#tablekategori').DataTable().ajax.reload(null,false); //reload datatable ajax
}
function reload_kegiatan()
{
    $('#tablekegiatan').DataTable().ajax.reload(null,false); //reload datatable ajax
}
$('#formkt').submit(function(){

            var form = $('#formkt')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            $.ajax({
              url: '<?php echo base_url("Admin/Datalkd/insertKategori");?>',
              data: formData,
              type: 'POST',
              // THIS MUST BE DONE FOR FILE UPLOADING
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data){
                alert(data.message);
                if(data.status=="berhasil"){
                $('#formkt')[0].reset();
                $('#myModal1').modal('hide');
                reload_kategori();
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
  $('#formEditkt').submit(function(){

            var form = $('#formEditkt')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            formData.append('id',id_kt);
            $.ajax({
              url: '<?php echo base_url("Admin/Datalkd/updateKategori");?>',
              data: formData,
              type: 'POST',
              // THIS MUST BE DONE FOR FILE UPLOADING
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data){
                alert(data.message);
                if(data.status=="berhasil"){
                $('#formEditkt')[0].reset();
                $('#myModalEdit1').modal('hide');
                reload_kategori();
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
  function editkt(id){
  id_kt = id;
   $.ajax({
        url : "<?php echo site_url('Admin/Datalkd/getKategori')?>",
        type: "POST",
        data: {'id':id},
        dataType: "JSON",
        success: function(data)
        {
          $('#namakt').val(data.nama);
          $('#alias').val(data.alias);
          $('#myModalEdit1').modal('show');
        },
            error: function (jqXHR, textStatus, errorThrown)
            {
              console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
            }
      });
 }
 function hapuskt(id){
 if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Lak/Datakk/delete')?>",
            type: "POST",
            data: {'id':id},
            success: function(data)
            {
              alert(data);
              if(data=="berhasil")
                reload_kategori();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menghapus data, Periksa apakah KK ini digunakan pada tabel lain!');
            }
        });

    }
}
$('#formkg').submit(function(){

            var form = $('#formkg')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            $.ajax({
              url: '<?php echo base_url("Admin/Datalkd/insertKegiatan");?>',
              data: formData,
              type: 'POST',
              // THIS MUST BE DONE FOR FILE UPLOADING
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data){
                alert(data.message);
                if(data.status=="berhasil"){
                $('#formkg')[0].reset();
                $('#myModal2').modal('hide');
                reload_kegiatan();
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
  $('#formEditkg').submit(function(){

            var form = $('#formEditkg')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            formData.append('id',id_kg);
            $.ajax({
              url: '<?php echo base_url("Admin/Datalkd/updateKegiatan");?>',
              data: formData,
              type: 'POST',
              // THIS MUST BE DONE FOR FILE UPLOADING
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data){
                alert(data.message);
                if(data.status=="berhasil"){
                $('#formEditkg')[0].reset();
                $('#myModalEdit2').modal('hide');
                reload_kegiatan();
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
  function editkg(id){
  id_kg = id;
   $.ajax({
        url : "<?php echo site_url('Admin/Datalkd/getKegiatan')?>",
        type: "POST",
        data: {'id':id},
        dataType: "JSON",
        success: function(data)
        {
          $('#namakg').val(data.nama);
          $('#kategori').val(data.id_kategori);
          $('#myModalEdit2').modal('show');
        },
            error: function (jqXHR, textStatus, errorThrown)
            {
              console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
            }
      });
 }
 function hapuskg(id){
 if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Lak/Datakk/delete')?>",
            type: "POST",
            data: {'id':id},
            success: function(data)
            {
              alert(data);
              if(data=="berhasil")
                reload_kegiatan();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menghapus data, Periksa apakah KK ini digunakan pada tabel lain!');
            }
        });

    }
}
</script>
