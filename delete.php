<?php
include 'dataBase.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // SQL query to delete the record
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();

    // Redirect back to read.php after deletion
    header("Location: read.php");
    exit();
} else {
    echo "No ID parameter provided";
}
?>