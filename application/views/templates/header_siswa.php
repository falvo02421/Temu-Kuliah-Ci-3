<!DOCTYPE html>
<html lang="en">
<head>
  <title>Podcast &mdash; Colorlib Website Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900"> 
  <link rel="stylesheet" href="./include/main-theme/asset-front/fonts/icomoon/style.css">

  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/magnific-popup.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/jquery-ui.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/owl.carousel.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/owl.theme.default.min.css') ?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/aos.css') ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/asset-front/css/style.css') ?>">

</head>
<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

<header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="row align-items-center">


          <div class="col-3">
            <h1 class="site-logo"><a href="index.html" class="h2">Temu Kuliah<span class="text-primary">.</span> </a></h1>
          </div>
          <div class="col-9">
            <nav class="site-navigation position-relative text-right text-md-right" role="navigation">



              <div class="d-block d-lg-none ml-md-0 mr-auto"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><?php echo $this->session->userdata('username'); ?></li>
                <li><a href="<?php echo base_url().'index.php/page/logout'?>">Logout</a></li>
              </ul>
            </nav>


          </div>

        </div>
      </div>
      
    </header>