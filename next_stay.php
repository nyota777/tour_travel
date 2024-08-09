<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Next Stay</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-transform: capitalize;
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        html::-webkit-scrollbar-track {
            background-color: var(--white);
        }

        html::-webkit-scrollbar-thumb {
            background-color: var(--main-color);
        }

        body {
            background-image: url('https://www.nairobinationalparkkenya.com/wp-content/uploads/2022/04/ol_k_1.jpg');
            background-size: cover;
            background-position: center;
        }

        section {
            padding: 5rem 10%;
        }

        /* Navbar Styles */
        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 1rem;
            border-bottom: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-weight: bold;  
        }

        .navbar .logo {
            font-size: 2.5rem;
            color: var(--black);
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.1rem;
        }

        .navbar a {
            color: #333;
            text-decoration: none;
            margin-right: 1rem;
            transition: color 0.3s;
            font-size: 1.6rem;
            font-weight: bold; /* Make navbar links bold */
        }

        .navbar a:hover {
            color: #007bff;
        }

        .nav-link {
            margin-right: 1rem;
        }

        /* Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Heading Styles */
        .heading {
            text-align: center;
            color: #2d3748;
            font-size: 3.5rem;
            font-weight: bold;
            margin: 2.5rem 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">Travel With Us</div>
            <div>
                <a href="destinations.php" class="nav-link">Destinations</a>
                <a href="property_type.php" class="nav-link">Property Type</a>
                <a href="trending_places.php" class="nav-link">Trending Places</a>
                <a href="vacation_details.php" class="nav-link">Vacation Details</a>
                <a href="logout.php" class="nav-link">Logout</a>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="heading">Welcome to Enchanting Trails.</h1>
        <!-- Add your content here -->
        <section>
            <div class="background-section" style="background-image: url('https://www.nairobinationalparkkenya.com/wp-content/uploads/2022/04/ol_k_1.jpg'); height: 300px; background-size: cover; background-position: center;">
                <!-- Content over the background image -->
            </div>
        </section>
    </main>
    
</body>

</html>
