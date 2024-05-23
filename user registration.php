<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
        .registration-form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 300px;
        }
        .registration-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }
        .registration-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        .registration-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
        }
        .registration-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }
        .registration-form button:hover {
            background-color: #555;
        }
        .registration-form p {
            text-align: center;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="registration-form">
        <h2>Register</h2>
        <form action="register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Register</button>
        </form>
        <!-- Delete User Form -->
<form action="delete_user.php" method="post">
    <input type="hidden" name="user_id" value="1"> <!-- Replace 1 with the actual user_id -->
    <input type="submit" value="Delete User">
</form>

        <p>Already have an account? <a href="user login.php">Login here</a>.</p>
    </div>
</body>
</html>
