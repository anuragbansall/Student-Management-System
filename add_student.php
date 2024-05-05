<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="add-student">
    <h2>Add Student</h2>
    <form action="add_student_process.php" method="post">
        <div class="row">
            <label>Name:</label>
            <input type="text" name="name" required placeholder="Enter Name">
        </div>
            <div class="row">
            <label>Age:</label>
        <input type="number" name="age" placeholder="Enter Age">
        </div>
        <div class="row">
            <label>Grade:</label>
            <input type="text" name="grade" placeholder="Enter Grade">
        </div>
        <button>Add Student</button>
    </form>
    <a href="index.php" id="back-to-home">Back to Home</a>
    </main>
</body>
</html>
