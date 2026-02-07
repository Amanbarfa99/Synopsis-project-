<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Add Student</h2>
<form action="insert.php" method="POST">
    <input type="text" name="name" placeholder="Student Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="course" placeholder="Course" required>
    <input type="number" name="age" placeholder="Age" required>
    <button type="submit">Add Student</button>
</form>
<br>
<a href="view.php">View Students</a>
</body>
</html>