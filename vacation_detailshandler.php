<?php
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "tour_travel"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO vacation_details (name, email, id_number, phone_number, destination, checkin, check_out, property_type, occupants, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss", $name, $email, $id_number, $phone_number, $destination, $checkin, $check_out, $propertyType, $occupants, $paymentMethod);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$idNumber = $_POST['idNumber'];
$phone = $_POST['phone'];
$destination = $_POST['destination'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$propertyType = $_POST['propertyType'];
$occupants = $_POST['occupants'];
$paymentMethod = $_POST['paymentMethod'];

if ($stmt->execute()) {
    echo "New records created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
