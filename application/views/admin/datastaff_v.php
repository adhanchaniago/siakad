
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Data Staff</h2>
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
                        <a href="<?php echo base_url()."admin/datastaff/tambahstaff"?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-content">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover datatabelstaff" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Pangkat</th>
                    <th>Mulai Bekerja</th>
                    <th>Lama Bekerja</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>1</td>
                    <td>Pep Guardiola</td>
                    <td>34</td>
                    <td>Kepala OB</td>
                    <td>21-04-2010</td>
                    <td>8 Tahun</td>
                    <td>
                      <center>
                        <a class='btn btn-primary btn-xs' title='Lihat Data' href='#'><span class='fa fa-eye'></span></a>
                        <a class='btn btn-warning btn-xs' title='Edit Data' href='#'><span class='glyphicon glyphicon-edit'></span></a>
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
          $('.datatabelstaff').DataTable({
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
