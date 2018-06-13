
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Dosen</h2>
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
                        <a href="<?php echo base_url()."admin/datadosen/detail" ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Detail Test</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Kontak</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                </table>
                    </div>
                </div>
            </div>

            <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Data Dosen Baru</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="form" class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="nip" class="form-control" placeholder="Masukkan NIP Dosen" required>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama: <span style="color:red;">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Dosen" required>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Status:</label>
                            <select name="status" class="form-control">
                              <option value="">- Pilih Status -</option>
                              <?php
                                foreach ($tipe->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Jabatan Fungsional :</label>
                            <select name="jabatan" class="form-control">
                              <option value="">- Pilih Jabatan Fungsional -</option>
                              <?php
                                foreach ($jabatan->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Unit Kerja :</label>
                            <select name="unit_kerja" class="form-control">
                              <option value="">- Pilih Unit Kerja -</option>
                              <?php
                                foreach ($unit_kerja->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>
                            </select>

                          </div>
                          <div class="form-group">
                            <label for="nohp">Fakultas :</label>
                            <select name="fakultas" class="form-control">
                              <option value="">- Pilih Fakultas -</option>
                              <?php
                                foreach ($fakultas->result() as $row) {
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

            <div class="modal inmodal" id="myModalEdit" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Dosen</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEdit" class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
                            <input type="number" min="0" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP Dosen" disabled>
                          </div>
                          <div class="form-group">
                            <label for="nama">Nama: <span style="color:red;">*</span></label>
                            <input type="text"  name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Dosen" disabled>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Status:</label>
                            <select name="status" id="status" class="form-control">
                              <option value="">- Pilih Status -</option>
                              <?php
                                foreach ($tipe->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Jabatan Fungsional :</label>
                            <select name="jabatan" id="jabatan" class="form-control">
                              <option value="">- Pilih Jabatan Fungsional -</option>
                              <?php
                                foreach ($jabatan->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>

                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Unit Kerja :</label>
                            <select name="unit_kerja" id="unit_kerja" class="form-control">
                              <option value="">- Pilih Unit Kerja -</option>
                              <?php
                                foreach ($unit_kerja->result() as $row) {
                                  echo "<option value='$row->id'>$row->nama</option>";
                                }
                              ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="nohp">Fakultas :</label>
                            <select name="fakultas" id="fakultas" class="form-control">
                              <option value="">- Pilih Fakultas -</option>
                              <?php
                                foreach ($fakultas->result() as $row) {
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
  var id_dosen, id_pegawai;

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
                  ajax: {"url": "<?php echo base_url("admin/Datadosen/json");?>", "type": "POST"},
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
                      {"data": "kontak"},
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
  });

  $('#formEdit').submit(function(){
            var form = $('#formEdit')[0]; // You need to use standart javascript object here
            var formData = new FormData(form);
            formData.append('id',id_pegawai);
            $.ajax({
              url: '<?php echo base_url("Admin/Datadosen/update");?>',
              data: formData,
              type: 'POST',
              // THIS MUST BE DONE FOR FILE UPLOADING
              contentType: false,
              processData: false,
              dataType: "JSON",
              success: function(data){
                if (data.status=='berhasil') {
                  $('#formEdit')[0].reset();
                  $('#myModalEdit').modal('hide');
                  reload_table();
                  swal("Berhasil!", data.message, "success");
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
function edit(id_p){
  id_pegawai = id_p;
   $.ajax({
        url : "<?php echo site_url('Admin/Datadosen/getDosen')?>",
        type: "POST",
        data: {'id':id_pegawai},
        dataType: "JSON",
        success: function(data)
        {
          $('#nama').val(data.nama);
          $('#nip').val(data.nip);
          $('#status').val(data.id_tipe);
          $('#jabatan').val(data.id_jabatan);
          $('#unit_kerja').val(data.id_unit_kerja);
          $('#fakultas').val(data.id_fakultas);
          $('#myModalEdit').modal('show');
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
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Terjadi kesalahan saat menghapus data, Periksa apakah KK ini digunakan pada tabel lain!');
            }
        });

    }
}

</script>
