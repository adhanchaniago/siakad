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
    </style>

  <?php
    $cek = $this->session->userdata('status');
    if($cek == 'admin'){
      $this->load->view('admin/sidebar_v');
    }elseif ($cek == 'mhs') {
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
                    <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="mailbox.html">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="profile.html">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="grid_options.html">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <div class="text-center link-block">
                            <a href="notifications.html">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
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
