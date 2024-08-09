<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trending Places</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
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

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .gallery-item {
            width: 100%;
            max-width: 300px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
        }

        .gallery-item-content {
            padding: 15px;
        }

        .gallery-item-content h2 {
            margin: 0 0 10px;
            color: #333;
        }

        .gallery-item-content p {
            margin: 0;
            color: #555;
        }

        .gallery-item-content .description {
            margin-top: 10px;
        }

        .gallery-item-content .best-time {
            margin-top: 10px;
            font-weight: bold;
        }

        .gallery-item-content .prices {
            margin-top: 10px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Trending Places</h1>
        <div class="gallery">
            <!-- Diani Beach -->
            <div class="gallery-item">
                <img src="https://th.bing.com/th/id/OIP.atNXSbm1Hxl0wSID39c44gHaE7?rs=1&pid=ImgDetMaing" alt="Diani Beach">
                <div class="gallery-item-content">
                    <h2>Diani Beach</h2>
                    <p class="description">Diani Beach is a beautiful stretch of white sand beach on the Indian Ocean. It’s renowned for its clear turquoise waters, palm trees, and lively atmosphere.</p>
                    <p class="best-time">Best Time to Visit: December to March</p>
                    <p class="prices">Food: $15 - $30 per meal<br>Accommodation: $100 - $300 per night<br>Entry Fee: Free</p>
                </div>
            </div>

            <!-- Amboseli National Park -->
            <div class="gallery-item">
                <img src="https://www.eastafricasafaristours.com/wp-content/uploads/2021/11/elephants_kili.jpg" alt="Amboseli National Park">
                <div class="gallery-item-content">
                    <h2>Amboseli National Park</h2>
                    <p class="description">Known for its large herds of elephants and stunning views of Mount Kilimanjaro, Amboseli National Park offers a unique safari experience.</p>
                    <p class="best-time">Best Time to Visit: June to October</p>
                    <p class="prices">Food: $20 - $50 per meal<br>Accommodation: $150 - $400 per night<br>Entry Fee: $80</p>
                </div>
            </div>

            <!-- Maasai Mara -->
            <div class="gallery-item">
                <img src="https://www.perfectsafarisafrica.com/wp-content/uploads/2021/06/Wildebeest-Mara-river.jpg" alt="Maasai Mara">
                <div class="gallery-item-content">
                    <h2>Maasai Mara</h2>
                    <p class="description">Maasai Mara is famous for the Great Migration and abundant wildlife. It’s one of Kenya’s most popular safari destinations.</p>
                    <p class="best-time">Best Time to Visit: July to October</p>
                    <p class="prices">Food: $25 - $60 per meal<br>Accommodation: $200 - $500 per night<br>Entry Fee: $70</p>
                </div>
            </div>

            <!-- Tsavo National Park -->
            <div class="gallery-item">
                <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/ae/90/e4/salt-lick-safari-lodge.jpg?w=900&h=-1&s=1" alt="Tsavo National Park">
                <div class="gallery-item-content">
                    <h2>Tsavo National Park</h2>
                    <p class="description">One of Kenya’s largest national parks, Tsavo is known for its diverse landscapes and large populations of elephants and lions.</p>
                    <p class="best-time">Best Time to Visit: June to October</p>
                    <p class="prices">Food: $20 - $45 per meal<br>Accommodation: $100 - $350 per night<br>Entry Fee: $60</p>
                </div>
            </div>

            <!-- Watamu -->
            <div class="gallery-item">
                <img src="https://th.bing.com/th/id/OIP.KQoL1SMin9HIj5RKzsE0IwHaFm?w=1500&h=1134&rs=1&pid=ImgDetMain" alt="Watamu">
                <div class="gallery-item-content">
                    <h2>Watamu</h2>
                    <p class="description">A coastal town known for its beautiful beaches, coral reefs, and marine national parks.</p>
                    <p class="best-time">Best Time to Visit: December to March</p>
                    <p class="prices">Food: $15 - $35 per meal<br>Accommodation: $80 - $250 per night<br>Entry Fee: Free</p>
                </div>
            </div>

            <!-- Zanzibar -->
            <div class="gallery-item">
                <img src="https://th.bing.com/th/id/OIP.v1SWnp2AC8diGW1wBlD5RwHaE7?rs=1&pid=ImgDetMain" alt="Zanzibar">
                <div class="gallery-item-content">
                    <h2>Zanzibar</h2>
                    <p class="description">An island paradise with stunning beaches, rich culture, and historical sites, Zanzibar is perfect for a tropical getaway.</p>
                    <p class="best-time">Best Time to Visit: June to October</p>
                    <p class="prices">Food: $20 - $40 per meal<br>Accommodation: $100 - $300 per night<br>Entry Fee: Free</p>
                </div>
            </div>

            <!-- Mount Kenya Lodge -->
            <div class="gallery-item">
                <img src="https://th.bing.com/th/id/R.31a4268c705fee08f03ef5035cf09bb5?rik=BHyv0ljvVTzEJQ&pid=ImgRaw&r=0" alt="Mount Kenya Lodge">
                <div class="gallery-item-content">
                    <h2>Mount Kenya Lodge</h2>
                    <p class="description">Situated on the slopes of Mount Kenya, this lodge offers breathtaking views and a unique mountain experience.</p>
                    <p class="best-time">Best Time to Visit: January to March</p>
                    <p class="prices">Food: $25 - $50 per meal<br>Accommodation: $150 - $350 per night<br>Entry Fee: $30</p>
                </div>
            </div>

            <!-- Giraffe Manor -->
            <div class="gallery-item">
                <img src="https://th.bing.com/th/id/R.c056e4918e0ec0d083045a6386d266e0?rik=eRxPEgHHUkn%2bbQ&riu=http%3a%2f%2fwetu.com%2fResources%2f15435%2fgiraffe_manor_tea_time.jpg&ehk=%2bgpU7f6wv4uUB7L5o0CAaD1V9pArVlwdp23pYokzTmA%3d&risl=&pid=ImgRaw&r=0" alt="Giraffe Manor">
                <div class="gallery-item-content">
                    <h2>Giraffe Manor</h2>
                    <p class="description">A unique hotel experience where you can interact with endangered Rothschild giraffes that come to visit during breakfast.</p>
                    <p class="best-time">Best Time to Visit: June to October</p>
                    <p class="prices">Food: $50 - $100 per meal<br>Accommodation: $500 - $1000 per night<br>Entry Fee: $60</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
