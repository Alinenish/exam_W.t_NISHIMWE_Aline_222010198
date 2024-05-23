<?php
if(isset($_POST['comment_id']) && !empty($_POST['comment_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM comments WHERE comment_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['comment_id']);
        if($stmt->execute()) {
            echo "Comment deleted successfully.";
        } else {
            echo "Error deleting comment: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid comment_id.";
}
?>
