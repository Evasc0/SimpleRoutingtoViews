<!DOCTYPE html>
<html>
<head>
    <title>Item Management</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">  <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .btn-primary {
            margin-bottom: 20px;
        }
        .list-group-item {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
        }
        .list-group-item a {
            margin-left: 10px; 
        }
        .alert-success {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .item-details {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
        }
        .item-details h1 {
            margin-bottom: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>