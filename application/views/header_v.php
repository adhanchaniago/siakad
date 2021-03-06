<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIAKAD UIN Antasari</title>

    <link href="<?php echo base_url()."assets" ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets" ?>/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/plugins/iCheck/custom.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets" ?>/css/plugins/fullcalendar/fullcalendar.print.css" rel='stylesheet' media='print'>

    <link href="<?php echo base_url()."assets" ?>/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets" ?>/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/datatables.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/plugins/select2/select2.min.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="<?php echo base_url()."assets" ?>/css/plugins/footable/footable.core.css" rel="stylesheet">

    <!-- clockpicker -->
    <!-- <link href="/css/plugins/clockpicker/clockpicker.css" rel="stylesheet"> -->

    <!-- ClockPicker Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets" ?>/dist/bootstrap-clockpicker.min.css">

    <!-- choosen -->
    <link href="<?php echo base_url()."assets" ?>/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link href="<?php echo base_url()."assets" ?>/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <!-- akun dan smt list -->
    <link href="<?php echo base_url()."assets" ?>/css/akun_smt.css" rel="stylesheet">

    <link href="<?php echo base_url()."assets" ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets" ?>/css/style.css" rel="stylesheet">


    <!-- scripts -->

    <!-- Mainly scripts -->
    <script src="<?php echo base_url()."assets" ?>/js/jquery-3.1.1.min.js"></script>
    <!-- <script>$.ajaxPrefilter(function( options, originalOptions, jqXHR ) { options.async = true; });</script> -->
    <script src="<?php echo base_url()."assets" ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/js/plugins/fullcalendar/moment.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()."assets" ?>/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url()."assets" ?>/js/inspinia.js"></script>
    <script src="<?php echo base_url()."assets" ?>/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI  -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- iCheck -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Full Calendar -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- Datatables -->
    <script src="<?php echo base_url()."assets" ?>/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets" ?>/js/plugins/dataTables/datatables.min.js"></script>

    <!-- Select2 -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/select2/select2.full.min.js"></script>

    <!-- Date picker -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/datapicker/bootstrap-datepicker.js"></script>

    <!-- FooTable -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/footable/footable.all.min.js"></script>

    <!-- canvajs -->
    <script src="<?php echo base_url()."assets" ?>/js/canvasjs-2.0.1/canvasjs.min.js"></script>

    <!-- ClockPicker script -->
    <script src="<?php echo base_url()."assets" ?>/dist/bootstrap-clockpicker.min.js"></script>

    <!-- Sweet alert -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Typehead -->
    <script src="<?php echo base_url()."assets" ?>/js/plugins/typehead/bootstrap3-typeahead.min.js"></script>

    <!-- Clock picker -->
    <!-- <script src="/js/plugins/clockpicker/clockpicker.js"></script> -->

    <!-- Vue.js -->
    <!-- <script src="https://unpkg.com/vue"></script> -->


</head>

<body class="">

    <style>
        iframe {
             display: none !important;
        }
        h1,h2,h3,h4,h5,p,th,td,label{
          color: #232323 !important;
        }
        .choose{
          background-color: #1ab394 !important;
          color: white !important;
        }
    </style>

  <?php
    $cek = $this->session->userdata('status');
    if($cek == 'admin'){
      $this->load->view('admin/sidebar_v');
    }elseif ($cek == 'mahasiswa') {
      $this->load->view('mahasiswa/sidebar_v');
    }elseif ($cek == 'dosen') {
      $this->load->view('dosen/sidebar_v');
    }elseif ($cek == 'dekan') {
      $this->load->view('dekan/sidebar_v');
    }elseif ($cek == 'rektor') {
      $this->load->view('rektor/sidebar_v');
    }
  ?>

  <div id="page-wrapper" class="gray-bg">
    <div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <form role="search" class="navbar-form-custom" action="search_results.html">
            <div class="form-group">
                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
            </div>
        </form>
    </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Semester Aktif: <span class="label label-primary">1718/2</span></span>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-user-circle-o"></i>  <span class="label label-primary" id="num"></span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <?php
                    $arr = array();
                    foreach ($_SESSION['roles'] as $key => $value) {
                      if(!in_array($value['status'],$arr)){
                        array_push($arr,$value['status']);
                        echo "<li>
                            <a href='javascript:void(0)' id='".$key."' class='role";
                        if($value['status'] == $_SESSION['status'])
                          echo " choose";
                        echo "'>
                                <div>
                                    <i class='fa fa-user fa-fw'></i> ".$value['status_name']."
                                </div>
                            </a>
                        </li>
                        <li class='divider'></li>";
                      }
                      echo "<script>$('#num').html(".count($arr).")</script>";
                    } ?>
                    <!-- <li>
                        <a href="mailbox.html" class="choose">
                            <div>
                                <i class="fa fa-user fa-fw"></i> Super Admin
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-user fa-fw"></i> Admin Prodi TI
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-user fa-fw"></i> Admin Prodi SI
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li> -->
                </ul>
              </li>
            <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Notif</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            <li>
                <a href="<?php echo base_url()."logout" ?>">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>
        </ul>

    </nav>
    </div>
<script type="text/javascript">
  $('.role').on("click", function(){
    var type = $(this).attr('id');
    $.ajax({
      url: '<?php echo base_url("Login/selectRole/");?>'+type+'/0',
      type: 'POST',
      // THIS MUST BE DONE FOR FILE UPLOADING
      contentType: false,
      processData: false,
      dataType: "JSON",
      success: function(data){
        if(data.status=='berhasil')
          location.reload();
        else
          alert(data.message);
      },
    error: function(jqXHR, textStatus, errorThrown)
    {
      console.log(jqXHR);
      console.log(textStatus);
      console.log(errorThrown);
    }
          });
  });
</script>
