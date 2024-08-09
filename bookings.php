<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .hero {
            background-image: url('https://media.istockphoto.com/id/586942490/photo/elephants-and-kilimanjaro.jpg?s=612x612&w=0&k=20&c=Y_xKc0TsYYTJ4hJ7-ExANea-KsA7AZUd-pEJREmBcss=');
            background-size: cover;
            background-position: center;
            height: 500px;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .overlay {
            background: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }
        .hero-text {
            position: relative;
            z-index: 1;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const getStartedBtn = document.getElementById('getStartedBtn');
            getStartedBtn.addEventListener('click', function() {
                window.location.href = 'registration.php';
            });
        });
    </script>
</head>
<body class="bg-gray-100">
    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-text">
            <h1 class="text-5xl font-bold mb-4">Book Your Dream Trip</h1>
            <button id="getStartedBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Get Started
            </button>
        </div>
    </div>
    <div class="container mx-auto p-6 mt-6">
        <h2 class="text-3xl font-bold mb-4 text-center">Why Travel With Us?</h2>
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                <img src="https://www.travelstart.co.ke/blog/wp-content/uploads/2014/06/Giraffe-Manor.jpg" alt="Destination Image" class="rounded shadow-md">
                <p class="mt-2 text-center">Explore Beautiful Destinations</p>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                <img src="https://lp-cms-production.imgix.net/2023-04/GettyImages-1397698590.jpg?w=1440&h=810&fit=crop&auto=format&q=75" alt="Experience Image" class="rounded shadow-md">
                <p class="mt-2 text-center">Experience Unique Adventures</p>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                <img src="https://media.licdn.com/dms/image/D4D12AQHayXpCnuQmTg/article-cover_image-shrink_600_2000/0/1677140856880?e=2147483647&v=beta&t=zWnEvqwRNFh4devhRjjid7NvUod3YQ-D-O6m8rcZYDo" alt="Service Image" class="rounded shadow-md">
                <p class="mt-2 text-center">Top-notch Customer Service</p>
            </div>
        </div>
    </div>
</body>
</html>
