<?php
if(isset($_POST['list_ingredient_id']) && !empty($_POST['list_ingredient_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM list_ingredients WHERE list_ingredient_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['list_ingredient_id']);
        if($stmt->execute()) {
            echo "List Ingredient deleted successfully.";
        } else {
            echo "Error deleting list ingredient: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid list_ingredient_id.";
}
?>
