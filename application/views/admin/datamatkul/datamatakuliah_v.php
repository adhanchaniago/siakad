
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Mata Kuliah</h2>
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
                        <a href="<?php echo base_url()."admin/datamatakuliah/add"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-title">
                <div class="row">
                  <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label">Filter Fakultas:</label>
                        <div><select type="text" class="form-control">
                          <option value="0" selected>SEMUA</option>
                          <option value="1" >DAKWAH DAN KOMUNIKASI</option>
                          <option value="2">EKONOMI DAN BISNIS ISLAM</option>
                          <option value="3">PASCASARJANA</option>
                          <option value="4">SYARIAH</option>
                          <option value="5">TARBIYAH DAN KEGURUAN</option>
                          <option value="6">USHULUDDIN DAN HUMANIORA</option>
                        </select></div>
                      </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="control-label">Filter Program Studi:</label>
                        <div><select type="text" class="form-control">
                          <option value="0" selected>SEMUA</option>
                        </select></div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover tabelmatkul" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Kurikulum</th>
                    <th>SMTR</th>
                    <th>SKS-T</th>
                    <th>SKS-P</th>
                    <th>SKS-L</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>112</td>
                    <td>Kalkulus</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                      <center>
                        <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='<?php echo base_url()."admin/datamatakuliah/edit"?>'><span class='glyphicon glyphicon-edit'></span></a>
                        <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                      </center>
                    </td>
                </tr>
                </tbody>
                </table>
                    </div>
                </div>
            </div>

            <script type="text/javascript">
            $(document).ready(function(){
                  $('.tabelmatkul').DataTable({
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
