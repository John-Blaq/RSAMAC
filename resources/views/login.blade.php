<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - South African Muslim Council</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('logo.jpg') }}" alt="Logo" class="h-20 w-20">
            </div>
            <!-- Title -->
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Welcome Back</h2>
            <!-- Login Form -->
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password" required>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 text-gray-700">Remember Me</label>
                    </div>
                    <a href="#" class="text-blue-600 hover:underline text-sm">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">Login</button>
            </form>
            <!-- Divider -->
            <div class="mt-6 border-t border-gray-300"></div>
            <!-- Register Link -->
            <p class="text-center text-gray-600 mt-4">Don't have an account? <a href="/signup" class="text-blue-600 hover:underline">Sign Up</a></p>
        </div>
    </div>

</body>
</html>