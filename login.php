<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        }
        .custom-shadow {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body class="bg-gray-100 background-image">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center text-kenyan-colors">ENCHANTING TRAILS LOGIN</h1>
        <form id="loginForm" action="login_handler.php" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg custom-shadow">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            </div>
            <div class="flex items-center justify-between mb-4">
                <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
                <a href="forgot_password.php" class="text-blue-600 hover:underline">Forgot Password?</a>
            </div>
            <div class="text-center">
                <p class="text-gray-600">Don't have an account?</p>
                <a href="registration.php" class="text-blue-600 hover:underline">Register here</a>
            </div>
        </form>
    </div>
</body>
</html>
