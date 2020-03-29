<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Home</title>

    <link rel="canonical" href="navbar-fixed.htm">

    <!-- Bootstrap core CSS -->
    <link href="assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- font awesome -->
    <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css">

    <!-- my css -->
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
  <body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container">
    <a class="navbar-brand" href="navbar-fixed.htm#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link" href="navbar-fixed.htm#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="dropdown-1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown-1">
            <a class="dropdown-item" href="#">Kategori</a>
            <a class="dropdown-item" href="#">Produk</a>
            <a class="dropdown-item" href="#">Order</a>
        </div>
        </li>
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item">
        <a href="" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
        </li>
        <?php if(!$this->session->userdata('is_login')) : ?>
        <li class="nav-item">
        <a href="<?= base_url('login') ?>" class="nav-link">Login</a>
        </li>
        <li class="nav-item">
        <a href="<?= base_url('register') ?>" class="nav-link">Register</a>
        </li>
        <?php else : ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-capitalize" id="dropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $this->session->userdata('name')?>
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdown-2">
            <a class="dropdown-item" href="#">Profile</a>
            <a class="dropdown-item" href="#">Orders</a>
            <a class="dropdown-item" href="<?= base_url('logout') ?>">Logout</a>
        </div>
        </li>
        <?php endif ;?>
    </ul>
    </div>
    </div>
</nav>

<!-- content -->
<?php $this->load->view($pages); ?> 
<!-- end content -->

<script src="assets/libs/jquery/jquery-3.4.1.min.js" ></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
