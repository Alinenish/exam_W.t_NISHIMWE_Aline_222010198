<?php
if(isset($_POST['user_id']) && !empty($_POST['user_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM users WHERE user_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['user_id']);
        if($stmt->execute()) {
            echo "User deleted successfully.";
        } else {
            echo "Error deleting user: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid user_id.";
}
?>
