<?php
if(isset($_POST['ingredient_id']) && !empty($_POST['ingredient_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM ingredients WHERE ingredient_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['ingredient_id']);
        if($stmt->execute()) {
            echo "Ingredient deleted successfully.";
        } else {
            echo "Error deleting ingredient: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid ingredient_id.";
}
?>
