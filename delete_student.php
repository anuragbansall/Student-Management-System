<?php
include 'db_connection.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM students WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_students.php");
        exit();
    } else {
        echo "Error deleting student: " . $conn->error;
    }
} else {
    echo "No student ID provided";
}

$conn->close();
?>
