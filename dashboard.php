<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - Recipe Sharing Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .dashboard {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        .dashboard h2 {
            margin-top: 0;
            font-size: 2em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .dashboard-item {
            margin-bottom: 20px;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
        }

        .dashboard-item h3 {
            margin-top: 0;
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #333;
        }

        .dashboard-item p {
            margin: 0;
            font-size: 1.2em;
            line-height: 1.5;
            color: #555;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container a {
            background-color: #ff6347;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2em;
            margin-right: 10px;
            transition: background-color 0.3s;
            display: inline-block;
        }

        .button-container a:hover {
            background-color: #e5493c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Dashboard</h1>
        <div class="dashboard">
            <h2>Welcome</h2>
            <div class="dashboard-item">
                <h3>Your Recipes</h3>
                <p>View and manage your uploaded recipes.</p>
            </div>
            <div class="dashboard-item">
                <h3>Favorites</h3>
                <p>Access your favorite recipes saved for later.</p>
            </div>
            <div class="dashboard-item">
                <h3>Groups</h3>
                <p>Join groups and forums to connect with other food enthusiasts.</p>
            </div>
            <div class="button-container">
                <a href="user/recipes.php">Recipes</a>
                <a href="home.php">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
