<?php
ini_set('display_errors', 1);
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "website_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}

// Get the data from the form
  $date = $_POST['date'];
  $time = $_POST['time'];
  $barber = $_POST['barber'];
  $service = $_POST['service'];
  $user_id = $_SESSION['user_id']; // Assuming the user is logged in and the user's ID is stored in the session

  // Insert the data into the appointments table
  $sql = "INSERT INTO Appointments (user_id, service, barber, date, time)
          VALUES ('$user_id', '$service', '$barber', '$date', '$time')";
  if (mysqli_query($conn, $sql)) {
    // Redirect to a success page or show a success message
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // Close the connection
  mysqli_close($conn);
?>
<html>

<head>
    <link rel="stylesheet" href="theme.css" />
</head>


</html>
