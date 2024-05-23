<?php
// Check if admin_id is set and not empty
if(isset($_POST['admin_id']) && !empty($_POST['admin_id'])) {
    // Include database connection
    include 'db_connection.php';
    
    // Prepare a delete statement
    $sql = "DELETE FROM admins WHERE admin_id = ?";
    
    if($stmt = $conn->prepare($sql)) {
        // Bind the admin_id parameter
        $stmt->bind_param("i", $_POST['admin_id']);
        
        // Attempt to execute the statement
        if($stmt->execute()) {
            echo "Admin deleted successfully.";
        } else {
            echo "Error deleting admin: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $conn->close();
} else {
    echo "Invalid admin_id.";
}
?>
