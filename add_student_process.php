<?php
include 'db_connection.php';

$sql_count = "SELECT COUNT(*) as count FROM students";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$count = $row_count['count'];

$new_id = $count + 1;

$name = $_POST['name'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$sql = "INSERT INTO students (id, name, age, grade) VALUES ('$new_id', '$name', '$age', '$grade')";

if ($conn->query($sql) === TRUE) {
    header("Location: add_student.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
