<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions {
            text-align: center;
        }

        .actions button {
            margin: 5px;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-button {
            background-color: #ffc107;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #e0a800;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
        }

        .delete-button:hover {
            background-color: #c82333;
        }

        .add-button {
            background-color: #28a745;
            color: #fff;
            margin: 10px 0;
        }

        .add-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vacation Details</h1>
        <button class="add-button" onclick="window.location.href='vacation_details.php'">Add New</button>

        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID Number</th>
                    <th>Phone Number</th>
                    <th>Destination</th>
                    <th>Check-In</th>
                    <th>Check-Out</th>
                    <th>Property Type</th>
                    <th>Occupants</th>
                    <th>Payment Method</th>
                    <th class="actions">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_vacation_details.php'; ?>
            </tbody>
        </table>
    </div>

    <script>
        function editRecord(id) {
            // Implement the edit functionality
            window.location.href = `edit_vacation_details.php?id=${id}`;
        }

        function deleteRecord(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                // Implement the delete functionality
                window.location.href = `delete_vacation_details.php?id=${id}`;
            }
        }
    </script>
</body>
</html>
