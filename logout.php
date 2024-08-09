<?php
session_start();

// Destroy the session if the user confirms the logout action
if (isset($_GET['confirm']) && $_GET['confirm'] == 'yes') {
    session_destroy();
    header("Location: login.php"); // Redirect to the login page or home page
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <script>
        // Confirm logout action with the user
        if (confirm('Are you sure you want to log out?')) {
            window.location.href = 'logout.php?confirm=yes';
        } else {
            window.location.href = 'next_stay.php'; // Redirect to the main page if user cancels
        }
    </script>
</body>
</html>
