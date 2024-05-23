<?php
if(isset($_POST['activity_id']) && !empty($_POST['activity_id'])) {
    include 'db_connection.php';
    $sql = "DELETE FROM user_activity WHERE activity_id = ?";
    if($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_POST['activity_id']);
        if($stmt->execute()) {
            echo "User Activity deleted successfully.";
        } else {
            echo "Error deleting user activity: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
} else {
    echo "Invalid activity_id.";
}
?>
