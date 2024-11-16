<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Career Guidance</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <!-- Styles -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 20px;
        }
        h1 {
            margin: 0;
            font-size: 2em;
            color: #fff;
        }
        p {
            color: #aaa;
        }
        .button-container {
            margin-top: 20px;
        }
        .button-container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #ff9900;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button-container a:hover {
            background-color: #e68a00;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Career Guidance Web Application</h1>
        <p>Explore higher learning institutions, faculties, and courses.</p>
        
        <div class="button-container">
            <a href="{{ route('student.login') }}">Student Login</a>
            <a href="{{ route('institution.login') }}">Institution Login</a>
            <a href="{{ route('admin.login') }}">Admin Login</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
