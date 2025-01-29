
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
    $PatientName = $_POST['PatientName'] ?? '';
    $DoctorName = $_POST['DoctorName'] ?? '';
    $appointment_date = $_POST['appointment_date'] ?? '';
    $appointment_time= $_POST['appointment_time'] ?? '';
    $problem_description= $_POST['problem_description'] ?? '';

    // Check if all form fields are provided
    if (!empty($PatientName) && !empty($DoctorName) && !empty($appointment_date) && !empty($appointment_time) && !empty($problem_description)) {
        $problem_description = mysqli_real_escape_string($conn, $_POST['problem_description']);
  $sql = "INSERT INTO Appointments (PatientName, DoctorName, appointment_date, appointment_time, problem_description)
        VALUES ('$PatientName', '$DoctorName', '$appointment_date', '$appointment_time', '$problem_description')";
  

  if(mysqli_query($conn, $sql)) {
    echo "New record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

} 
        else {
    echo "Please provide all required information";
}

}

?>    
