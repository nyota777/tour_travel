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
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$idNumber = $_POST['idNumber'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

// Initialize registration_successful to false
$registration_successful = false;

// Check if passwords match
if ($password === $confirmPassword) {
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Prepare and execute SQL query to insert new user
    $stmt = $conn->prepare("INSERT INTO registration (first_name, last_name, id_number, phone_number, email, password) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $idNumber, $phoneNumber, $email, $hashedPassword);

    if ($stmt->execute()) {
        // Registration successful
        $registration_successful = true;
        // Redirect to login page or next step
        header("Location: next_stay.php");
        exit();
    } else {
        // Registration failed
        echo "Registration failed. Please try again.";
    }

    // Close the statement
    $stmt->close();
} else {
    // Passwords do not match
    echo "Passwords do not match.";
}

// Close the connection
$conn->close();
?>
