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
  
  <!--fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="/projectphp" style="text-decoration:none">
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
          <?php if ($page<5 && !(isset($_SESSION['username']))) 
          {
            echo '<li class="nav-item account-bt">
            <a href="/projectphp/pages/loginform.php">Login
            <i class="fas fa-user login"></i></a>
            </li>';
            echo '<li class="nav-item account-bt">
            <a href="/projectphp/pages/signupform.php">Sign Up
            <i class="far fa-user sign"></i></a>
            </li>';}
            else if ($page<5 && isset($_SESSION['username'])){         
              echo '<li class="nav-item account-bt">
              <a href="/projectphp/pages/account.php">'.$_SESSION['username'].
              ' <i class="fas fa-user login"></i></a>
              </li>';
            }
            ?>
        </ul>
      </div>
    </div>
  </nav>
