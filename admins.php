<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        .message {
            max-width: 500px;
            margin: 20px auto;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="user_id">User ID:</label>
        <input type="number" id="user_id" name="user_id" required>
        
        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>
        
        <input type="submit" value="Submit">
    </form>
    <!-- Delete Admin Form -->
<form action="delete_admin.php" method="post">
    <input type="hidden" name="admin_id" value="1"> <!-- Replace 1 with the actual admin_id -->
    <input type="submit" value="Delete Admin">
</form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";  // or "localhost"
        $username = "root";
        $password = "";
        $dbname = "recipes_sharing_platforms";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("<div class='message error'>Connection failed: " . $conn->connect_error . "</div>");
        }

        $user_id = $_POST['user_id'];
        $role = $_POST['role'];

        $sql = "INSERT INTO admins (user_id, role, created_at) VALUES (?, ?, NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $role);

        if ($stmt->execute()) {
            echo "<div class='message success'>New record created successfully</div>";
        } else {
            echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
