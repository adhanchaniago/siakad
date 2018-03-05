
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-12">
                    <h2>Nilai Mahasiswa</h2><br >
                    <div class="table-responsive col-xs-4">
                    <table border="0">
                      <tbody>
                        <tr>
                          <td width="130px;">NIM</td>
                          <td width="7px;">: </td>
                          <td>123456789</td>
                        </tr>
                        <tr>
                          <td width="130px;">Nama</td>
                          <td width="7px;">:</td>
                          <td>ABDUL KARIM</td>
                        </tr>
                        <tr>
                          <td width="130px;">Program Studi</td>
                          <td width="7px;">:</td>
                          <td>S1 Teknik Informatika</td>
                        </tr>
                        <tr>
                          <td width="130px;">IPK</td>
                          <td width="7px;">:</td>
                          <td><b style="color:blue;">3.99</td>
                        </tr>
                        <tr>
                          <td width="130px;">SKS Total</td>
                          <td width="7px;">:</td>
                          <td>128</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="table-responsive col-xs-3">
                    <table border="0">
                      <tbody>
                        <tr>
                          <td width="130px;">Tingkat I</td>
                          <td width="7px;">: </td>
                          <td>38 SKS</td>
                        </tr>
                        <tr>
                          <td width="130px;">Tingkat II</td>
                          <td width="7px;">:</td>
                          <td>87 SKS</td>
                        </tr>
                        <tr>
                          <td width="130px;">Tingkat III</td>
                          <td width="7px;">:</td>
                          <td>120 SKS</td>
                        </tr>
                        <tr>
                          <td width="130px;">Tingkat IV</td>
                          <td width="7px;">:</td>
                          <td>144 SKS</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="table-responsive col-xs-3">
                    <table border="0">
                      <tbody>
                        <tr>
                          <td width="220px;">Lulus Tanggal 20-02-2016</td>
                          <td>IP</td>
                          <td width="7px;">: </td>
                          <td>3.87</td>
                        </tr>
                        <tr>
                          <td width="220px;">Lulus Tanggal 19-07-2017</td>
                          <td>IP</td>
                          <td width="7px;">: </td>
                          <td>4.00</td>
                        </tr>
                        <tr>
                          <td width="220px;">Belum Lulus</td>
                          <td>IP</td>
                          <td width="7px;">: </td>
                          <td>3.97</td>
                        </tr>
                        <tr>
                          <td width="220px;">Belum Lulus</td>
                          <td>IP</td>
                          <td width="7px;">: </td>
                          <td>3.98</td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <!-- <div class="col-xs-4">
                    <ul class="list-group clear-list m-t">
                            <li class="list-group-item fist-item">
                                <span class="pull-right">
                                    123456789
                                </span>
                                NIM :
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    ABDUL KARIM
                                </span>
                                Nama :
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    IF-40-01
                                </span>
                                Kelas :
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    3.66
                                </span>
                                IPK :
                            </li>
                            <li class="list-group-item">
                                <span class="pull-right">
                                    128
                                </span>
                                SKS Total :
                            </li>
                        </ul>
                  </div> -->
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->

            <style media="screen">
                .color3{
                  color: #8be0be;
                }
                .color4{
                  color: #ffa982;
                }
            </style>

            </div>
            <div class="wrapper wrapper-content">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <div class="row"><br >
                  <div class="col-sm-2">
                    <label class="control-label">Tahun Ajaran</label>
                      <select class="form-control m-b" name="account">
                        <option selected disabled>All</option>
                        <option>1617</option>
                        <option>1617</option>
                        <option>1718</option>
                      </select>
                  </div>
                  <div class="col-sm-2">
                    <label class="control-label">Semester</label>
                      <select class="form-control m-b" name="account">
                        <option selected disabled>All</option>
                        <option>Genap</option>
                        <option>Ganjil</option>
                      </select>
                  </div>
              </div>
                <div class="table-responsive">
                  <table id="tabelnilai" class="table table-bordered">
                    <thead>
                      <tr>
                        <th></th>
                        <th width="10">No</th>
                        <th width="15%">Kode Matkul</th>
                        <th>Nama Matkul</th>
                        <th width="20">SKS</th>
                        <th width="15%">Periode Akademik</th>
                        <th width="15%">Indeks Nilai</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>CH04414</td>
                        <td>Kalkulus Lanjutan</td>
                        <td>4</td>
                        <td>1718/1</td>
                        <td>A</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content animated fadeInDown">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>

                          <h4 class="modal-title">Detail Kehadiran</h4>
                          <!-- <small>Pastikan data yang diisi telah sesuai </small> -->
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Pertemuan</th>
                              <th>Topik</th>
                              <th>Status</th>
                            </tr>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Introductions</td>
                                <td>Hadir</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Integral</td>
                                <td>Hadir</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Turunan</td>
                                <td>Alpa</td>
                              </tr>
                            </tbody>
                          </thead>
                        </table>
                  </div>
              </div>
          </div>

      <script type="text/javascript">
      /* Formatting function for row details - modify as you need */
      function format ( d ) {
        // `d` is the original data object for the row
        return '<table class="table" style="padding-left:50px;">'+
            '<tr>'+
                '<td width="60">CLO1:</td>'+
                '<td>90</td>'+
            '</tr>'+
            '<tr>'+
                '<td>CLO2:</td>'+
                '<td>90</td>'+
            '</tr>'+
            '<tr>'+
                '<td>CLO3:</td>'+
                '<td>88</td>'+
            '</tr>'+
        '</table>';
      }

      $(document).ready(function() {
        var table = $('#tabelnilai').DataTable( {
            // "ajax": ".../objects.txt",
            "columns": [
                {
                    "className":      'details-control',
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ''
                },
                { "data": "nomor" },
                { "data": "kodematakuliah" },
                { "data": "namamatakuliah" },
                { "data": "sks" },
                { "data": "periodeakademik" },
                { "data": "nilaiindeks" }
            ],
            "order": [[1, 'asc']]
        } );

        // Add event listener for opening and closing details
        $('#tabelnilai tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
      } );
      </script>
