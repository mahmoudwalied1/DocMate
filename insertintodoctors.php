<?php
session_start();

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DocMatee";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMessage = ""; // Variable to store error message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $FirstName = $_POST['FirstName'] ?? '';
    $LastName = $_POST['LastName'] ?? '';
    $Email = $_POST['Email'] ?? '';
    $PhoneNumber = $_POST['PhoneNumber'] ?? '';   
    $Specialty = $_POST['Specialty'] ?? '';
    $Address = $_POST['Address'] ?? '';

    // Check if all form fields are provided
    if (!empty($FirstName) && !empty($LastName) && !empty($Email) && !empty($PhoneNumber) && !empty($Specialty) && !empty($Address)) {
        $sql = "INSERT INTO Doctors (FirstName, LastName, Email, PhoneNumber,Specialty,  Address)
        VALUES ('$FirstName', '$LastName', '$Email', '$PhoneNumber', '$Specialty', '$Address')";

        if (mysqli_query($conn, $sql)) {
            // Set session variables
            $_SESSION['FirstName'] = $FirstName;
            $_SESSION['LastName'] = $LastName;
            $_SESSION['Email'] = $Email;
            $_SESSION['PhoneNumber'] = $PhoneNumber;
            $_SESSION['Specialty'] = $Specialty;
            $_SESSION['Address'] = $Address;
            // Redirect to display.php
            header("Location: display_doctors.php");
            exit; // Stop execution after redirect
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $errorMessage = "Please provide all required information";
    }
}

$conn->close();
?>
