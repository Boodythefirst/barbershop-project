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
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$user_type = "customer";

// Hash the password for security
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insert into the database
$sql = "INSERT INTO Users (first_name, last_name, email, password, user_type)
VALUES ('$first_name', '$last_name', '$email', '$password_hash', '$user_type')";

    if(mysqli_query($conn,$sql)){
    // Set session variable to indicate that the user is logged in
    $_SESSION['logged_in'] = true;
    $_SESSION['user_email'] = $email;
    $_SESSION['first_name'] = $first_name;
    $_SESSION['user_id'] = $user_id;

    

    // Redirect to dashboard page
    header("Location: dashboard.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>
