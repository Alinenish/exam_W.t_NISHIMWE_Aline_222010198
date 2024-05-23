<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipe Sharing Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        header {
            background-color:rgb(75, 72, 72);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* New style for buttons */
        .nav-button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .nav-button:hover {
            background-color: #45a049; /* Darker green */
        }

        .hero {
            background-image: url('wallpaper2.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #fff;
        }

        .hero h2 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 40px;
        }

        .cta-button {
            background-color: #ff6347;
            color: #fff;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
        }

        .featured-recipes {
            padding: 50px 0;
            text-align: center;
        }

        .featured-recipes h2 {
            font-size: 2em;
            margin-bottom: 40px;
        }

        .recipe-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
        }

        .recipe-card {
            background-color: #fff;
            width: calc(30% - 20px);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .recipe-card-content {
            padding: 20px;
        }

        .recipe-card h3 {
            margin: 0;
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .recipe-card p {
            margin: 0;
            font-size: 1em;
            color: #555;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Recipe Sharing Platform</h1>
            <nav>
                <ul>
                    <li><button class="nav-button"><a href="about.php">About</a></button></li>
                    <li><button class="nav-button"><a href="contact.php">Contact</a></button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section class="hero">
            <div class="container">
                <h2>Discover, Share, and Explore Recipes from Around the World</h2>
                <p>Join our community of food enthusiasts and start your culinary adventure today!</p>
                <a href="user registration.php" class="cta-button">Get Started</a>
            </div>
        </section>
        
        
    </main>
    
    <footer>
        <div class="container">
            <p>&copy; 2024 Recipe Sharing Platform. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
