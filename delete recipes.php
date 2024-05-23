<?php
if(isset($_POST['recipe_id']) && !empty($_POST['recipe_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM recipes WHERE recipe_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['recipe_id']);
        if($stmt->execute()) {
            echo "Recipe deleted successfully.";
        } else {
            echo "Error deleting recipe: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid recipe_id.";
}
?>
