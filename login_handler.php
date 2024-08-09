<?php
session_start();

// Replace with your actual database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour_travel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize user input
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute SQL query
$sql = $conn->prepare("SELECT  password FROM registration WHERE email = ?");
$sql->bind_param("s", $email);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Verify password
    if (password_verify($password, $user['password'])) {
        // Set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $email;

        // Redirect to next_stay.php
        header("Location: next_stay.php");
        exit();
    } else {
        // Password incorrect
        echo "Invalid password. Please try again.";
    }
} else {
    // No user found
    echo "No user found with that email address.";
}

// Close the connection
$conn->close();
?>
