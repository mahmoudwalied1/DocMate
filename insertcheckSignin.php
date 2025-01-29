<?php

session_start();

// Database connection
$servername = "localhost";
$username_db = "root";
$password_db = ""; // Put your database password here
$dbname = "DocMatee";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate input
    if (!empty($username) && !empty($password)) {
        // Query the database to check if the credentials are valid for regular users
        $sql_user = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result_user = $conn->query($sql_user);

        if ($result_user && $result_user->num_rows > 0) {
            // Start session and store user data if login is successful for regular users
            $_SESSION['username'] = $username;
            // Redirect to a secured area of your website for regular users
            header("Location: /tweelast/test/index.html?login=success");
            exit;
        } else {
            // Query the database to check if the credentials are valid for directors
            $sql_director = "SELECT * FROM Director WHERE username = '$username'  AND password = '$password'";
            $result_director = $conn->query($sql_director);

            if ($result_director && $result_director->num_rows > 0) {
                // Start session and store user data if login is successful for directors
                $_SESSION['username'] = $username;
                // Redirect to a secured area of your website for directors
                header("Location: /tweelast/test/ViewAdmin.html?login=success");
                exit;
            } else {
                // Invalid credentials for both regular users and directors
                echo "Incorrect username or password";
            }
        }
    } else {
        // Missing username or password
        echo "Please enter both username and password";
    }
}

?>
