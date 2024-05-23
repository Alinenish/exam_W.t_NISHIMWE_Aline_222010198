<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
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

        .upload-form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        .upload-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .upload-form input,
        .upload-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .upload-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        .upload-form button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Recipe</h1>
        <div class="upload-form">
            <form id="recipeForm" action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="ingredients">Ingredients:</label>
                <textarea id="ingredients" name="ingredients" required></textarea>

                <label for="instructions">Instructions:</label>
                <textarea id="instructions" name="instructions" required></textarea>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <button type="button" onclick="validateForm()">Upload</button>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            var title = document.getElementById('title').value;
            var description = document.getElementById('description').value;
            var ingredients = document.getElementById('ingredients').value;
            var instructions = document.getElementById('instructions').value;
            var image = document.getElementById('image').value;

            if (title === '' || description === '' || ingredients === '' || instructions === '' || image === '') {
                alert('All fields are required');
            } else {
                document.getElementById('recipeForm').submit();
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Recipe</title>
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

        .upload-form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 600px;
        }

        .upload-form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .upload-form input,
        .upload-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .upload-form button {
            width: 100%;
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        .upload-form button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Recipe</h1>
        <div class="upload-form">
            <form id="recipeForm" action="upload.php" method="POST" enctype="multipart/form-data">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <label for="ingredients">Ingredients:</label>
                <textarea id="ingredients" name="ingredients" required></textarea>

                <label for="instructions">Instructions:</label>
                <textarea id="instructions" name="instructions" required></textarea>

                <label for="image">Image:</label>
                <input type="file" id="image" name="image" accept="image/*" required>

                <button type="button" onclick="validateForm()">Upload</button>
            </form>
        </div>
    </div>

    <script>
        function validateForm() {
            var title = document.getElementById('title').value;
            var description = document.getElementById('description').value;
            var ingredients = document.getElementById('ingredients').value;
            var instructions = document.getElementById('instructions').value;
            var image = document.getElementById('image').value;

            if (title === '' || description === '' || ingredients === '' || instructions === '' || image === '') {
                alert('All fields are required');
            } else {
                document.getElementById('recipeForm').submit();
            }
        }
    </script>
</body>
</html>
