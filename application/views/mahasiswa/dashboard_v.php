
  <!-- content -->
    <style media="screen">
      .icon-size{
        font-size: 30px !important;
        opacity: 0.6;
      }
    </style>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                    </ol>
                </div>
            </div>

            <style media="screen">
            .crop {
              width: 120px;
              height: 160px;
              overflow: hidden;
            }

            /* img {
                max-width: 100%;
                max-height: 100%;
            } */
            </style>

            <div class="wrapper wrapper-content">
              <div class="row">
                <div class="col-lg-6">
                  <div class="ibox float-e-margins" id="ibox1">
                      <div class="ibox-title">
                          <h5>BERITA DAN PENGUMUMAN</h5>
                      </div>
                    <div class="ibox-content">
                      <div class="sk-spinner sk-spinner-double-bounce">
                        <div class="sk-double-bounce1"></div>
                        <div class="sk-double-bounce2"></div>
                      </div>
                      <input type="text" class="form-control input-sm m-b-xs" id="filter"
                           placeholder="Cari Pengumuman...">
                      <table class="footable table table-stripped" data-page-size="4" data-filter=#filter>
                          <thead>
                          <tr>
                          </tr>
                          </thead>
                          <tbody>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a data-toggle="modal" data-target="#modalberita">PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS TEKNIK SIPIL</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a href="#">PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS HUKUM</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a href="#">PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS KEDOKTERAN</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a href="#">PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS SENI</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a href="#">PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS BISNIS ADMINISTRASI</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                            <tr class="gradeX">
                                <td>
                                  <div style="width:100px;height:100px;overflow:hidden">
                                  <img src="<?php echo base_url()."assets"?>/img/thumbnail-file.png" alt="news-img" style="width:100%;height:185%;"/>
                                </div>
                                </td>
                                <td> <a href="#">PENGUMUMAN PENTING TERKAIT ATURAN UTS SEMESTER GANJIL TAHUN AKADEMIK 2017/2018</a> <br ><small>date: 27-01-2018</small></td>
                            </tr>
                          </tbody>
                          <tfoot>
                          <tr>
                              <td colspan="5">
                                  <ul class="pagination pull-right"></ul>
                              </td>
                          </tr>
                          </tfoot>
                      </table>
                  </div>
                </div>
                </div>
                <div class="col-lg-6">
                  <div class="ibox float-e-margins">
                      <div class="ibox-title">
                          <h5>Data</h5>
                      </div>
                      <div class="ibox-content">
                        <!-- <div class="sk-spinner sk-spinner-double-bounce">
                          <div class="sk-double-bounce1"></div>
                          <div class="sk-double-bounce2"></div>
                        </div> -->
                        <div class="row">
                          <div class="col-md-4">
                          <img class="crop" src="<?php echo base_url()."assets" ?>/img/profile3x4.jpg" alt="foto_profil">
                        </div>
                        <div class="col-md-8">
                          <h2>ABDUL KARIM</h2>
                          <h4>123456789</h4></p>
                          <h4>labeddu@gmail.com</h4>
                          <br ><br >
                          <button class="btn btn-sm btn-primary pull-right" type="button" name="button">Edit</button>
                        </div>
                        </div>
                      </div>
                  </div>
                  <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Terakhir Login</h5>
                        </div>
                        <div class="ibox-content">
                            <table class="table table-hover no-margins">
                                <thead>
                                <tr>
                                    <th>Akun</th>
                                    <th>Date</th>
                                    <th>User</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><small>Dosen</small> </td>
                                    <td><i class="fa fa-clock-o"></i> 12:01am</td>
                                    <td>11223</td>
                                </tr>
                                <tr>
                                    <td><small>Mahasiswa</small> </td>
                                    <td><i class="fa fa-clock-o"></i> 11:24am</td>
                                    <td>112245</td>
                                </tr>
                                <tr>
                                    <td><small>Mahasiswa</small> </td>
                                    <td><i class="fa fa-clock-o"></i> 10:38am</td>
                                    <td>112239</td>
                                </tr>
                                <tr>
                                    <td><small>Mahasiswa</small> </td>
                                    <td><i class="fa fa-clock-o"></i> 08:13am</td>
                                    <td>112334</td>
                                </tr>
                                <tr>
                                    <td><small>Mahasiswa</small> </td>
                                    <td><i class="fa fa-clock-o"></i> 11:39pm</td>
                                    <td>112299</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <style media="screen">
            .responsive {
                width: 100%;
                height: auto;
              }
            </style>

            <!-- modal window -->
            <div class="modal inmodal fade" id="modalberita" tabindex="-1" role="dialog"  aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                  <h4>PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS TEKNIK SIPIL</h4><br >
                              </div>
                              <div class="modal-body">
                                <p>PEMBEKALAN PENGAWAS UJIAN TENGAH SEMESTER (UTS) SEMESTER GENAP 2017/2018 FAKULTAS TEKNIK ELEKTRO Seluruh Pengawas Ujian Tengah Semester (UTS) Genap 2017/2018 Fakultas Teknik Elektro wajib menghadiri Pembekalan Pengawas Ujian yang akan dilaksanakan pada : Hari, Tanggal : Jum???at, 2 Maret 2018 Waktu	: 15.30 ??? 17.30 WIB Tempat	: Gedung Barung Ruang N314 Sehubungan dengan pentingnya acara ini, diharapkan dapat hadir tepat waktu . Demikian untuk diperhatikan dan dilaksanakan.</p>
                                <div class="lightBoxGallery">
                                <a href="<?php echo base_url()."assets" ?>/img/thumbnail-file.png" title="attachment" data-gallery="">
                                <center><img src="<?php echo base_url()."assets" ?>/img/thumbnail-file.png" alt="attachment_img" class="responsive"></a>
                                </div>
                              </div>
                          </div>
                      </div>
                  </div>

      <script>
      $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
      setTimeout(function () {
        $('#ibox1').children('.ibox-content').toggleClass('sk-loading').visible();
      }, 10000);
        // $(function(){
            // $('#toggleSpinners').on('click', function(){
            // })
        // })
    </script>
