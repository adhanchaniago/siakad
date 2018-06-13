
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
                <div class="col-sm-8">
                    <div class="title-action">
                        <!-- <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a> -->
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content">
              <div class="ibox-title">
                <div class="row">
                <div class=" col-md-2" style="margin-top:5px;margin-bottom:-10px;">
                  <label for="semester">Filter Bulan</label>
                  <div class="form-group">
                    <select id="bulan" class="form-control">
                      <option value="0" selected>-- Pilih Bulan --</option>
                      <?php foreach ($bulan->result() as $row){
                        echo "<option value='$row->kode'>$row->bulan</option>";

                      }
                      ?>
                    </select>

                  </div>
                </div>
                <div class=" col-md-2" style="margin-top:5px;margin-bottom:-10px;">
                  <label for="semester">Filter Fakultas</label>
                  <div class="form-group">
                    <select id="fakultas" class="form-control">
                      <option value="0" selected>-- Pilih Fakultas --</option>
                      <?php foreach ($fakultas->result() as $row){
                        echo "<option value='$row->id'>$row->nama</option>";

                      }
                      ?>
                    </select>

                  </div>
                </div>
                <div class="col-md-4 pull-right">
                    <div class="col-md-5" style="margin-top:30px;">
                      <button type="button" class="btn btn-sm btn-info" onclick="exportPengajuan()"><i class="fa fa-print"></i> Export Bulanan</button>
                    </div>
                    <div class="col-md-7"  style="margin-top:30px;">
                      <button type="button" class="btn btn-sm btn-success" onclick="accSemua()"><i class="fa fa-check-circle"></i> ACC Semua Pengajuan</button>
                    </div>
                </div>
                <!-- <div class=" col-md-4" style="margin-top:10px;margin-bottom:-10px;margin-right:-20px;float:right">
                  <button type="button" class="btn btn-info" onclick="exportPengajuan()"><i class="fa fa-print"></i> Export Bulanan</button>
                  <button type="button" class="btn btn-success" onclick="accSemua()"><i class="fa fa-check-circle"></i> ACC Semua Pengajuan</button>
                </div> -->
              </div>
              </div>
              <div class="ibox-content">
                <br>
              <div class="table-responsive">
                <table id="mytable" class="table table-striped table-bordered table-hover" >
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Lengkap</th>
                    <th>Bulan</th>
                    <th>Waktu Pengajuan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                </table>
                    </div>
                </div>
            </div>
            <div class="modal inmodal fade" id="myModalEdit" tabindex="-1" role="dialog"  aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content animated fadeInDown">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Kegiatan</h4>
                            <!-- <small>Tanggal Pengajuan: 06/03/2018</small> -->
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal">
                            <table id="tableDetail" class="table table-bordered">

                            </table>
                            <center>
                              <button type="button" id="acc" class="btn btn-success" onclick="set(1)"><i class="fa fa-check-circle"></i> ACC Kegiatan</button>
                              <button type="button" id="reset" class="btn btn-danger" onclick="set(-1)"><i class="fa fa-refresh"></i> Reset Kegiatan</button>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Kembali</button>
                            <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
                        </div>
                      </form>
                    </div>
                </div>
            </div>

      <script>
      var kode_bulan =   $('#bulan').val(),id_bulanan, status,fakultas=0;
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

                $('#bulan').change(function(){
                  kode_bulan=$(this).val();
                  loadData();
                });
                $('#fakultas').change(function(){
                  fakultas=$(this).val();
                  loadData();
                });
                loadData();
                function loadData(){
      $('#mytable').DataTable().destroy();
      $("#mytable").DataTable({
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
                    ajax: {"url": "<?php echo base_url("rektor/Datalkd/json/");?>", "type": "POST","data":{

                    "kode":kode_bulan,
                    "fakultas":fakultas
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
                        {"data": "bulan"},
                        {"data": "waktu_pengajuan"},
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
    }
    function aksi(id){
      id_bulanan = id;
      $.ajax({
           url : "<?php echo site_url('rektor/Datalkd/getData')?>",
           type: "POST",
           data: {'id':id},
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
    //url_print = data.pengajuan.id;
  }
  if(status == '-1'){
    $('#acc').removeClass('btn-warning disable');
    $('#acc').addClass('btn-success');
    $('#acc').html('<i class="fa fa-check-circle"></i> ACC Kegiatan');
    $('#reset').attr("disabled",true);
  }
  else if(status == '0'){
    $('#acc').removeClass('btn-warning disabled');
    $('#acc').addClass('btn-success');
    $('#acc').html('<i class="fa fa-check-circle"></i> ACC Kegiatan');
    $('#reset').attr("disabled",false);
  }
  else{
      $('#reset').attr("disabled",false);
      $('#acc').removeClass('btn-success');
      $('#acc').addClass('btn-warning');
      $('#acc').html('<i class="fa fa-minus-circle"></i> Telah di-ACC');
  }
  $('#tableDetail').html(html);

  // $('#myModalEdit').show();
           },
               error: function (jqXHR, textStatus, errorThrown)
               {
                 console.log(jqXHR);
           console.log(textStatus);
           console.log(errorThrown);
               }
         });
    }
    function set(tipe){
      if(status!=tipe){
      $.ajax({
           url : "<?php echo site_url('rektor/Datalkd/update')?>",
           type: "POST",
           data: {'id':id_bulanan,'action':tipe},
           dataType: "JSON",
           success: function(data)
           {
             if (data.status=='berhasil') {
               swal("Berhasil!", data.message, "success");
             }else {
               swal("Gagal!", data.message, "error");
             }
             if(tipe == '-1'){
               $('#acc').removeClass('btn-warning disable');
               $('#acc').addClass('btn-success');
               $('#acc').html('<i class="fa fa-check-circle"></i> ACC Kegiatan');
               $('#reset').attr("disabled",true);
             }

             else{
                 $('#reset').attr("disabled",false);
                 $('#acc').removeClass('btn-success');
                 $('#acc').addClass('btn-warning');
                 $('#acc').html('<i class="fa fa-minus-circle"></i> Telah di-ACC');
             }
             status = tipe;
             loadData();
           },
               error: function (jqXHR, textStatus, errorThrown)
               {
                 console.log(jqXHR);
           console.log(textStatus);
           console.log(errorThrown);
               }
         });
       }
    }
    function accSemua(){
      swal({
              title: "Anda yakin?",
              text: "Semua pengajuan pada periode terpilih akan di-ACC",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#1ab394",
              confirmButtonText: "Ya, ajukan!",
              closeOnConfirm: false
          }, function () {
            $.ajax({
                 url : "<?php echo site_url('rektor/Datalkd/accSemua')?>",
                 type: "POST",
                 data: {"kode":kode_bulan},
                 dataType: "JSON",
                 success: function(data)
                 {
                   if (data.status=='berhasil') {
                     swal("Berhasil!", data.message, "success");
                   }else {
                     swal("Gagal!", data.message, "error");
                   }
                   loadData();
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
    function exportPengajuan(){
      if(kode_bulan==0){
        swal("", "Pilih bulan terlebih dahulu!", "error");
      }
      else if(fakultas==0){
        swal("", "Pilih fakultas terlebih dahulu!", "error");
      }
      else{
        window.open("<?php echo base_url().'PrintLKD/rektor?bulan='?>"+kode_bulan+'&fakultas='+fakultas, '_blank');
      }
    }
      </script>
