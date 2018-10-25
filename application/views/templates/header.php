<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>xTU</title>
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css" /> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" /> -->
  <link rel="stylesheet" href="https://dl.dropbox.com/s/v0lf8m37eqhr1pd/bulma.css">
  <link rel="stylesheet" href="https://dl.dropbox.com/s/8ywoxsa12fk3q52/custom.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 480 || document.documentElement.scrollTop > 480) {
    document.getElementById("navbarchange").style.boxShadow = "0 2px 3px rgba(10, 10, 10, 0.1), 0 0 10px 1px rgba(10, 10, 10, 0.3)";
  } else {
    document.getElementById("navbarchange").style.boxShadow = "";
  }
}
</script>
</head>
<body>

<div id="container">
  
  <nav class="navbar is-fixed-top" role="navigation" aria-label="main navigation" id="navbarchange">
  <div class="container">
    <!-- LOGO -->
      <div class="navbar-brand">
        <a class="navbar-item" href="<?php echo base_url(); ?>">
          <img src="https://i.imgur.com/SAk6kQy.png" >
        </a>
        </div>
    <!-- Dropdown -->
        <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link" href="#">
          Categories
        </a>
        <div class="navbar-dropdown is-boxed">
          <a class="navbar-item" href="#">
            Food
          </a>
          <a class="navbar-item" href="#">
            Café
          </a>
          <!-- <hr class="navbar-divider"> -->
          <a class="navbar-item" href="#">
            Store
          </a>
          <a class="navbar-item" href="#">
            Pharmacy
          </a>
          <!-- <hr class="navbar-divider"> -->
          <a class="navbar-item" href="#">
            Others
          </a>
        </div>
      
      </div>

    
      <!-- Login -->
        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-white" href="<?php echo base_url(); ?>login">
                Login
              </a>
              
              <div class="navbar-divider"></div>

              <a class="button is-info is-rounded" style="height: 50px; width: 50px; border-radius: 50px;" href="<?php echo base_url(); ?>search"> 
                <i class="fa fa-search fa-lg"></i>

                </a>
              </a>
            </div>
          </div>
        </div>
      </div>
      </div>
    </nav>
  
</div>