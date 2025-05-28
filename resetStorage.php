<?php
include("database.php");

// Delete all records from the database table
$sql = "DELETE FROM esp32_db";
if (mysqli_query($conn, $sql)) {
    echo "Storage reset successfully.";
} else {
    echo "Error resetting storage: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
