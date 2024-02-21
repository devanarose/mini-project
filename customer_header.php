<?php include 'connection.php';
 $cid=$_SESSION['customer_ID'];
 extract($_GET);
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hotel Reservation system</title>

    <link href="//fonts.googleapis.com/css?family=Spartan:400,500,600,700,900&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
  <body>
<!--w3l-header-->

<header class="w3l-header-nav">
    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
        <div class="container">
            <a class="navbar-brand" href="customer_home.php">
                <img src="assets/images/logo.png" alt="Your logo" style="height:35px;" /> Hotel Nikko Saigon</a>
            <!-- if logo is image enable this   
                        <a class="navbar-brand" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="customer_home.php">Home</a>
                    </li>
                       <li class="nav-item active">
                        <a class="nav-link" href="popup.php">Book Rooms</a>
                    </li>
                   <!--  <li class="nav-item active">
                        <a class="nav-link" href="viewroom.php">Book Room</a>
                    </li> -->
                      <li class="nav-item active">
                        <a class="nav-link" href="bookingcart.php">View selected rooms</a>
                    </li>
                          <!-- <li class="nav-item active">
                        <a class="nav-link" href="cancel.php">Room Cancellation</a>
                    </li> -->
                    <li class="nav-item active">
                        <a class="nav-link" href="viewbooking.php">View Details</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="cusedit.php">Profile</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">logout</a>
                    </li>
<!--                     <li class="nav-item active">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li> -->
             
            </div>
        </div>
    </nav>
    <!--//nav-->
</header>
<!-- //w3l-header -->