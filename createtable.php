<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = ""; /*put your password*/
    $db = "DocMatee";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create table for Feedback
    $sqlFeedback = "CREATE TABLE IF NOT EXISTS Feedback (
        id INT AUTO_INCREMENT PRIMARY KEY,
        patient_name VARCHAR(255) NOT NULL,
        doctor_name VARCHAR(255) NOT NULL,
        appointment_time TIME NOT NULL,
        feedback TEXT NOT NULL,
        rating INT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sqlFeedback)) {
        echo "Table 'Feedback' created successfully<br>";
    } else {
        echo "Error creating table 'Feedback': " . $conn->error . "<br>";
    }

    // Create table for Appointments
    $sqlAppointments = "CREATE TABLE IF NOT EXISTS Appointments (
        id INT AUTO_INCREMENT PRIMARY KEY,
        PatientName VARCHAR(255) NOT NULL,
        DoctorName VARCHAR(255) NOT NULL,
        appointment_date DATE NOT NULL,
        appointment_time TIME NOT NULL,
        problem_description TEXT,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if (mysqli_query($conn, $sqlAppointments)) {
        echo "Table 'Appointments' created successfully<br>";
    } else {
        echo "Error creating table 'Appointments': " . $conn->error . "<br>";
    }

    // Create table for Doctors
    $sqlDoctors = "CREATE TABLE IF NOT EXISTS Doctors (
        DoctorID INT AUTO_INCREMENT PRIMARY KEY,
        FirstName VARCHAR(50),
        LastName VARCHAR(50),
        Specialty VARCHAR(100),
        PhoneNumber VARCHAR(15),
        Email VARCHAR(100),
        Address VARCHAR(255)
    )";

    if (mysqli_query($conn, $sqlDoctors)) {
        echo "Table 'Doctors' created successfully<br>";
    } else {
        echo "Error creating table 'Doctors': " . $conn->error . "<br>";
    }

    // Create table for Users
    $sqlUsers = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(255),
        lastname VARCHAR(255),
        username VARCHAR(255),
        password VARCHAR(255),
        email VARCHAR(255),
        phone VARCHAR(20),
        birthdate DATE,
        address VARCHAR(255),
        gender ENUM('male', 'female')
    )";

    if (mysqli_query($conn, $sqlUsers)) {
        echo "Table 'users' created successfully<br>";
    } else {
        echo "Error creating table 'users': " . $conn->error . "<br>";
    }

    // Create table for Director
    $sqlDirector = "CREATE TABLE IF NOT EXISTS Director (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50),
        phone VARCHAR(11),
        address VARCHAR(100),
        salary VARCHAR(20),
        password VARCHAR(50),
        email VARCHAR(50)
    )";

    if (mysqli_query($conn, $sqlDirector)) {
        echo "Table 'Director' created successfully<br>";
    } else {
        echo "Error creating table 'Director': " . $conn->error . "<br>";
    }

    // Close connection
    $conn->close();
    ?>
</body>
</html>
