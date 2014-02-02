<?php session_start();
include('connect.php');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Online portal</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   

    <!-- Custom styles for this template -->

    <script src="js/jquery.js"></script>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">School name</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <?php
        if(isset($_SESSION["admin"])){ ?>
        <li><a href="display_classes.php">Admin</a></li>
     <?php } ?>
                <li><a href="view_attendance.php">Attendence</a></li>
                <li><a href="view_results.php">Result</a></li>
                <li><a href="enter_comp.php">Complaint</a></li>
          <?php
        if(isset($_SESSION["admin"])){ ?>
        <li><a href="disp_comp.php">Display Complaints</a></li>
     <?php }

        ?>
				<li class="pull-right">
          <?php if(!isset($_SESSION["admin"])){ ?>
          <a href="login.php">Login</a>
          <?php } 
          else{
          ?>
          <a href="logout.php">Logout</a>
          <?php } ?>

        </li>

               
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
