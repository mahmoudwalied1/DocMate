<!DOCTYPE html>
<html lang="en">
   <head>
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
       .form-container {
            width: 60%;
            max-width: 600px; /* Ensure the form doesn't become too wide */
            background: rgb(149, 180, 188);
            padding: 40px;
            border-radius: 25px; /* Large round corners */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2); /* Larger shadow */
            transition: all 0.3s ease; /* Smooth transition for hover effects */
            text-align: center;
        }

        /* Hover effect for container */
        .form-container:hover {
            transform: scale(1.05); /* Slight scale-up on hover */
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
        }

        /* Heading styling */
        h1 {
            color: #333;
            margin-bottom: 30px;
        }

        /* Form-row layout */
        .form-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Label styling */
        .form-row label {
            flex: 1;
            text-align: right;
            margin-right: 20px; /* Larger space between label and input */
            color: #555;
            font-weight: bold; /* Bold labels for emphasis */
        }

        /* Input field styling */
        .form-row input {
            flex: 2; /* Input fields take more space */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 15px; /* Round input fields */
            transition: all 0.3s ease; /* Smooth transition for hover effects */
            width: 100%;
        }

        /* Input focus effect */
        .form-row input:focus {
            border-color: #7a8c96;
            outline: none;
            box-shadow: 0 0 10px rgba(0, 170, 255, 0.25); /* Soft glow on focus */
        }

        /* Submit button styling */
        .btn {
            padding: 12px 25px; /* Larger button with rounded edges */
            background: linear-gradient(to right, #00aaff, #0055ff); /* Gradient color */
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease; /* Smooth hover effect */
        }

        /* Hover effect for button */
        .btn:hover {
            background  : linear-gradient(to right, #0055ff, #00aaff); /* Reverse gradient on hover */
            box-shadow: 0 10px 20px rgba(0, 85, 255, 0.3); /* Shadow on hover */
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: grid;
            place-items: center;
            
            width: 100%;
            table-layout: fixed;
        }
       
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #f0f0f0;
          
         

        }
        th {
            background-color: #f7f7f7;
            border-top: 1px solid #f0f0f0;
            text-align: left;
            font-weight: bold;
            text-transform: uppercase;
        }
        td {
            text-align: left;
        }
        tr:last-child td {
            border-bottom: none;
        }
        tr  {
            background-color:beige ;
        }
        tr:hover {
         background  : linear-gradient(to right, #0055ff, #00aaff);
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
                     <a class="nav-link" href="./JoinUs.html">JoinUs</a>
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
       <a href="#view-profile">View Profile</a>
       <a href="./Appoinments.html">Book Appointment</a>
      </div>
      <!-- header section end -->
      <!-- knowledge section end -->
     
      <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Display Doctors</title>
</head>
<body>
    <table  border="1" width="50%">
    <?php
   
    $servername = "localhost";
    $username = "root";
    $password = ""; // Your MySQL password
    $dbname = "DocMatee";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM Doctors";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output table header
        echo "<tr><th>Name</th><th>Email</th><th>Phone Number</th><th>Address</th><th>Specialty</th></tr>";

        // Output data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["FirstName"] . " " . $row["LastName"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["PhoneNumber"] . "</td>";
            echo "<td>" . $row["Specialty"] . "</td>";
            echo "<td>" . ($row["Address"] ?? "Not provided") . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>0 results</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>
    </table>


      <!-- knowledge section end -->
      <!-- footer section start -->
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
                  <h1 class="adderss_text"><a style="color: white;" href="./Doctors.html">Doctors</h1>                  <div class="hiphop_text_1">"Medicine is not only a science; it is also an art. It does not consist of compounding pills and plasters; it deals with the very processes of life, which must be understood before they may be guided."</div>               </div>
    
               <div class="col-lg-3 col-sm-6">
                  <h1 class="adderss_text">Useful Links</h1>
                  <div class="Useful_text"><a style="color: aliceblue;" href="index.html">Home</a><br>
                  </div>
                  <div class="Useful_text"> 
                     <a style="color: aliceblue;" href="./JoinUs.html">JoinUs</a><br>
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