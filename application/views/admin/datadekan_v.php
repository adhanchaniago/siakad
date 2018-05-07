
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Dekan</h2>
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
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
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
                <table id ="mytable" class="table table-striped table-bordered table-hover datatabelpimpinan" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Kontak</th>
                    <th>Jabatan</th>
                    <th>Fakultas</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
                    </div>
                </div>
            </div>
            <!-- <div class="modal inmodal" id="editModal" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data Dekan</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                          <div class="form-group">
                            <label for="nip">NIP: <span style="color:red;">*</span></label>
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
            </div> -->

            <script type="text/javascript">
            var id_fakultas = 0;
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
                            ajax: {"url": "<?php echo base_url("admin/Datadekan/json");?>", "type": "POST","data":{
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
                                {"data": "nip"},
                                {"data": "nama"},
                                {"data": "no_telp"},
                                {"data": "jabatan"},
                                {"data": "fakultas"}
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
            </script>
