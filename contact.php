<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Recipe Sharing Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #ff6347;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        input[type="submit"]:hover {
            background-color: #e5493c;
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
            font-size: 1.2em;
        }

        .social-icons {
            margin-top: 10px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
            font-size: 1.5em;
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Recipe Sharing Platform</h1>
        <form action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

    <footer>
        <div class="container">
            <p>Visit us at:</p>
            <p>123 Recipe St, Foodville, USA 🏠</p>
            <p>Follow us on social media:</p>
            <div class="social-icons">
                <a href="#" title="Facebook"><img src="facebook.png" alt="Facebook"></a>
                <a href="#" title="Twitter"><img src="twitter.png" alt="Twitter"></a>
                <a href="#" title="Instagram"><img src="instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>
