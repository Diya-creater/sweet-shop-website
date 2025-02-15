<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>General Dashboard &mdash; Stisla</title>
  <?php $this->load->view('layouts/include_css'); ?>

  
</head>

<body>
<?php $this->load->view('layouts/include_js'); ?>

  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle">
            <a href="<?= base_url('admin/admin_login_controller'); ?>" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle ">Login</a>
            
          </li>
          <li class="dropdown dropdown-list-toggle">
            <a href="<?= base_url('admin/admin_register_controller'); ?>" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">Register</a>
            
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Shreeji Namkeens</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
            <li><a class="nav-link" href="<?=base_url('admin_sliders')?>"><i class="far fa-square"></i> <span>Slider</span></a></li>
            
            <li class="menu-header">Starter</li>
            <li><a class="nav-link" href="<?=base_url('admin_categories')?>"><i class="far fa-square"></i> <span>Category</span></a></li>
              <ul>
</ul>
            </li>
            <li>
            <li><a class="nav-link" href="<?=base_url('admin_subcategories')?>"><i class="far fa-square"></i> <span>Subcategory</span></a></li>
</li>
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
            <li><a class="nav-link" href="<?=base_url('admin_product')?>"><i class="far fa-square"></i> <span>Products</span></a></li>
            <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Slider</span></a></li>

        </ul>
</div>


