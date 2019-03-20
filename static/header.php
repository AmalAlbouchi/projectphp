<?php
include ($_SERVER['DOCUMENT_ROOT'].'/projectphp/static/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PhotoBomb</title>

  <!-- Bootstrap core CSS -->
  <link href="/projectphp/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/projectphp/main.css" rel="stylesheet">

  <!--font awesome-->
  <link href="/projectphp/font/css/all.min" rel="stylesheet"> <!--load all styles -->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="/projectphp">
        <img src="/projectphp/images/logo-white.png">
        <span class="brand">PhotoBomb</span>
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if ($page==1) echo "active";?>">
            <a class="nav-link" href="/projectphp">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php if ($page==2) echo "active";?>">
            <a class="nav-link" href="/projectphp/pages/about.php">About</a>
          </li>
          <li class="nav-item <?php if ($page==3) echo "active";?>">
            <a class="nav-link" href="/projectphp/pages/contact.php">Contact</a>
          </li>
          <li class="nav-item <?php if ($page==4) echo "active";?>">
            <a class="nav-link" href="/projectphp/pages/shop.php">Shop</a>
          </li>
          <?php if ($page<5) 
          {
            echo '<li class="nav-item account-bt">
            <a href="/projectphp/pages/loginform.php">Login
            <i class="fas fa-user login"></i></a>
            </li>';
            echo '<li class="nav-item account-bt">
            <a href="/projectphp/pages/signupform.php">Sign Up
            <i class="far fa-user sign"></i></a>
            </li>';}
            ?>
        </ul>
      </div>
    </div>
  </nav>
