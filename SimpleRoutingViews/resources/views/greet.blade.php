<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    @vite('resources/css/app.css')

</head>
<body class="flex justify-center items-center min-h-screen bg-black">
    <div class="container bg-white p-6 rounded-lg shadow-lg text-center">
        <h1 class="text-3xl font-bold text-gray-800">Hello, Laravel!</h1>
        <p class="text-gray-600">
            Welcome, @if(isset($user)) {{ $user }} @else POGI @endif!
        </p>
    </div>
</body>
</html>
