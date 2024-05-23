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

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        header {
            background-color: black;
            color: #fff;
            padding: 20px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            margin: 0;
            display: inline-block;
        }

        nav {
            float: right;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1em;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            text-align: center;
            padding: 60px 0;
            background: url('hero-bg.jpg') no-repeat center center/cover;
            color: #fff;
        }

        .hero h2 {
            margin: 0 0 20px;
            font-size: 2.5em;
        }

        .hero p {
            font-size: 1.2em;
        }

        .cta-button {
            background-color: #ff6347;
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            font-size: 1.2em;
        }

        .cta-button:hover {
            background-color: #e55347;
        }

        .featured-recipes {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }

        .featured-recipes h2 {
            margin-bottom: 40px;
            font-size: 2em;
        }

        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .recipe-card {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
            padding-bottom: 60px; /* Add padding at the bottom to make space for buttons */
        }

        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .recipe-card h3 {
            padding: 15px;
            font-size: 1.5em;
            margin: 0;
        }

        .recipe-card .buttons {
            display: flex;
            justify-content: space-around;
            padding: 10px;
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: #fff; /* Background color to make buttons readable */
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }

        .recipe-card .buttons button {
            background-color: #ff6347;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1em;
        }

        .recipe-card .buttons button:hover {
            background-color: #e55347;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Recipe Sharing Platform</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Recipes</a></li>
                    <li><a href="#">Community</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Delete Recipe Form -->
<form action="delete_recipe.php" method="post">
    <input type="hidden" name="recipe_id" value="1"> <!-- Replace 1 with the actual recipe_id -->
    <input type="submit" value="Delete Recipe">
</form>

    <main>
        <section class="hero">
            <div class="container">
                <h2>Welcome to the Recipe Sharing Platform</h2>
                <p>Discover and share your favorite recipes with our community</p>
                <a href="upload.php" class="cta-button">Get Started</a>
            </div>
        </section>
        
        <section class="featured-recipes">
            <div class="container">
                <h2>Featured Recipes</h2>
                <div class="recipe-grid">
                    <div class="recipe-card">
                        <img src="Pasta2.webp" alt="Recipe 1">
                        <h3>Delicious Pasta</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="classic-burgers-u.jpg" alt="Recipe 2">
                        <h3>Classic Burger</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="Vegan-Cobb-Salad-Recipe-2-scaled.jpg" alt="Recipe 3">
                        <h3>Vegan Salad</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="grilled-chicken-horizontal-1532030541.jpg" alt="Recipe 4">
                        <h3>Grilled Chicken</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="chocolate-cake-15-square.jpg" alt="Recipe 5">
                        <h3>Chocolate Cake</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="Caesar-Salad_7-SQ.webp" alt="Recipe 6">
                        <h3>Caesar Salad</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="Classic-Margherita-Pizza-with-Whole-Wheat-Pizza-Crust.jpg" alt="Recipe 7">
                        <h3>Margherita Pizza</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="beef-stew-index-652e94c53b39b.jpg" alt="Recipe 8">
                        <h3>Beef Stew</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="baja-fish-tacos_thecozyapron_1.jpg" alt="Recipe 9">
                        <h3>Fish Tacos</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="Low_FODMAP_Thai_Tom_Yum_Soup.original.jpg" alt="Recipe 10">
                        <h3>Tom Yum Soup</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="easy_fried_rice_0141_800x800.jpg" alt="Recipe 11">
                        <h3>Fried Rice</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="The-Best-Pancake-Recipe-SQUARE.webp" alt="Recipe 12">
                        <h3>Pancakes</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="the-best-classic-hearty-meat-lasagna-recipe-22.jpg" alt="Recipe 13">
                        <h3>Lasagna</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="easy-chicken-curry-photo.jpg" alt="Recipe 14">
                        <h3>Chicken Curry</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                    <div class="recipe-card">
                        <img src="Apple-Pie-Recipe-Video.jpg" alt="Recipe 15">
                        <h3>Apple Pie</h3>
                        <div class="buttons">
                            <button>Comment</button>
                            <button>Share</button>
                            <button>Rate</button>
                        </div>
                    </div>
                </div>
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
