

  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Laporan Lembar Kerja Dosen</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>

            </div>

            <div class="wrapper wrapper-content" id="item">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <div class="row">
                        <div class="col-md-2">
                          <h2>Form</h2>
                        </div>
                        <div class=" col-md-2" style="margin-top:5px;margin-bottom:-10px;">
                          <label for="semester">Filter Bulan</label>
                          <div class="form-group">
                            <select id="bulan" class="form-control">
                              <?php
                              foreach ($bulan->result() as $row){
                                  echo "<option value='$row->kode'>$row->bulan</option>";
                              }
                              ?>

                            </select>

                          </div>
                        </div>
                        <div class=" col-md-2" style="margin-top:5px;margin-bottom:-10px;">
                          <label for="semester">Filter Periode</label>
                          <div class="form-group">
                            <select id="mingguan" class="form-control">
                              <?php

                              ?>

                            </select>

                          </div>
                        </div>
                  </div>
                      <div class="hr-line-dashed"></div>
                    <form class="form-horizontal">
                      <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th><center>No</center></th>
                            <th><center>Tanggal</center></th>
                            <th><center>Kegiatan</center></th>
                            <th><center>Waktu</center></th>
                            <?php foreach ($kategori as $row){
                              echo "<th><center>$row->alias</center></th>";
                            } ?>
                            <th><center>Jmlh</center></th>
                            <th><center>Opsi</center></th>
                          </tr>
                        </thead>
                        <tbody id="body">


                        </tbody>
                      </table>
                    </div>
                        <!-- <div class="form-group">
                          <div class="col-lg-6 col-lg-offset-2">
                            <button type="button" class="btn btn-xs btn-success" name="button"><i class="fa fa-plus"></i> Kegiatan</button>
                          </div>
                        </div> -->
                <br >
                <center>
                  <button type="button" id="ajukan" class="btn btn-w-m btn-primary" onclick="pengajuan()"><i class="fa fa-send"></i> Ajukan ACC</button>

                </center>
              </form>
              </div>
            </div> <br >
          </div>

<script>
var arrJam=[];
var arrNilai=[];
var status, url_print;
<?php

$a = 0;
foreach ($kategori as $row){
  $id = $row->id;
  echo "arrJam.push('$id');";
  echo "arrNilai.push('$jam[$id]');";
}
?>

var id_periode,kode_bulan=$('#bulan').val();
getPeriode();

  function pengajuan(){
      if(status == "-1"){
        swal({
                title: "Anda yakin?",
                text: "Data tidak akan dapat diubah setelah diajukan",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1ab394",
                confirmButtonText: "Ya, ajukan!",
                closeOnConfirm: false
            }, function () {
              $.ajax({
                   url : "<?php echo site_url('dosen/Laporanlkd/pengajuan')?>",
                   type: "POST",
                   data: {'id_periode':id_periode},
                   dataType: "JSON",
                   success: function(data)
                   {
                     if(data.status=='berhasil'){
                       $('#ajukan').removeClass('btn-primary');
                       $('#ajukan').removeClass('btn-success');
                       $('#ajukan').addClass('btn-warning');
                       $('#ajukan').html('<i class="fa fa-clock-o"></i> Menunggu ACC');
                       status = "0";
                       swal("Updated!", data.message, "success");
                       getData();
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
        else if(status == 1){
          window.open("<?php echo base_url().'dosen/PrintLKD?q='?>"+url_print, '_blank');

        }
  }
  $('#bulan').change(function(){
    kode_bulan=$(this).val();
    getPeriode();
  });
  function getPeriode(){
    $.ajax({
         url : "<?php echo site_url('dosen/Laporanlkd/getPeriode')?>",
         type: "POST",
         data: {"kode":kode_bulan},
         dataType: "JSON",
         success: function(data)
         {
           if (data.status=='berhasil') {
             $('#mingguan').html(data.data);
           }
           id_periode=$('#mingguan').val();
           getData();
         },
             error: function (jqXHR, textStatus, errorThrown)
             {
               console.log(jqXHR);
         console.log(textStatus);
         console.log(errorThrown);
             }
       });
  }
  $('#mingguan').change(function(){
    id_periode=$(this).val();
    getData();
  });

  /*function getData(){


    $.ajax({
      url: '<?php //echo base_url("dosen/Laporanlkd/getData");?>',
      data: {'id_periode':id_periode},
      type: 'POST',
      // THIS MUST BE DONE FOR FILE UPLOADING

      dataType: "JSON",
      success: function(data){
        console.log(data);
        var html='',rowspan,td='',baris = 0;
        var i = 1;

        for(key in data.tanggal){
          rowspan = data.tanggal[key].length;
          html += '<tr>';

          for(var j = 0; j < rowspan; j++){
            td='';
            baris=0;
            for(var k=0; k < arrJam.length; k++){
              if(data.tanggal[key][j].id_kategori == arrJam[k]){
                td += '<td><center>'+data.tanggal[key][j].total+'</center></td>';
                baris = data.tanggal[key][j].total;

              }
              else{
                td += '<td><center>-</center></td>';
              }

            }
            td += '<td>'+baris+'</td>';


if(j==0){
  html+= '            <td rowspan="'+rowspan+'" style="text-align:center;vertical-align:middle;">'+(i++)+'</td>'+
'            <td rowspan="'+rowspan+'" style="text-align:center;vertical-align:middle;">'+key+'</td>'+
''+
'                <td>'+data.tanggal[key][j].kegiatan+'</td>'+
'                <td>'+data.tanggal[key][j].jam_awal+'-'+data.tanggal[key][j].jam_akhir+'</td>'+td;
if(data.pengajuan.status_pengajuan == '-1')
html+='                <td rowspan="'+rowspan+'" align="center" style="vertical-align:middle;"><a href="<?php echo base_url()."dosen/Laporanlkd/edit?q="?>'+data.id[i-2]+'" target="_blank" class="btn btn-xs btn-primary" type="button" name="button"> <i class="fa fa-edit"></i> edit</a></td>';
else
html+='                <td rowspan="'+rowspan+'" align="center" style="vertical-align:middle;"><button type="button" class="btn btn-xs btn-primary" type="button" name="button" disabled> <i class="fa fa-edit"></i> edit</a></td>';

}
else{
html+='              <tr>'+
'                <td>'+data.tanggal[key][j].kegiatan+'</td>'+
'                <td>'+data.tanggal[key][j].jam_awal+'-'+data.tanggal[key][j].jam_akhir+'</td>'+td+
'              </tr>';
}


}
html+='          </tr>';

        }
        if(data.tanggal.length == 0)
          html='<tr><td colspan="'+(arrJam.length+6)+'"><center><b>Data Kosong<b></center></td></tr>">';
        html+='<tr><td colspan="4" style="text-align:center;vertical-align:middle;"><b>Jumlah</b></td>';
        var color;
        var nilai,total=0;
        for(var i=0; i<arrJam.length; i++){
          if(data.jam[arrJam[i]] == null){
            nilai = 0;
          }
          else {
            nilai = data.jam[arrJam[i]];
          }
          if(nilai >= arrNilai[i]){
            color = '#00cc33'
          }
          else {
            color = 'red';
          }
          total+=nilai;
          html+='<td><center><b style="color:'+color+'">'+nilai+' ('+arrNilai[i]+')<b><center></td>';
        }

          html+='<td><center><b>'+total+'</b><center></td><td></td></tr>';
        $('#body').html(html);
        if(data.pengajuan.status_pengajuan == '-1'){
          $('#ajukan').removeClass('btn-warning');
          $('#ajukan').removeClass('btn-success');
          $('#ajukan').addClass('btn-primary');
          $('#ajukan').html('<i class="fa fa-send"></i> Ajukan ACC');
        }
        else if(data.pengajuan.status_pengajuan == '0'){
          $('#ajukan').removeClass('btn-primary');
          $('#ajukan').removeClass('btn-success');
          $('#ajukan').addClass('btn-warning');
          $('#ajukan').html('<i class="fa fa-clock-o"></i> Menunggu ACC');
        }
        else{
          $('#ajukan').removeClass('btn-primary');
          $('#ajukan').removeClass('btn-warning');
          $('#ajukan').addClass('btn-success');
          $('#ajukan').html('<i class="fa fa-print"></i> Export Data');
        }
        status = data.pengajuan.status_pengajuan;
        url_print = data.pengajuan.id;
      },
    error: function(jqXHR, textStatus, errorThrown)
    {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
          });

  }*/
  function getData(){


    $.ajax({
      url: '<?php echo base_url("dosen/Laporanlkd/getData");?>',
      data: {'id_periode':id_periode},
      type: 'POST',
      // THIS MUST BE DONE FOR FILE UPLOADING

      dataType: "JSON",
      success: function(data){
        console.log(data);
        var html='',rowspan,td='',baris = 0;
        var i = 1;

        for(key in data.tanggal){
          rowspan = data.tanggal[key].length;
          html += '<tr>';

          for(var j = 0; j < rowspan; j++){
            td='';
            baris=0;
            for(var k=0; k < arrJam.length; k++){
              if(data.tanggal[key][j].id_kategori == arrJam[k]){
                td += '<td><center>'+data.tanggal[key][j].total+'</center></td>';
                baris = data.tanggal[key][j].total;

              }
              else{
                td += '<td><center>-</center></td>';
              }

            }
            td += '<td><center>'+baris+'</center></td>';


if(j==0){
  html+= '            <td rowspan="'+rowspan+'" style="text-align:center;vertical-align:middle;">'+(i++)+'</td>'+
'            <td rowspan="'+rowspan+'" style="text-align:center;vertical-align:middle;">'+key+'</td>'+
''+
'                <td>'+data.tanggal[key][j].kegiatan+'</td>'+
'                <td>'+data.tanggal[key][j].jam_awal+'-'+data.tanggal[key][j].jam_akhir+'</td>'+td;
if(data.pengajuan.status_pengajuan == '-1')
html+='                <td rowspan="'+rowspan+'" align="center" style="vertical-align:middle;"><a href="<?php echo base_url()."dosen/Laporanlkd/edit?q="?>'+data.id[i-2]+'" target="_blank" class="btn btn-xs btn-primary" type="button" name="button"> <i class="fa fa-edit"></i> edit</a></td>';
else
html+='                <td rowspan="'+rowspan+'" align="center" style="vertical-align:middle;"><button type="button" class="btn btn-xs btn-primary" type="button" name="button" disabled> <i class="fa fa-edit"></i> edit</a></td>';

}
else{
html+='              <tr>'+
'                <td>'+data.tanggal[key][j].kegiatan+'</td>'+
'                <td>'+data.tanggal[key][j].jam_awal+'-'+data.tanggal[key][j].jam_akhir+'</td>'+td+
'              </tr>';
}


}
html+='          </tr>';

        }
        if(data.tanggal.length == 0)
          html='<tr><td colspan="'+(arrJam.length+6)+'"><center><b>Data Kosong<b></center></td></tr>">';
        html+='<tr><td colspan="4" style="text-align:center;vertical-align:middle;"><b>Jumlah</b></td>';
        var color;
        var nilai,total=0;
        for(var i=0; i<arrJam.length; i++){
          if(data.jam[arrJam[i]] == null){
            nilai = 0;
          }
          else {
            nilai = data.jam[arrJam[i]];
          }
          total+=nilai;
          html+='<td><center><b>'+nilai+'<b><center></td>';
        }

          html+='<td><center><b>'+total+'</b><center></td><td></td></tr>';
        $('#body').html(html);
        if(data.pengajuan.status_pengajuan == '-1'){
          $('#ajukan').removeClass('btn-warning');
          $('#ajukan').removeClass('btn-success');
          $('#ajukan').removeClass('hidden');
          $('#ajukan').addClass('btn-primary');
          $('#ajukan').html('<i class="fa fa-send"></i> Ajukan ACC');
        }
        else if(data.pengajuan.status_pengajuan == '0'){
          $('#ajukan').removeClass('btn-primary');
          $('#ajukan').removeClass('btn-success');
          $('#ajukan').removeClass('hidden');
          $('#ajukan').addClass('btn-warning');
          $('#ajukan').html('<i class="fa fa-clock-o"></i> Menunggu ACC');
        }
        else if(data.pengajuan.status_pengajuan == '1'){
          $('#ajukan').removeClass('btn-primary');
          $('#ajukan').removeClass('btn-warning');
          $('#ajukan').removeClass('hidden');
          $('#ajukan').addClass('btn-success');
          $('#ajukan').html('<i class="fa fa-print"></i> Export Data Mingguan');
        }
        else{
          $('#ajukan').addClass('hidden');
        }
        status = data.pengajuan.status_pengajuan;
        url_print = data.pengajuan.id;
      },
    error: function(jqXHR, textStatus, errorThrown)
    {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
          });

  }
</script>
