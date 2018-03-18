
  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Pengajuan Rekapitulasi Kehadiran</h2>
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
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content" id="item">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <div class="row">
                        <div class="col-md-2">
                          <h2>Form</h2>
                        </div>
                        <div class=" col-md-3" style="margin-top:5px;margin-bottom:-10px;">
                          <label for="semester">Filter Bulanan</label>
                          <div class="form-group">
                            <select id="bulan" class="form-control">
                              <?php foreach ($bulan->result() as $row){
                                echo "<option value='$row->kode'>$row->bulan</option>";

                              }
                              ?>
                            </select>
                          </div>
                        </div>
                  </div>
                      <div class="hr-line-dashed"></div>
                    <form class="form-horizontal">
                      <div class="table-responsive">
                        <table id="myTable" class="table table-bordered">

                        </table>
                    </div>
                <br >
                <center>
                  <button type="button" id="ajukan" class="btn btn-w-m btn-primary" onclick="pengajuan()"><i class="fa fa-send"></i> Ajukan ACC</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

<script>
var bulan = $('#bulan').val(), total, keterangan,cek,status,url_print;
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
                 url : "<?php echo site_url('dosen/Rekapkehadiran/pengajuan')?>",
                 type: "POST",
                 data: {'kode':bulan},
                 dataType: "JSON",
                 success: function(data)
                 {
                   if(data.status=='berhasil'){

                     status = "0";
                     swal("Updated!", data.message, "success");
                     getData();
                   }
                   else{
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
      else if(status == 1){
        window.open("<?php echo base_url().'dosen/PrintLKD/bulanan?q='?>"+url_print, '_blank');

      }

  }
  $('#bulan').change(function(){
    bulan = $('#bulan').val();
    getData();
  });
  getData();
  function getData(){
    $.ajax({
         url : "<?php echo site_url('dosen/Rekapkehadiran/getData')?>",
         type: "POST",
         data: {'kode':bulan},
         dataType: "JSON",
         success: function(data)
         {
           console.log(data);
           var n = data.bulan.length;
           keterangan = 'Lengkap';
           total = 0;
           cek=true;
           var html = '<thead>'+
'                            <tr>'+
'                              <th rowspan="2" style="text-align:center;vertical-align:middle;width:10px;">No</th>'+
'                              <th rowspan="2" style="text-align:center;vertical-align:middle;width:25%;">Nama/NIP/Jabatan</th>';
          for(var i=0; i < n; i++){
            html+='<th><center>Minggu '+(i+1)+'</center></th>';
          }
            html+='                              <th rowspan="2" style="text-align:center;vertical-align:middle;width:15%;">Keterangan</th>'+
'                            </tr>'+
'                            <tr>';
          for(var i=0; i < n; i++){
            html+='                              <td><center>Akumulasi Jam Kerja</center></td>';
          }


html+='                            </tr>'+
'                          </thead>'+
'                          <tbody>'+
'                            <tr>'+
'                              <td>1</td>'+
'                              <td>'+data.dosen.nama+' / NIP. '+data.dosen.nip+' / '+data.dosen.jabatan+'</td>';
            for(var i=0; i < n; i++){
              if(data.bulan[i].total!=null){
                html+='                              <td><center>'+data.bulan[i].total+'</center></td>';
                total++;
              }
              else{
                html+='                              <td>-</td>';
                cek=false;
              }
              if(data.bulan[i].status_pengajuan!=1)
              {
                cek = false;
                keterangan = 'Belum di-ACC semua';
              }
            }
            if(total<4){
              cek = false;
              keterangan = 'Jumlah pengajuan masih kurang';
            }
html+='                              <td>'+keterangan+'</td>'+
'                            </tr>'+
'                          </tbody>';
if(data.pengajuan == null){
status = '-1'
}
else{
  status = data.pengajuan.status_pengajuan;
  url_print = data.pengajuan.id;
}
if(status == '-1'){
  $('#ajukan').removeClass('btn-warning');
  $('#ajukan').removeClass('btn-success');
  $('#ajukan').addClass('btn-primary');
  $('#ajukan').html('<i class="fa fa-send"></i> Ajukan ACC');
}
else if(status == '0'){
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
$('#myTable').html(html);
if(!cek){
  $('#ajukan').attr("disabled",true);
}
else{
  $('#ajukan').attr("disabled",false);
}
         },
             error: function (jqXHR, textStatus, errorThrown)
             {
               console.log(jqXHR);
         console.log(textStatus);
         console.log(errorThrown);
             }
       });

  }
</script>
