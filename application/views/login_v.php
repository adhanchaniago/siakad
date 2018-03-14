<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login SIAKAD</title>
    <script src="<?php echo base_url()."assets" ?>/js/jquery-3.1.1.min.js"></script>
    <link href="<?php echo base_url(). "assets/css/bootstrap.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url(). "assets/font-awesome/css/font-awesome.css" ?>" rel="stylesheet">

    <link href="<?php echo base_url(). "assets/css/animate.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url(). "assets/css/style.css" ?>" rel="stylesheet">

</head>
<body class="gray-bg">

  <style>
      iframe {
           display: none !important;
      }
  </style>

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Welcome to PORTAL AKADEMIK</h2>
                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <style media="screen">
            .crop {
              width: 79px;
              height: auto;
              overflow: hidden;
            }
            </style>

            <div class="col-md-6">
              <center>
              <img src="<?php echo base_url()."assets" ?>/img/logo-uin.png" class="crop" alt="logo-uin">
            </center><br>
                <div class="ibox-content">

                    <form class="m-t" id="form">
                        <div class="form-group">
                            <input type="text" id="username" name="usr" class="form-control" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="pwd" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="submit" name="masuk" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>
                    </form>
                </div>
            </div>
            <div class="col-md-12 text-right">
              <small>© 2018</small>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright @4nesia
            </div>
        </div>
    </div>

</body>

</html>
<script>
  $('#form').submit(function(){
    var formData = new FormData;
    var username = $('#username').val();
    var password = $('#password').val();
    formData.append('username',username);
    formData.append('password',password);
    $.ajax({
      url: '<?php echo base_url("Login/login");?>',
      data: formData,
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

    return false;
  });
</script>
