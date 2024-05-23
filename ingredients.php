<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingredients Form</title>
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
        input[type="text"],
        input[type="number"] {
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
        <label for="name">Ingredient Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="quantity">Quantity:</label>
        <input type="text" id="quantity" name="quantity">
        
        <label for="recipe_id">Recipe ID:</label>
        <input type="number" id="recipe_id" name="recipe_id" required>
        
        <input type="submit" value="Submit">
    </form>
<!-- Delete Ingredient Form -->
<form action="delete_ingredient.php" method="post">
    <input type="hidden" name="ingredient_id" value="1"> <!-- Replace 1 with the actual ingredient_id -->
    <input type="submit" value="Delete Ingredient">
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "127.0.0.1";  // or "localhost"
        $username = "your_database_username";
        $password = "your_database_password";
        $dbname = "recipes_sharing_platforms";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("<div class='message error'>Connection failed: " . $conn->connect_error . "</div>");
        }

        $name = $_POST['name'];
        $quantity = $_POST['quantity'];
        $recipe_id = $_POST['recipe_id'];

        $sql = "INSERT INTO ingredients (name, quantity, recipe_id) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $name, $quantity, $recipe_id);

        if ($stmt->execute()) {
            echo "<div class='message success'>New ingredient added successfully</div>";
        } else {
            echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
