<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "DocMatee";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function storeDirector($conn) {
    $Directorupdated = 0;

    $bpstmt = $conn->prepare("INSERT INTO Director(username,phone,address,salary,email,password) VALUES(?,?,?,?,?,?)");

    // Declare and initialize variables
    $username = "";
    $phone = "";
    $location = "";
    $salary = "";
    $email = "";
    $password = "";

    // Bind parameters
    $bpstmt->bind_param("ssssss", $username, $phone, $location, $salary, $email, $password);

    $directors = array(
        array("Gana Amr", "01006118485", "Madinaty", "10000", "ganafreigah@gmail.com", "gana"),
        array("Khadijawaheed", "0110258485", "Nasrcity", "15000", "kadijawaheedk@gmail.com", "khadija"),
        array("Abdelrahman Yasser", "01005542340", "Heliopolis", "15000", "Ayasser@gmail.com", "yasser"),
        array("Mahmoud Walid", "01082333650", "New Cairo", "20000", "Mwalid@gmail.com", "walid")
    );

    foreach ($directors as $director) {
        // Assign values to variables
        list($username, $phone, $location, $salary, $email, $password) = $director;
        // Execute prepared statement
        $bpstmt->execute();
        // Increment count of updated directors
        $Directorupdated += $conn->affected_rows;
    }

    return $Directorupdated;
}

$result = storeDirector($conn);

$conn->close();

echo "Directors stored: " . $result;
?>
