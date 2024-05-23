<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        .login-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        .login-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form button:hover {
            background-color: #555;
        }
        .login-form p {
            text-align: center;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form id="loginForm" action="user/recipes.php" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="button" onclick="login()">Login</button>
        </form>
        <p>Don't have an account? <a href="user registration.php">Register here</a>.</p>
    </div>
    <script>
        function login() {
            document.getElementById('loginForm').submit();
        }
    </script>
</body>
</html>
