<?php
if(isset($_POST['list_id']) && !empty($_POST['list_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM shopping_lists WHERE list_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['list_id']);
        if($stmt->execute()) {
            echo "Shopping List deleted successfully.";
        } else {
            echo "Error deleting shopping list: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid list_id.";
}
?>
