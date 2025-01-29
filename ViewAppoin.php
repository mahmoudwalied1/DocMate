<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DocMateApp</title>
  <link rel="icon" href="admin.png" type="image/icon type">
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
  <table border="1">
    <tr>
      <th>PatientName</th>
      <th>DoctorName</th>
      <th>appointment_date</th>
      <th>appointment_time</th>
      <th>problem_description</th>
      
    </tr>
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

    $sql = "SELECT * FROM Appointments";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["PatientName"]  . "</td>";
            echo "<td>" . $row["DoctorName"] . "</td>";
            echo "<td>" . $row["appointment_date"] . "</td>";
            echo "<td>" . $row["appointment_time"] . "</td>";
            echo "<td>" . $row["problem_description"] . "</td>";
            echo "</tr>";

    

        }
    } else {
        echo "<tr><td colspan='8'>0 results</td></tr>";
    }

    // Close connection
    $conn->close();
    ?>
  </table>
  <a href="ViewAdmin.html" class="btn">Return to ViewAdmin</a>
</body>
</html>
