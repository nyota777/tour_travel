<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Enchanting Trails</title>

    <!-- Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold">Enchanting Trails</a>
            <nav class="space-x-4">
                <a href="home.php" class="hover:text-gray-400">Home</a>
                <a href="about.php" class="hover:text-gray-400">About</a>
                <a href="packages.php" class="hover:text-gray-400">Packages</a>
                <a href="bookings.php" class="hover:text-gray-400">Bookings</a>
            </nav>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="bg-white py-16">
        <div class="container mx-auto px-4">
            <!-- Introduction -->
            <div class="flex flex-col md:flex-row md:space-x-8 mb-8">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h2 class="text-3xl font-black mb-4">Welcome to Enchanting Trails</h2>
                    <p class="mb-4">We are dedicated to providing unforgettable travel experiences across Kenya. From the breathtaking landscapes to the rich cultural heritage, we aim to connect you with the heart of Kenya.</p>
                    <p class="mb-4">Our mission is to offer personalized and immersive tours that allow you to explore the hidden gems of Kenya, creating memories that last a lifetime.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="https://africansermonsafaris.com/blog/wp-content/uploads/2018/06/kenyan-landscapes-300x157.jpeg" alt="Kenya Landscape" class="w-full h-auto rounded-lg shadow-lg">
                </div>
            </div>

            <!-- Team Members -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Meet the Team</h2>
                <div class="flex flex-col md:flex-row md:space-x-8">
                    <div class="md:w-1/2 mb-8 md:mb-0">
                        <div class="flex items-center mb-6">
                            <img src="images/shiru.jpg" alt="" class="w-24 h-24 rounded-full mr-4">
                            <div>
                                <h3 class="text-xl font-semibold">Grace Nyota</h3>
                                <p class="text-gray-600">Founder & CEO</p>
                                <p>Grace is passionate about travel and has a deep knowledge of Kenya’s landscapes and culture.</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="images/allan.jpg" alt="Allan Nyota" class="w-24 h-24 rounded-full mr-4">
                            <div>
                                <h3 class="text-xl font-semibold">Allan Nyota</h3>
                                <p class="text-gray-600">Head of Operations</p>
                                <p>Allan ensures that every aspect of your journey runs smoothly, from logistics to customer service.</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/2">
                        <img src="https://images.inc.com/uploaded_files/image/1920x1080/getty_927720230_371995.jpg" alt="Team Work" class="w-full h-auto rounded-lg shadow-lg">
                    </div>
                </div>
            </div>

            <!-- Achievements -->
            <div>
                <h2 class="text-2xl font-semibold mb-4 text-center">Our Achievements</h2>
                <p class="text-center mb-4">Over the years, we have been recognized for our exceptional service and innovative travel solutions. Some of our milestones include:</p>
                <ul class="list-disc list-inside mx-auto max-w-md text-center">
                    <li>Best Tour Operator Award 2023</li>
                    <li>Top 10 Travel Companies in Kenya</li>
                    <li>Over 10,000 satisfied customers</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Enchanting Trails. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
<!-- Contact Us Section -->
<section class="contact-us bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
        <div class="flex flex-col md:flex-row md:space-x-8">
            <div class="md:w-1/2">
                <h3 class="text-xl font-semibold mb-2">Get in Touch</h3>
                <p class="mb-2">Phone: +254743863767</p>
                <p class="mb-2">Email: <a href="mailto:toursandtravel254.co.ke" class="text-blue-600">toursandtravel254.co.ke</a></p>
                <h3 class="text-xl font-semibold mt-4 mb-2">Visit Us on Social Media</h3>
                <div class="flex space-x-4">
                    <a href="https://www.instagram.com" target="_blank" class="text-gray-600 hover:text-gray-900"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://www.twitter.com" target="_blank" class="text-gray-600 hover:text-gray-900"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.tiktok.com" target="_blank" class="text-gray-600 hover:text-gray-900"><i class="fab fa-tiktok fa-2x"></i></a>
                    <a href="https://www.facebook.com" target="_blank" class="text-gray-600 hover:text-gray-900"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
            </div>
            <div class="md:w-1/2 mt-8 md:mt-0">
                <h3 class="text-xl font-semibold mb-2">Send Us a Message</h3>
                <form id="contact-form" action="#" method="POST" class="space-y-4">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                        <p id="email-error" class="text-red-600 text-sm hidden">Please enter a valid email address.</p>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section Ends -->

<script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form from submitting

        // Validate email
        var emailInput = document.getElementById('email');
        var emailError = document.getElementById('email-error');
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!emailPattern.test(emailInput.value)) {
            emailError.classList.remove('hidden');
            return;
        } else {
            emailError.classList.add('hidden');
        }

        // If validation passes, display alert
        alert('Your message has been sent successfully!');
        
        // Here you would normally submit the form or handle the form data
        // e.g., using AJAX to send the form data to the server
        
        // Reset the form after submission
        document.getElementById('contact-form').reset();
    });
</script>
