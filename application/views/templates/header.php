<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>xTU</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css" />
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" /> -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <script type="text/javascript" src="/node_modules/bulma-extensions/bulma-carousel/dist/bulma-carousel.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
</head>
<body>
    <!-- Navbar -->
    <div id="header">
        <div class="container">
            <a href="#home"><div id="logo"><?= "<img src='https://dl.dropbox.com/s/tupetot53ck72aw/logo_xTU.png' alt='xTU' width='60px'>" ?></div></a>
            <ul>
                <li><a style="opacity: 0; background-color: white;" href="#">.........</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Categories <i class="fas fa-angle-down"></i></a>
                        <div class="dropdown-content">
                        <a href="#">Food</a>
                        <a href="#">Café</a>
                        <a href="#">Store</a>
                        <a href="#">Pharmacy</a>
                        <a href="#">Others</a>
                        </div>
                </li>
                <li style="float: right;"><a href="#search">Search</a></li>
                <li style="float: right;"><a href="#login">Login</a></li>
            </ul>
        </div>
    </div>
    <!-- Navbar End -->