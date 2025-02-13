<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
    <style>
        body {
            font-family: sans-serif;
            background-color:rgb(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0; 
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, Laravel!</h1>
        <p>Welcome, @if(isset($user)) {{ $user }} @else POGI @endif!</p>
    </div>
</body>
</html>