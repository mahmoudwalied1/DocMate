<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        $servername = "localhost";
        $username = "root";
        $password = "";/* Put your password here */
        /* Create connection */
        $conn = new mysqli($servername, $username, $password);
        /* Check connection */
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        /* Create database */
        $sql = "CREATE DATABASE DocMatee ";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        }
        else
        {
            echo "Error creating database: " . $conn->error;
        }
        $close = $conn->close();
        ?>
        
    </body>
</html>
