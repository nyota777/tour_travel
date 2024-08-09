<?php
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

// Fetch data
$sql = "SELECT id, name, email, id_number, phone_number, destination, checkin, check_out, property_type, occupants, payment_method FROM vacation_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["id_number"] . "</td>
                <td>" . $row["phone_number"] . "</td>
                <td>" . $row["destination"] . "</td>
                <td>" . $row["checkin"] . "</td>
                <td>" . $row["check_out"] . "</td>
                <td>" . $row["property_type"] . "</td>
                <td>" . $row["occupants"] . "</td>
                <td>" . $row["payment_method"] . "</td>
                <td class='actions'>
                    <button class='edit-button' onclick='editRecord(" . $row["id"] . ")'>Edit</button>
                    <button class='delete-button' onclick='deleteRecord(" . $row["id"] . ")'>Delete</button>
                </td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='11'>No records found</td></tr>";
}
$conn->close();
?>
