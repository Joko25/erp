<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MilkMoment | <?=$title?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>assets/class/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/class/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/class/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
  <!-- <link rel="stylesheet" href="<?=base_url();?>assets/class/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/class/datatables.net/css/jquery.dataTables.min.css"> -->
  <link rel="stylesheet" href="<?=base_url();?>assets/class/datatables/DataTables-1.10.18/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/class/datatables/DataTables-1.10.18/css/jquery.dataTables.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

  <!-- jQuery 3 -->
  <script src="<?=base_url();?>assets/class/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?=base_url();?>assets/class/bootstrap/dist/js/bootstrap.min.js"></script>

  <script type="text/javascript">
   //  jQuery.extend({
   //  handleError: function( s, xhr, status, e ) {
   //      // If a local callback was specified, fire it
   //      if ( s.error )
   //          s.error( xhr, status, e );
   //      // If we have some XML response text (e.g. from an AJAX call) then log it in the console
   //      else if(xhr.responseText)
   //          console.log(xhr.responseText);
   //  }
   // });
  </script>
  <script src="<?=base_url();?>assets/class/AjaxFileUpload/ajaxfileupload.js"></script>
  <!-- DataTables -->
  <!-- <script src="<?=base_url();?>assets/class/datatables.19/datatables.min.js"></script> -->
  <!-- <script src="<?=base_url();?>assets/class/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>assets/class/datatables.net-bs/js/dataTables.bootstrap.min.js"></script> -->
  <script src="<?=base_url();?>assets/class/datatables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url();?>assets/class/datatables/DataTables-1.10.18/js/dataTables.bootstrap.min.js"></script>

  <!-- SlimScroll -->
  <script src="<?=base_url();?>assets/class/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?=base_url();?>assets/class/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url();?>assets/js/demo.js"></script>
  <script src="<?=base_url();?>assets/js/ngerp.js"></script>
  <!-- <script src="<?=base_url();?>assets/js/json.js"></script> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b></span>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Milk</b>Moment</span> -->
      <span class="logo-lg"><img src="<?=base_url()?>assets/img/logo_putih.png" width="50%"></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/img/<?=$img?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$full_name?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/img/<?=$img?>" class="img-circle" alt="User Image">

                <p>
                  <?=$full_name?>
                  <small>as <?=$as?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>