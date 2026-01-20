<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>ProjectBlok6B</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        header {
            background: #1f2937;
            color: white;
            padding: 18px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
        }

        nav a:hover {
            color: #fbbf24;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
        }

        footer {
            background: #1f2937;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 60px;
        }
    </style>
</head>

<body>

<header>
    <div>🍽 ProjectBlok6B</div>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('dishes.index') }}">Menu</a>
        <a href="{{ route('ingredients.index') }}">Ingrediënten</a>
        <a href="{{ route('orders.index') }}">Orders</a>
    </nav>
</header>

<div class="container">
    {{ $slot }}
</div>

<footer>
    © {{ date('Y') }} ProjectBlok6B Restaurant
</footer>

</body>
</html>
