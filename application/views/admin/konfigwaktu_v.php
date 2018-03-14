
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-8">
                    <h2>Data Konfigurasi Waktu Minimal</h2>
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
                    <h3>Tabel Waktu</h3>
                  </div>
                </div><br>
                    <div class="table-responsive">
                      <table class="table table-bordered" >
                      <thead>
                      <tr>
                          <th width="5%"><center>No</center></th>
                          <?php
                          echo '<th width="'. 90/(count($kategori)+3).'%"><center>Jabatan Fungsional</center></th>
                          <th width="'. 90/(count($kategori)+3).'%"><center>Jam Hadir Minimal</center></th>';
                          foreach($kategori as $row){
                            echo "<th width='". 90/(count($kategori)+3)."%'><center>$row->nama</center></th>";
                          }
                            echo '<th width="'. 90/(count($kategori)+3).'%"><center>Jumlah</center></th>
                            <th width="5%"><center>Action</center></th>';
                           ?>




                      </tr>
                      </thead>
                      <tbody>

                        <?php
                        $i = 1;
                          foreach ($jabatan as $row) {
                            echo "<tr class='gradeX'>
                                <td><center>". $i++ ."</center></td>
                                <td>$row->nama</td>
                                <td><center>$row->minimal_jam</center></td>
                                ";
                                $jumlah=0;
                                foreach($kategori as $row_j){
                                  if(!isset($row->jam[$row_j->id]))
                                    echo "<td><center>0</center></td>";
                                  else{
                                    $nilai = $row->jam[$row_j->id];
                                    echo "<td><center>$nilai</center></td>";
                                    $jumlah += $nilai;
                                  }
                                }
                            echo "
                                <td><center>$jumlah</center></td>
                                <td>
                                  <center>
                                    <button class='btn btn-warning btn-xs' title='Edit Data'><span class='glyphicon glyphicon-edit' onclick='edit($row->id)'></span></button>
                                    <a class='btn btn-danger btn-xs' title='Hapus Data' href='#'><span class='glyphicon glyphicon-trash'></span></a>
                                  </center>
                                </td>
                            </tr>";
                          }
                         ?>

                      </tbody>
                      </table>
                    </div>
                </div>
              <br>
            </div>
            <div class="modal inmodal" id="modalEdit" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Data Jam Minimal</h4>
                            <small>Pastikan data yang diisi telah sesuai</small>
                        </div>
                        <div class="modal-body">
                          <form id="formEdit" class="form-horizontal">
                            <table class="table" style="margin-top:-10px;">
                              <thead>
                                <tr>
                                  <th>Keterangan</th>
                                  <th></th>
                                  <th width="20%">Jam</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Jam Hadir Minimal<span style="color:red;">*</span></td>
                                  <td>:</td>
                                  <td><input id="nilai0" name="nilai[]" step="0.1" type="number" min="0" class="form-control" required></td>
                                </tr>
                                <?php
                                  foreach ($kategori as $row) {
                                    echo "<tr>
                                      <td>$row->nama<span style='color:red;'>*</span></td>
                                      <td>:</td>
                                      <td><input id='nilai$row->id' name='nilai[]' step='0.1' type='number' min='0' class='form-control' required></td>
                                    </tr>";
                                  }
                                 ?>

                              </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" onclick="$('#modalEdit').toggle()">Batal</button>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
<script>
var id_jabatan;
  function edit(id){
    id_jabatan = id;
    $.ajax({
         url : "<?php echo site_url('admin/Konfigwaktu/getJam')?>",
         type: "POST",
         data: {'id_jabatan':id_jabatan},
         dataType: "JSON",
         success: function(data)
         {
           $('#nilai0').val(data[0]);
           <?php
             foreach ($kategori as $row) {

              echo "$('#nilai$row->id').val(data[$row->id]);";

             }
            ?>
         },
             error: function (jqXHR, textStatus, errorThrown)
             {
               console.log(jqXHR);
         console.log(textStatus);
         console.log(errorThrown);
             }
       });
    $('#modalEdit').show();
  }
  $('#formEdit').submit(function(){
    var newArray = [];
    $( "input[name='nilai[]']" ).each(function() {
        newArray.push($( this ).val());
    });
    var formData = new FormData;
    for(var i=0; i<newArray.length;i++){

      formData.append('nilai[]',newArray[i]);
    }
    formData.append('id_jabatan',id_jabatan);
    $.ajax({
      url: '<?php echo base_url("admin/Konfigwaktu/edit");?>',
      data: formData,
      type: 'POST',
      // THIS MUST BE DONE FOR FILE UPLOADING
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data){
        alert(data.message);
        location.reload();
      },
    error: function(jqXHR, textStatus, errorThrown)
    {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
          });
          $('#modalEdit').toggle();


  });
</script>
