<?php
// Check if category_id is set and not empty
if(isset($_POST['category_id']) && !empty($_POST['category_id'])) {
    // Include database connection
    include 'db_connection.php';
    
    // Prepare a delete statement
    $sql = "DELETE FROM categories WHERE category_id = ?";
    
    if($stmt = $conn->prepare($sql)) {
        // Bind the category_id parameter
        $stmt->bind_param("i", $_POST['category_id']);
        
        // Attempt to execute the statement
        if($stmt->execute()) {
            echo "Category deleted successfully.";
        } else {
            echo "Error deleting category: " . $stmt->error;
        }
        
        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $conn->close();
} else {
    echo "Invalid category_id.";
}
?>
