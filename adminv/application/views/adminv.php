<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="<?php echo base_url();?>asset/favicon.ico">
<title>Venice Bangla Guest House</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>asset/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>asset/bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url();?>asset/css/icon-picker.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>asset/css/starter-template.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
<script src="<?php echo base_url();?>asset/js/ie-emulation-modes-warning.js"></script>

<script src="<?php echo base_url();?>asset/js/jquery.min.js"></script> 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">Venice Bangla Guest House</a> </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url(); ?>">Booking Requests</a></li>
        <li><a href="<?php echo base_url(); ?>vbangla/pricing">Pricing</a></li>
        <li><a href="<?php echo base_url(); ?>vbangla/facility">Facility</a></li>
       <!-- <li><a href="#contact">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello, Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Change Password</a></li>
            <li role="separator" class="divider"></li>
            <li class="bg-danger"><a href="<?php echo base_url(); ?>auth/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
</nav>
<div class="container-fluid">
  <div class="starter-template"> <?php echo $content;?> </div>
</div>
<!-- /.container --> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script> 
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
<script src="<?php echo base_url();?>asset/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo base_url();?>asset/bootstrap-table.js"></script>
<script src="<?php echo base_url();?>asset/js/iconPicker.min.js"></script>
</body>
</html>

