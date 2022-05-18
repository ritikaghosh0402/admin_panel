<?php
include('security.php');
include('header.php'); 
include('navbar.php'); 
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
  </div>

 
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">


              <?php
              require 'dbconfig.php';
               $query="SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection,$query );

              $row = mysqli_num_rows($query_run);

              echo '<h1>' .$row. '</h1>';
              ?>
              

              </div>
            </div>
            <div class="col-auto">
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Blogs Posted</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

              <?php
              require 'dbconfig.php';
               $query="SELECT id FROM blogs ORDER BY id";
                $query_run = mysqli_query($connection,$query );

              $row = mysqli_num_rows($query_run);

              echo '<h1>' .$row. '</h1>';
              ?>
              
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-images "></i>
            </div>
          </div>
        </div>
      </div>
    </div>

   




  <?php
include('scripts.php');
include('footer.php');
?>