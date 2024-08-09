<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .destination-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .destination-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body class="bg-gray-100">



<!-- Main Content -->
<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Popular Destinations</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- Mombasa -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/27/9e/5e/64/caption.jpg?w=300&h=300&s=1" alt="Mombasa" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Mombasa</h2>
                <p class="text-gray-600 mb-2">Mombasa is Kenya’s second-largest city and a major port. It is known for its beautiful beaches, vibrant culture, and historical sites.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Mombasa has the oldest functioning Swahili settlement in the world.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Fort Jesus, Diani Beach, Old Town.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 12</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> SGR or flights.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Nairobi -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://i.pinimg.com/736x/be/d2/cb/bed2cbab3f8d53d66e009df3dfec3c44.jpg" alt="Nairobi" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Nairobi</h2>
                <p class="text-gray-600 mb-2">Nairobi is the capital city of Kenya and is known for its bustling city life and wildlife parks.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Nairobi is the only city with a national park within its city limits.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Nairobi National Park, Giraffe Centre, David Sheldrick Wildlife Trust.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 25</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Flights, taxis.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Zanzibar -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://www.travelstart.co.ke/blog/wp-content/uploads/2014/04/The-Residence-Luxury-Hotels-and-Resorts-Zanzibar.jpg" alt="Zanzibar" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Zanzibar</h2>
                <p class="text-gray-600 mb-2">Zanzibar is an archipelago off the coast of East Africa known for its stunning beaches and rich history.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Zanzibar is famous for its spices and has been a key trade center for centuries.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Stone Town, Nungwi Beach, Spice Farms.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 8</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Flights.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Maasai Mara -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://www.andbeyond.com/wp-content/uploads/sites/5/suite-at-andbeyond-bateleur-camp-overlooking-the-masai-mara.jpg" alt="Maasai Mara" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Maasai Mara</h2>
                <p class="text-gray-600 mb-2">The Maasai Mara is a large game reserve in Kenya known for its incredible wildlife and annual migration of wildebeest.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> The Great Migration, one of the Seven New Wonders of the World, takes place here.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Maasai Mara National Reserve, Hot Air Balloon Safaris.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 5</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Flights or road trips.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Nakuru -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://www.lakenakurukenya.com/wp-content/uploads/2020/09/The-Wonders-of-Lake-Nakuru-National-Park--750x389.jpg" alt="Nakuru" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Nakuru</h2>
                <p class="text-gray-600 mb-2">Nakuru is known for its stunning lake and diverse birdlife, including the famous flamingos.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Lake Nakuru is one of the Rift Valley lakes and is a UNESCO World Heritage site.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Lake Nakuru National Park, Menengai Crater.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 7</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Road trip from Nairobi.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Kisumu -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://i0.wp.com/www.safari254.com/wp-content/uploads/2018/07/Kisumu_view-from-Kisumu-Beach-Resort.jpg" alt="Kisumu" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Kisumu</h2>
                <p class="text-gray-600 mb-2">Kisumu is a city located on the shores of Lake Victoria, known for its vibrant culture and natural beauty.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Kisumu is Kenya's third-largest city and a major port on Lake Victoria.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Kisumu Impala Sanctuary, Dunga Hill Camp.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 6</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Flights or road trips.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

        <!-- Dubai -->
        <div class="destination-card bg-white rounded-lg shadow-lg overflow-hidden">
            <img src="https://assets3.thrillist.com/v1/image/3142939/792x469/scale;webp=auto;jpeg_quality=60;progressive.jpg" alt="Dubai" class="w-full h-48 object-cover">
            <div class="p-4">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Dubai</h2>
                <p class="text-gray-600 mb-2">Dubai is a global city known for its modern architecture, luxury shopping, and vibrant nightlife.</p>
                <p class="text-gray-600 mb-2"><strong>Interesting Facts:</strong> Dubai is home to the world's tallest building, the Burj Khalifa.</p>
                <p class="text-gray-600 mb-4"><strong>Exciting Places to Visit:</strong> Burj Khalifa, Dubai Mall, Palm Jumeirah.</p>
                <p class="text-gray-600 mb-4"><strong>Properties Available:</strong> 20</p>
                <p class="text-gray-600 mb-4"><strong>Best Transport:</strong> Flights.</p>
                <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Book Now</button>
            </div>
        </div>

    </div>
</main>

<!-- Footer -->
<footer class="bg-white shadow mt-8">
    <div class="container mx-auto px-4 py-4 text-center text-gray-600">
        <p>&copy; 2024 Travel With Us. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
