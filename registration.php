<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .password-guidelines {
            font-size: 0.875rem;
            color: #6b7280; /* Tailwind's text-gray-500 */
        }
        .kenyan-colors {
            background: linear-gradient(90deg, #006600 33%, #ffffff 33%, #ffffff 66%, #ff0000 66%);
            -webkit-background-clip: text;
            color: transparent;
        }
        .background-image {
            background-image: url('https://cheetahsafaris.com/wp-content/uploads/2019/01/AngamaMara-Stay4Pay3-Scott-Ramsay.jpg');
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Ensures the background covers the whole viewport height */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .custom-shadow {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .form-container {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            backdrop-filter: blur(10px); /* Adds a blur effect */
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registrationForm');
            form.addEventListener('submit', function(event) {
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const email = document.getElementById('email').value;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (password !== confirmPassword) {
                    alert('Passwords do not match.');
                    event.preventDefault();
                } else if (password.length < 8 || !/[!@#$%^&*]/.test(password)) {
                    alert('Password must be at least 8 characters long and contain at least one special character.');
                    event.preventDefault();
                } else if (!emailPattern.test(email)) {
                    alert('Please enter a valid email address.');
                    event.preventDefault();
                }
            });

            // Handle country code dropdown
            const countryCodeButton = document.getElementById('dropdown-phone-button');
            const countryCodeDropdown = document.getElementById('dropdown-phone');
            const phoneInput = document.getElementById('phoneNumber');

            countryCodeButton.addEventListener('click', function() {
                countryCodeDropdown.classList.toggle('hidden');
            });

            countryCodeDropdown.querySelectorAll('button').forEach(button => {
                button.addEventListener('click', function() {
                    const countryCode = button.querySelector('span').innerText;
                    countryCodeButton.innerHTML = button.innerHTML;
                    phoneInput.value = countryCode;
                    countryCodeDropdown.classList.add('hidden');
                });
            });
        });
    </script>
</head>
<body class="background-image">
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-extrabold mb-8 text-center kenyan-colors">ENCHANTING TRAILS REGISTRATION</h1>
        <form id="registrationForm" action="registration_handler.php" method="POST" class="max-w-lg mx-auto p-8 rounded-lg custom-shadow form-container">
            <div class="mb-4">
                <label for="firstName" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="firstName" name="firstName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="lastName" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="lastName" name="lastName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="idNumber" class="block text-sm font-medium text-gray-700">ID Number</label>
                <input type="text" id="idNumber" name="idNumber" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="phoneNumber" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <div class="flex items-center">
                    <button id="dropdown-phone-button" data-dropdown-toggle="dropdown-phone" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-md hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
                        +1 <svg class="w-2.5 h-2.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/></svg>
                    </button>
                    <div id="dropdown-phone" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-52 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-phone-button">
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <span class="inline-flex items-center">+1 United States</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <span class="inline-flex items-center">+44 United Kingdom</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">
                                    <span class="inline-flex items-center">+254 Kenya</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <input type="text" id="phoneNumber" name="phoneNumber" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-r-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                </div>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                <p class="password-guidelines">Password must be at least 8 characters long and contain at least one special character.</p>
            </div>
            <div class="mb-4">
                <label for="confirmPassword" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="flex items-center justify-between mb-4">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
                <a href="login.php" class="text-blue-600 hover:underline">Already registered?</a>
            </div>
        </form>
    </div>
</body>
</html>
