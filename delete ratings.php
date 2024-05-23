<?php
if(isset($_POST['rating_id']) && !empty($_POST['rating_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM ratings WHERE rating_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['rating_id']);
        if($stmt->execute()) {
            echo "Rating deleted successfully.";
        } else {
            echo "Error deleting rating: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid rating_id.";
}
?>
