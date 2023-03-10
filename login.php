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
// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email exists in the database
$sql = "SELECT * FROM Users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Get the user data
  $user = $result->fetch_assoc();

  // Check the password
  if (password_verify($password, $user['password'])) {
    // Login successful
    session_start();
    $_SESSION['user_id'] = $user['id'];
    header("Location: dashboard.php");
    $_SESSION['first_name'] = $user['first_name'];
    exit();
  } else {
    // Login failed
    echo "Wrong email or password";
  }
} else {
  // Login failed
  echo "Wrong email or password";
}

mysqli_close($conn);
?>
