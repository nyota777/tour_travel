<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>

    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> 
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gray-100">

    <!-- Header Section -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <a href="home.php" class="text-2xl font-bold">ENCHANTING TRAILS.</a>
            <nav class="space-x-4">
                <a href="home.php" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="about.php" class="text-gray-700 hover:text-gray-900">About</a>
                <a href="package.php" class="text-gray-700 hover:text-gray-900">Packages</a>
                <a href="bookings.php" class="text-gray-700 hover:text-gray-900">Bookings</a>
            </nav>
        </div>
    </header>
    <!-- Header Section Ends -->

    <!-- Main Content -->
    <main class="py-10">
        <section class="container mx-auto px-4">
            <h1 class="text-4xl font-bold text-center mb-8">Our Packages</h1>
            <p class="text-lg text-center mb-12">Explore our carefully curated packages designed to offer you the best of Kenya. Each package is tailored to provide an unforgettable experience, blending adventure, relaxation, and cultural enrichment.</p>

            <!-- Package 1 -->
            <div class="mb-12">
                <h2 class="text-3xl font-semibold mb-4">1. Majestic Kenya Safari</h2>
                <div class="flex flex-col md:flex-row">
                    <img src="https://www.kenyasafari.com/images/safari-kenya-tortilis-camp-game-drive-elephant-810x300.jpg alt="Majestic Kenya Safari" class="w-full md:w-1/2 object-cover rounded-lg mb-4 md:mb-0">
                    <div class="md:ml-6">
                        <p class="text-lg mb-4">Embark on a breathtaking journey through Kenya’s most iconic national parks. Witness the Great Migration, explore the Maasai Mara, and discover the vibrant wildlife that calls Kenya home.</p>
                        <ul class="list-disc pl-5 mb-4">
                            <li>7-day guided safari</li>
                            <li>Accommodation in luxury lodges</li>
                            <li>Daily game drives</li>
                            <li>All meals included</li>
                        </ul>
                        <a href="book.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Package 2 -->
            <div class="mb-12">
                <h2 class="text-3xl font-semibold mb-4">2. Coastal Paradise Escape</h2>
                <div class="flex flex-col md:flex-row">
                    <img src="https://media.vrbo.com/lodging/101000000/100460000/100453300/100453252/8ad74a44.jpg?impolicy=resizecrop&rw=575&rh=575&ra=fill" alt="Coastal Paradise Escape" class="w-full md:w-1/2 object-cover rounded-lg mb-4 md:mb-0">
                    <div class="md:ml-6">
                        <p class="text-lg mb-4">Relax on the pristine beaches of Kenya’s coastline. Enjoy a blend of leisure and adventure as you explore beautiful coral reefs, vibrant marine life, and historic Swahili towns.</p>
                        <ul class="list-disc pl-5 mb-4">
                            <li>5-day coastal retreat</li>
                            <li>Beachfront accommodation</li>
                            <li>Snorkeling and diving excursions</li>
                            <li>Local cultural tours</li>
                        </ul>
                        <a href="book.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Book Now</a>
                    </div>
                </div>
            </div>

            <!-- Package 3 -->
            <div class="mb-12">
                <h2 class="text-3xl font-semibold mb-4">3. Cultural Heritage Tour</h2>
                <div class="flex flex-col md:flex-row">
                    <img src="https://convention.iekenya.org/pics/heritage.jpg" alt="Cultural Heritage Tour" class="w-full md:w-1/2 object-cover rounded-lg mb-4 md:mb-0">
                    <div class="md:ml-6">
                        <p class="text-lg mb-4">Immerse yourself in Kenya’s rich cultural tapestry. Visit traditional villages, experience local festivals, and learn about the diverse cultures that make up Kenya’s vibrant heritage.</p>
                        <ul class="list-disc pl-5 mb-4">
                            <li>6-day cultural exploration</li>
                            <li>Stay with local communities</li>
                            <li>Participate in cultural activities</li>
                            <li>Guided tours of historical sites</li>
                        </ul>
                        <a href="book.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Book Now</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Main Content Ends -->

    <!-- Footer Section -->
    <footer class="bg-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-gray-700">&copy; 2024 Enchanting Trails. All rights reserved.</p>
        </div>
    </footer>
    <!-- Footer Section Ends -->

</body>
</html>
