<?php

$servername = "localhost";
$username = "root";
$password = ""; // Put your password here
$dbname = "DocMatee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMessage = ""; // Variable to store error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $address = $_POST['address'] ?? '';
    $gender = $_POST['gender'] ?? '';

    // Check if all form fields are provided
    if (!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($email) && !empty($phone) && !empty($birthdate) && !empty($address) && !empty($gender)) {
        $sql = "INSERT INTO users (firstname, lastname, username, password, email, phone, birthdate, address, gender)
        VALUES ('$firstname', '$lastname', '$username', '$password', '$email', '$phone', '$birthdate', '$address', '$gender')";

        if (mysqli_query($conn, $sql)) {
            // Start the session
            session_start();

            // Redirect the user to the index.html page with login success parameter
            header("Location: /tweelast/test/index.html?login=success");
            exit; // Ensure that code execution stops after the redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Please provide all required information";
    }
}

$conn->close();

?>
