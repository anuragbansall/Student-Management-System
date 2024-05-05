<?php
include 'db_connection.php';

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM students WHERE name LIKE '%$search%' OR id = '$search'";
} else {
    $sql = "SELECT * FROM students";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <main id="view-student">
    <h2>Students</h2>
    <form method="GET" action="" id="search-student">
        <input type="text" name="search" placeholder="Search by Name or ID">
        <button type="submit">Search</button>
    </form>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Grade</th>
            <th>Delete</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['grade']; ?></td>
                    <td>
    <a href="delete_student.php?id=<?php echo $row['id']; ?>" class="delete-record">
        <i class="ri-delete-bin-4-line"></i>
    </a>
</td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td colspan="5">No students found</td>
            </tr>
            <?php
        }
        $conn->close();
        ?>
    </table>
    <a href="index.php" id="back-to-home">Back to Home</a>
    </main>
</body>
</html>
