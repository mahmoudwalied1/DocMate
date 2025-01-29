<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<head>
<style>
    :root {
      --main-color: #007bff; /* Blue color */
      --bg-color: #008d8d; /* Page background color */
      --button-bg-color: #157080; /* Button background color */
      --button-border-radius: 10px; /* Button border radius */
      --table-bg-color: #ffffff; /* Table background color */
      --table-border-radius: 20px; /* Table border radius */
    }
    html {
      background-color: var(--bg-color); /* Page background color */
      display: flex;
      justify-content: center;
    }
    h1 {
      font-size: 5.5rem;
    }
    body {
      margin: 16px;
    }
    .form {
      border: 3px solid #777777;
      border-radius: var(--button-border-radius); /* Rounded edges for the form */
    }
    .btn {
      display: inline-block;
      padding: .9rem 1.5rem;
      border: none; /* Remove border */
      border-radius: var(--button-border-radius); /* Rounded edges for the button */
      color: white; /* White text color */
      background: var(--button-bg-color); /* Button background color */
      cursor: pointer;
      margin-top: 1rem;
      font-size: 1.7rem;
      transition: transform 0.3s ease-in-out; /* Smooth transition effect for movement */
    }
    .btn:hover {
      background-color: white; /* White background color on hover */
      color: var(--main-color); /* Blue text color on hover */
      transform: translateY(-5px); /* Move button up by 5 pixels on hover */
    }
    .container {
      padding: 16px;
    }
    span.psw {
      float: right;
      padding-top: 16px;
    }
    table {
      border-collapse: collapse;
      width: 90%; /* Make the table wider */
      border-radius: var(--table-border-radius); /* Rounded edges for the table */
      overflow: hidden; /* Hide overflowing content */
      transition: all 0.3s ease-in-out; /* Smooth transition effect */
      background-color: var(--table-bg-color); /* Table background color */
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: var(--button-bg-color); /* Button background color */
      color: white; /* White text color */
    }
    tr:hover {
      background-color: var(--main-color); /* Blue background color on hover */
      color: white; /* White text color on hover */
    }
    </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";/* Put your password here */
$db="DocMatee";
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    foreach ($_POST['id'] as $x) {
        $sql = "DELETE FROM  Appointments WHERE id = $x";
        $retval = mysqli_query($conn, $sql);
        if (!$retval) {
            die('Could not delete data: ' .$conn->connect_error);
        }
    }
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post" action="<?php $_PHP_SELF ?>">
    <table border="1" width="50%">
        <?php
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM Appointments";
        $result = mysqli_query($conn, $sql);
        $i=1;
        if (mysqli_num_rows($result) > 0) {
            while ( $row = mysqli_fetch_assoc($result) ) {
                if($i==1) { //print table header
                    echo "<tr bgcolor='#f4f4f4'>";
                    echo "<td> Select </td>";
                    foreach($row as $key=>$value)
                        echo "<td>".$key."</td>";
                    echo "</tr>";
                }
                if($i%2==1)
                    echo "<tr bgcolor='#007bff'> "; // Blue background color
                else
                    echo "<tr > ";
                foreach($row as $key=>$value) {
                    if ($key=="id") {
                        echo "<td> <input type='checkbox' name='id[]' value='".$value."'>";
                    }
                    echo "<td>". $value ."</td>";
                }
                echo "</tr>";
                $i++;
            }
            echo "</table>";
            echo "<input type='submit' value='delete' name='delete'>";
            echo "</form>";
        } else {
            echo "0 results";
        }
        ?>
</body>
</html>
<a href="ViewAdmin.html" class="btn">Return to ViewAdmin</a>
