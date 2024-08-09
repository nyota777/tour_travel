<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacation Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
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

        fieldset {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        legend {
            font-weight: bold;
            color: #555;
        }

        label {
            display: block;
            margin: 10px 0 5px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .payment-logos {
            display: flex;
            justify-content: space-around;
            margin-top: 10px;
        }

        .payment-logos img {
            width: 50px;
            height: auto;
        }

        .view-button {
            margin-top: 20px;
            background-color: #007bff;
        }

        .view-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Vacation Details</h1>

        <form id="vacationForm" action="vacation_detailshandler.php" method="POST">
            <fieldset>
                <legend>Personal Details</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="idNumber">ID Number:</label>
                <input type="text" id="idNumber" name="idNumber" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </fieldset>

            <fieldset>
                <legend>Vacation Details</legend>
                <label for="destination">Destination:</label>
                <input type="text" id="destination" name="destination" required>
                
                <label for="checkin">Check-In Date:</label>
                <input type="date" id="checkin" name="checkin" required>
                
                <label for="checkout">Check-Out Date:</label>
                <input type="date" id="checkout" name="checkout" required>
                
                <label for="propertyType">Property Type:</label>
                <select id="propertyType" name="propertyType" required>
                    <option value="Hotel">Hotel</option>
                    <option value="Apartment">Apartment</option>
                    <option value="BnB">BnB</option>
                    <option value="Resort">Resort</option>
                    <option value="Villa">Villa</option>
                </select>
                
                <label for="occupants">Number of Occupants:</label>
                <input type="number" id="occupants" name="occupants" required>
            </fieldset>

            <fieldset>
                <legend>Payment Methods</legend>
                <label for="paymentMethod">Payment Method:</label>
                <select id="paymentMethod" name="paymentMethod" required>
                    <option value="VISA">VISA</option>
                    <option value="Mastercard">Mastercard</option>
                    <option value="MPESA">MPESA</option>
                    <option value="Paypal">Paypal</option>
                </select>
                <div class="payment-logos">
                    <img src="https://th.bing.com/th/id/OIP.nqSiwLwCBM7S-ZXnGOPWoQHaEf?rs=1&pid=ImgDetMain" alt="VISA">
                    <img src="https://th.bing.com/th/id/OIP.ZLby6t5aPD9yBGaTJ1uExgHaEK?rs=1&pid=ImgDetMain" alt="Mastercard">
                    <img src="https://th.bing.com/th/id/OIP.BlD-iAEHb07YMafQyoG2bgHaEK?rs=1&pid=ImgDetMain" alt="MPESA">
                    <img src="https://th.bing.com/th/id/OIP.cmLSrMmVE2rS5pjnS-qyEQHaFj?rs=1&pid=ImgDetMain" alt="Paypal">
                </div>
            </fieldset>

            <button type="submit">Submit</button>
        </form>

        <button class="view-button" onclick="window.location.href='view_details.php'">View Details</button>
    </div>

    <script>
        document.getElementById('vacationForm').addEventListener('submit', function(event) {
            // Add any form validation or other JavaScript functionality here
            alert('Form submitted successfully!');
        });
    </script>
</body>
</html>
