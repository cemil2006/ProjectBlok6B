<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header & Navigatie */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: #e74c3c;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #e74c3c;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 6rem 2rem;
            text-align: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
        }

        .btn {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #c0392b;
        }

        /* Secties */
        section {
            padding: 3rem 0;
        }

        section h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2rem;
            color: #2c3e50;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .card {
            background: #f9f9f9;
            padding: 1.5rem;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #e74c3c;
            margin-bottom: 0.5rem;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        footer p {
            margin: 0.5rem 0;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">🍽️ Restaurant</div>
                <nav>
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about">Over Ons</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Welkom bij onze Restaurant</h1>
            <p>Authentieke smaken, kwaliteit ingrediënten</p>
            <a href="#menu" class="btn">Bekijk Menu</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">
        <!-- Menu Sectie -->
        <section id="menu">
            <h2>Ons Menu</h2>
            <div class="grid">
                <div class="card">
                    <h3>🥗 Salades</h3>
                    <p>Verse salades bereid met biologische ingrediënten</p>
                </div>
                <div class="card">
                    <h3>🍝 Pasta</h3>
                    <p>Traditionele Italiaanse pasta recepten</p>
                </div>
                <div class="card">
                    <h3>🥩 Vlees</h3>
                    <p>Premium vlees gerechten</p>
                </div>
            </div>
        </section>

        <!-- Over Ons -->
        <section id="about">
            <h2>Over Ons</h2>
            <p style="text-align: center; max-width: 800px; margin: 0 auto;">
                Sinds 2010 serveren we authentieke culinaire ervaringen. Onze chef-koks 
                bereiden elk gerecht met passie en aandacht voor detail.
            </p>
        </section>

        <!-- Contact -->
        <section id="contact">
            <h2>Neem Contact Op</h2>
            <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                <p>📍 Adres: Hoofdstraat 123, Amsterdam</p>
                <p>📞 Telefoon: +31 (0)20 123 4567</p>
                <p>📧 Email: info@restaurant.nl</p>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 Restaurant. Alle rechten voorbehouden.</p>
        <p>Volg ons op social media</p>
    </footer>
</body>
</html>