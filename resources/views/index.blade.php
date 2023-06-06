<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RentApp</title>
</head>
<body>

<nav class="bg-gray-800">
    <div class="mx-auto flex px-2 bg-blue-200 h-14 justify-between ">
        <div class="flex items-center justify-center">
            <a href="#" class="bg-blue-900 py-2 px-3 mx-2 rounded-xl text-white hover:bg-blue-700">Home</a>
            <a href="#" class="bg-blue-900 py-2 px-3 mx-2 rounded-xl text-white hover:bg-blue-700">New Listing</a>
            <a href="#" class="bg-blue-900 py-2 px-3 mx-2 rounded-xl text-white hover:bg-blue-700">Profile</a>
        </div>
        <div class="flex items-center justify-center">
            <a href="/register" class="bg-blue-900 py-2 px-3 mx-2 rounded-xl text-white hover:bg-blue-700">Register</a>
            <a href="/login" class="bg-blue-900 py-2 px-3 mx-2 rounded-xl text-white hover:bg-blue-700">Login</a>
        </div>
    </div>
</nav>

<div>
    <h1>
        {{ $name }}
    </h1>
</div>
</body>
</html>
