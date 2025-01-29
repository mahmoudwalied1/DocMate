<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to the login page if not logged in
    header("Location: /tweelast/test/login.html");
    exit;
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyProfile</title>
    <!-- basic -->
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Medicine</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="./css/transforms.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

      <style>
    
        .glassmorphism
        {
            width: 50%;
            height:80%;
            
            border-top:2px soild #FFFFFF75;
            border-left:2px soild #FFFFFF75;
            box-shadow: 5px 5px 12px #00000035;
            background: #FFFFFF25;
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(4px);
            padding: 50px;
            
         
            
            
        }
      .info
      {
        text-align: left;
        font-family: Arial, Helvetica, sans-serif;
        font-size: large;
       color: black;

      }
     

      
      </style>
      
</head>
<body>

 <!-- header section start -->
 <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
               
                
                  <li class="nav-item">
                     <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="JoinUs.html">Join Us</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="Doctors.html">Doctors</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="aboutuss.html">About us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Feedback.html">Feedback</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Appoinments.html">Appoinments</a>
                  </li>
                  <li>
                     <div class="toggle-container">
                        <input type="checkbox" class="sr-only" id="darkmode-toggle">
                        <label for="darkmode-toggle" class="toggle">
                          <span>Toggle dark mode</span>
                        </label>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
      </div>
      <span class="menu-btn" onclick="openMenu()">&#9776;</span>

      <!-- Side menu -->
      <div id="mySideMenu" class="side-menu">
       <!-- Button to close the menu -->
       <a class="close-menu" href="javascript:void(0)" onclick="closeMenu()">&times;</a>
       <!-- Menu items -->
       <a href="./login.html">Log Out</a>
       <a href="./MyProfile.html">My Profile</a>
       <a href="./Appoinments.html">Book Appointment</a>
      </div>




         



<div style="text-align: center;" class="profile">
    <div style="text-align: center;" class="glassmorphism">
        <h1 id="hello">Hello <?php echo $username; ?>...</h1>
        
        <div style="text-align: center;" class="info">
            <label for="username">Username: <?php echo $username; ?></label><br>
            <!-- Add more profile information here -->
        </div>
    </div>
</div>


<div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <div class="footer_logo"><a href="home.html"><img src="images/logo.png"></a></div>
                  <h1 class="adderss_text">Contact Us</h1>
                  <div class="map_icon"><img src="images/call-icon.png"><span class="paddlin_left_0">+2001007459852</span></div>
                  <div class="map_icon"><img src="images/mail-icon.png"><span class="paddlin_left_0">DocMate@gmail.com</span></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text"><a style="color: white;" href="./Doctors.html">Doctors</h1>                  
                     <div class="hiphop_text_1">"Medicine is not only a science; it is also an art. It does not consist of compounding pills and plasters; it deals with the very processes of life, which must be understood before they may be guided."</div>               </div>
    
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">Useful Links</h1>
                  <div class="Useful_text"><a style="color: aliceblue;" href="index.html">Home</a><br>
                  </div>
                  <div class="Useful_text"> 
                     <a style="color: aliceblue;" href="JoinUs.html">Join Us</a><br>
                  </div>
                  <div class="Useful_text"> 
                     <a style="color: aliceblue;" href="Feedback.html">Feedback</a><br>
                  </div>
                  <div class="Useful_text"> 
                     <a style="color: aliceblue;" href="Appoinments.html">Appoinments</a></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">More Of Us</h1>
                  <input type="text" class="Enter_text" placeholder="Enter your Email" name="Enter your Email">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                 <div class="subscribe_bt"><a href="./aboutuss.html">about us</a>
                 </div> 
                 <div class="social_icon">
                  <ul class="iconss" >
                        <li class="social"><a href="https://www.facebook.com/profile.php?id=61558117094784"><img src="images/fb-icon.png"></a></li>
                        <li class="social"><a href="https://twitter.com/Doc_Matee"><img src="images/twitter-icon.png"></a></li>
                        <li class="social"><a href="#"><img src="images/linkedin-icon.png"></a></li>
                        <li class="social"><a href="#"><img src="images/instagram-icon.png"></a></li>
                     </ul>
                  </div>
               </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright © 2024 All rights reserved | Developed by <a href="https://aast.edu/en/">aast students</a></p>
         </div>
      </div>
    
   
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="./script.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
