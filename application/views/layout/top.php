<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  $data = $this->session->userdata();
  
?>
 <?php 

  if($this->session->has_userdata('log_email')){

  $email = $this->session->userdata('log_email');
  $id = $this->session->userdata('id');
  $full_name = $this->session->userdata('full_name');
  $phone = $this->session->userdata('phone');
  $user_type = $this->session->userdata('user_type');
  }else {
    redirect();
  }

?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BAKWATA | HOME</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/stylearyo.css"> -->
    <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/toastr/toastr.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url().'assets/build/style.css';?>">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- For menu -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/build/style.css';?>">

  <!--=========== REGIONS, DISTRICTS AND WARDS AJAX^6=========== -->
  <!--=========== REGIONS, DISTRICTS AND WARDS AJAX^6=========== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
   
</head>

  <!-- ========================================START TOP HEADER BAR========================================= -->
  <!-- ========================================START TOP HEADER BAR========================================= -->
  <!-- ========================================START TOP HEADER BAR========================================= -->

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed" > 

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto" >
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>  -->
      <li class="nav-item">
					<a href="<?php echo base_url().'home/logout/' ?>" class="nav-link">
						<i class="fas fa-sign-out-alt"></i> Log Out</a>
				</li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- ========================================END OF HEADER BAR========================================= -->
  <!-- ========================================END OF HEADER BAR========================================= -->
  <!-- ========================================END OF HEADER BAR========================================= -->


  <!-- ========================================START SIDE BAR ========================================= -->
  <!-- ========================================START SIDE BAR ========================================= -->
  <!-- ========================================START SIDE BAR ========================================= -->

  
  <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <a href="#" class="brand-link" style="color:green; font-weight:bolder; text-align:center;">BAKWATA | HOME</a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel">
          <div class="info">
          <a href="#" class="d-block"> <h4><?php echo $full_name; ?></h4>  </a>
        </div>
      </div>

      <!-- <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- TREE HERE -->
               <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p style="font-weight:bolder; font-size:5mm; color:yellow;">
                Bsmart Jobs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">  
          </li>  -->

        <!-- ==========DASHBOARD=========== -->
          <li class="nav-item active">
            <a href="<?php 
          if(!empty($data)){
          if($data['user_type']=='user'){
            echo base_url().'user/dashboard/';
            }else if($data['user_type']=='member'){
              echo base_url().'dashboard_controller/club_profile';
            }else if($data['user_type']=='admin'){
              echo base_url().'admin/dashboard';
            }else if($data['user_type'] == 'super_admin'){
              echo base_url().'superadmin/dashboard';
            }else{
              redirect(); 
            }
          }          
          ?>" class="nav-link">
						<i class="fas fa-home"></i> Dashboard</a>
          </li>
            <!--MY ACCOUNT-->
          <li class="nav-item">
            <a  class="nav-link" href="<?php
            if($data['user_type']=='user'){
            echo base_url().'user/account/';
            }elseif ($data['user_type']=='admin'){
              echo base_url().'user/account/';
            }elseif ($data['user_type']=='super_admin'){
              echo base_url().'location/';
            } else {
              echo base_url();
              }  ?>" class="nav-link">
            	<i class="fas fa-user-alt"></i>  My Account</a>
          </li>

                <!--MY CONTRIBUTION-->
          <li class="nav-item">
            <a class="nav-link" href="<?php
            if($data['user_type']=='user'){
            echo base_url().'user/contributions/';
            }elseif ($data['user_type']=='admin'){
              echo base_url().'user/contributions/';
            }elseif ($data['user_type']=='super_admin'){
              echo base_url().'user/contributions/';
            } else {
              echo base_url();
              }  ?>" >
            	<i class="fas fa-user-alt"></i> My Contribution</a>
          </li>
				
         <!--TOTAL USERS-->
        <li class="nav-item">
          <a href="<?php 
              if(($data['user_type']=='super_admin')){
              echo base_url().'superadmin/dashboard'; }

              elseif ($data['user_type']=='admin'){
                echo base_url().'dashboard_controller/university_profile/';}

              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')){ echo 'd-none'; } ?>">
            <i class="fas fa-user-graduate"></i> All Users</a>
        </li>

        <!--TOTAL CONTRIBUTIONS-->
        <li class="nav-item">
          <a href="<?php 
              if(($data['user_type']=='super_admin')){
              echo base_url().'superadmin/dashboard'; }

              elseif ($data['user_type']=='admin'){
                echo base_url().'dashboard_controller/university_profile/';}

              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')){ echo 'd-none'; } ?>">
            <i class="fas fa-user-graduate"></i> Contributions</a>
        </li>

        <!--MOSQUES-->
        <li class="nav-item">
          <a href="<?php 
              if(($data['user_type']=='super_admin')){
              echo base_url().'superadmin/dashboard'; }

              elseif ($data['user_type']=='admin'){
                echo base_url().'dashboard_controller/university_profile/';}

              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')){ echo 'd-none'; } ?>">
            <i class="fas fa-user-graduate"></i> Mosques</a>
        </li>

        <!--==========ADMINS============-->
        <li class="nav-item">
          <a href="<?php 
              if($data['user_type']=='super_admin'){
              echo base_url().'superadmin/admins'; }
              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')||($data['user_type']=='admin')){ echo 'd-none'; } ?>">
            <i class="fas fa-chalkboard-teacher"></i> Admins</a>
        </li>

         <!--GENERATE REPORT-->
         <li class="nav-item">
          <a href="<?php 
              if(($data['user_type']=='super_admin')){
              echo base_url().'superadmin/report'; }

              elseif ($data['user_type']=='admin'){
                echo base_url().'dashboard_controller/university_profile/';}

              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')){ echo 'd-none'; } ?>">
            <i class="fas fa-user-graduate"></i> Generate Report</a>
        </li>

      <!--==========SETTINGS============-->
        <li class="nav-item">
          <a href="<?php 
              if($data['user_type']=='super_admin'){
              echo base_url().'superadmin/communicate'; }
              else {
              echo base_url();
              } ?>" 
              class="nav-link <?php if (($data['user_type']=='user')||($data['user_type']=='admin')){ echo 'd-none'; } ?>">
           <i class="fas fa-university"></i>
           <p> Communicate <span class="right badge badge-danger">New</span></p>
          </a>
        </li>
</ul>

</nav>
</div>
</aside>
  <!-- ===============END OF SIDE BAR ============= -->
  <!-- ===============END OF SIDE BAR ============== -->
  <!-- ===============END OF SIDE BAR ============ -->

<div class="content-wrapper" style="background: #a6dfed" >

<div class="card content-header" style="color: blue; height: 10px">
</div>
   
