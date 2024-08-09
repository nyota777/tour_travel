<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Types</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .property-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .property-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .card-image {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navbar -->
<nav class="bg-white shadow">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-bold text-gray-800">Travel With Us</a>
        <div>
            <a href="home.php" class="text-lg text-gray-600 hover:text-blue-500 ml-4">Home</a>
            <a href="destinations.php" class="text-lg text-gray-600 hover:text-blue-500 ml-4">Destinations</a>
            <a href="property_type.php" class="text-lg text-gray-600 hover:text-blue-500 ml-4">Property Types</a>
            <a href="contact.php" class="text-lg text-gray-600 hover:text-blue-500 ml-4">Contact</a>
        </div>
    </div>
</nav>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Property Types</h1>

    <!-- Hotels -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Hotels</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Hotel 1 -->
            <div class="property-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://th.bing.com/th/id/R.c9e304f256ae4239ba50396385357c15?rik=QJhhGwpAHXpfHw&pid=ImgRaw&r=0&sres=1&sresct=1" alt="Hotel 1" class="card-image w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Grand Hotel</h3>
                    <p class="text-gray-600 mb-4">Single, double, and triple rooms available. Equipped with a pool, gym, and restaurant.</p>
                    <p class="text-gray-500 mb-2">Rooms: Single, Double, Triple</p>
                    <p class="text-gray-500 mb-2">Pool: Yes</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                </div>
            </div>
            <!-- Add more hotels as needed -->
        </div>
    </section>

    <!-- Apartments -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Apartments</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Apartment 1 -->
            <div class="property-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://th.bing.com/th/id/R.fa62d11029fba217341683485ecb486a?rik=UgBJWqbQpfpCYg&pid=ImgRaw&r=0" alt="Apartment 1" class="card-image w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Luxury Apartment</h3>
                    <p class="text-gray-600 mb-4">2-bedroom apartment with modern amenities and a beautiful view.</p>
                    <p class="text-gray-500 mb-2">Rooms: 2</p>
                    <p class="text-gray-500 mb-2">Pool: No</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                </div>
            </div>
            <!-- Add more apartments as needed -->
        </div>
    </section>

    <!-- BnBs -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">BnBs</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- BnB 1 -->
            <div class="property-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://cebugrandrealty.com/wp-content/uploads/2015/12/RC274-2-Bedroom-Condo-for-Rent-in-Cebu-Business-Park-Cebu-Grand-Realty-2.jpg" alt="BnB 1" class="card-image w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Cozy BnB</h3>
                    <p class="text-gray-600 mb-4">Charming BnB with comfortable rooms. Contact info below for reservations.</p>
                    <p class="text-gray-500 mb-2">Contact: +1234567890</p>
                    <p class="text-gray-500 mb-2">Email: contact@cozybnb.com</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                </div>
            </div>
            <!-- Add more BnBs as needed -->
        </div>
    </section>

    <!-- Resorts -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Resorts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Resort 1 -->
            <div class="property-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://th.bing.com/th/id/R.10d0ef2f604f6b176ba4c423247204d8?rik=PGsX0XpT%2fWDrlg&pid=ImgRaw&r=0" alt="Resort 1" class="card-image w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Oceanview Resort</h3>
                    <p class="text-gray-600 mb-4">Luxurious resort with stunning ocean views, pool, and spa.</p>
                    <p class="text-gray-500 mb-2">Rooms: Various sizes</p>
                    <p class="text-gray-500 mb-2">Pool: Yes</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                </div>
            </div>
            <!-- Add more resorts as needed -->
        </div>
    </section>

    <!-- Villas -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Villas</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Villa 1 -->
            <div class="property-card bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://i0.wp.com/www.constructionkenya.com/wp-content/uploads/2015/01/swedish-riat-villas.jpg?w=740&ssl=1" alt="Villa 1" class="card-image w-full">
                <div class="p-4">
                    <h3 class="text-xl font-bold text-gray-800">Luxury Villa</h3>
                    <p class="text-gray-600 mb-4">Spacious villa with 4 bedrooms, private pool, and garden.</p>
                    <p class="text-gray-500 mb-2">Rooms: 4</p>
                    <p class="text-gray-500 mb-2">Pool: Yes</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded">Book Now</button>
                </div>
            </div>
            <!-- Add more villas as needed -->
        </div>
    </section>

    <!-- Occupants Control -->
    <section class="mb-8">
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Adjust Occupants</h2>
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <label class="text-lg font-semibold text-gray-700">Adults:</label>
                <div class="flex items-center">
                    <button onclick="changeOccupants('adults', -1)" class="bg-gray-300 text-gray-800 px-3 py-1 rounded">-</button>
                    <span id="adults-count" class="mx-3 text-lg">1</span>
                    <button onclick="changeOccupants('adults', 1)" class="bg-gray-300 text-gray-800 px-3 py-1 rounded">+</button>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <label class="text-lg font-semibold text-gray-700">Children:</label>
                <div class="flex items-center">
                    <button onclick="changeOccupants('children', -1)" class="
bg-gray-300 text-gray-800 px-3 py-1 rounded">-</button>
<span id="children-count" class="mx-3 text-lg">0</span>
<button onclick="changeOccupants('children', 1)" class="bg-gray-300 text-gray-800 px-3 py-1 rounded">+</button>
</div>
</div>
</div>
</section>

</main>
<script>
    function changeOccupants(type, change) {
        const countElement = document.getElementById(`${type}-count`);
        let currentCount = parseInt(countElement.textContent);
        currentCount = Math.max(0, currentCount + change);
        countElement.textContent = currentCount;
    }
</script>
</body>
</html>