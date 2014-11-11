<?php

$btn_1 = $btn_2 = $btn_3 = $btn_4 = $btn_5 = $btn_6 = $white_bg = "";

switch($page_title){
  case 'Dashboard':
  $btn_1 = "active";
  $white_bg="white-bg";
  break;
  case 'Support':
  $btn_2 = "active";
  break;
  case 'Billing':
  $btn_3 = "active";
  break;
  case 'Get Ringio':
  $btn_4 = "active";
  break;
}

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Ringio - <?php echo $page_title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="style/main.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="js/ie10-viewport-bug-workaround.js"></script>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

 <!-- Static navbar -->
 <div class="navbar navbar-static-top navbar-top-row navbar-ringio" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <div>
          <img alt="Ringio Home" src="images/ringio-logo.png">
        </div>
      </a>
    </div>
    <p class="navbar-text" data-description="company-name">Company Name</p>
    <p class="navbar-text" data-description="phone-number">888-727-5778</p>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <span class="ringio-icon status"></span>
        </li>
        <p class="navbar-text">billing@ringio.com</p>
        <li><button type="button" class="btn btn-default navbar-btn">Log Out</button></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<div class="navbar navbar-static-top navbar-bottom-row navbar-ringio <?php echo  $white_bg; ?>" role="navigation">
  <div class="container">
    <div class="navbar-collapse collapse">
      <ul class="nav nav-justified nav-ringio">
        <li class="<?php echo $btn_1; ?>"><a href="index.php"><span class="ringio-icon icon-dashboard"></span>Dashboard</a></li>
        <li class="<?php echo $btn_2; ?>"><a href="support.php"><span class="ringio-icon icon-sound"></span>Support</a></li>
        <li class="<?php echo $btn_3; ?>"><a href="billing.php"><span class="ringio-icon icon-credit"></span>Billing</a></li>
        <li class="<?php echo $btn_4; ?>"><a href="get-ringio.php"><span class="ringio-icon icon-download"></span>Get Ringio</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- End Navbar -->

<!-- Begin Main Content Container -->

<div class="container <?php echo $white_bg; ?>">