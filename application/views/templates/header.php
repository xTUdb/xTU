<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>xTU</title>
  <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css" /> -->
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
    <div class="navbar-box">
        <div class="container">
            <div class="nav-left">
                <img id="title-logo" src="https://i.imgur.com/mZfzt9s.png" alt="1024x545">
                <div class="nav-list dd-h">Categories <i class="fas fa-angle-down"></i>
            
            <!-- Dropdown container -->
            <div class="dropdown-box">
                <div class="dropdown-subcat">
                    <div class="dropdown-subcat-head"><i class="fas fa-utensils"></i> Food & Drink</div>
                    <div class="dropdown-item">
                        <a href=""><img src="https://cdn.icon-icons.com/icons2/881/PNG/512/Hamburger_icon-icons.com_68741.png" alt=""><div class="dd-t">Food</div></a>
                        <a href=""><img src="https://marketplace.canva.com/MACaIUDtCx8/1/thumbnail_large/canva-cafe-icon-concept-MACaIUDtCx8.png" alt=""><div class="dd-t">Café</div></a>
                        <a href=""><img src="https://cdn.icon-icons.com/icons2/881/PNG/512/Cocktail_icon-icons.com_68766.png" alt=""><div class="dd-t">Drink</div></a>
                        <a href=""><img src="https://image.flaticon.com/icons/png/512/138/138307.png" alt=""><div class="dd-t">Stall</div></a>
                    </div>
                </div><!-- END Subcat -->
                <div class="dropdown-subcat">
                    <div class="dropdown-subcat-head"><i class="fas fa-store"></i> Stores</div>
                    <div class="dropdown-item">
                        <a href=""><img src="https://pbs.twimg.com/profile_images/955329141707915265/FzsHnjOp_400x400.jpg" alt=""><div class="dd-t">7-11</div></a>
                        <a href=""><img src="https://i1.wp.com/muchikoro.com/wordpress/wp-content/uploads/2016/07/FamilyMart-300x300.png" alt=""><div class="dd-t">Family Mart</div></a>
                        <a href=""><img src="https://superryu247.files.wordpress.com/2013/04/lawson_logo.jpg" alt=""><div class="dd-t">Lawson 108</div></a>
                        <a href=""><img src="https://www.oikosfamily.co.za/wp-content/uploads/2016/03/store-Icon-1.png" alt=""><div class="dd-t">Others</div></a>
                    </div>
                </div><!-- END Subcat -->
                <div class="dropdown-subcat">
                    <div class="dropdown-subcat-head"><i class="fas fa-user-cog"></i> Services</div>
                    <div class="dropdown-item">
                        <a href=""><img src="https://pbs.twimg.com/profile_images/955329141707915265/FzsHnjOp_400x400.jpg" alt=""><div class="dd-t">7-11</div></a>
                        <a href=""><img src="https://i1.wp.com/muchikoro.com/wordpress/wp-content/uploads/2016/07/FamilyMart-300x300.png" alt=""><div class="dd-t">Family Mart</div></a>
                        <a href=""><img src="https://superryu247.files.wordpress.com/2013/04/lawson_logo.jpg" alt=""><div class="dd-t">Lawson 108</div></a>
                    </div>
                </div><!-- END Subcat -->
            </div><!-- END dropdown container --></div><!-- END dropdown menu -->
            </div><!-- END Nav-left -->

            <div class="nav-right">
                <span class="nav-list">ThammaTrans</span>
                <span class="nav-item nav-user"><i class="fas fa-user-circle nav-icon"></i>
                    <span class="nav-hide-text">&nbsp; Login / Sign up</span>
                </span>
                <span class="nav-item"><i class="fas fa-search fa-lg"></i>
                    <span class="nav-hide-text">&nbsp; Search</span>
                </span>
            </div><!-- END Nav-right -->
        </div><!-- END container -->
    </div>
    <!-- END NAVBAR BOX -->