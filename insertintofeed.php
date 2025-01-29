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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    #var_dump($_POST); // Debugging statement
    $patient_name = $_POST['patient_name'] ?? '';#patient_name
    $doctor_name = $_POST['doctor_name'] ?? '';
    $appointment_time = $_POST['appointment_time'] ?? '';
    $feedback = $_POST['feedback'] ?? '';
    $rating = $_POST['rating'] ?? '';
    
    
    // Check if all form fields are provided
    if (!empty($patient_name) && !empty($doctor_name) && !empty($appointment_time) && !empty($feedback) && !empty($rating)) {
        $feedback = mysqli_real_escape_string($conn, $_POST['feedback']);
        $sql = "INSERT INTO Feedback (patient_name, doctor_name, appointment_time, feedback, rating)
                VALUES ('$patient_name', '$doctor_name', '$appointment_time', '$feedback', '$rating')";

        if (mysqli_query($conn, $sql)) {
            echo "New record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please provide all required information";
    }
    
}

$conn->close();
?>
