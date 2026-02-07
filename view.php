<?php
include "db.php";
$result = mysqli_query($conn, "SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head>
<title>Student List</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Student List</h2>
<table>
<tr>
<th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Age</th><th>Action</th>
</tr>
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['course']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php } ?>
</table>
<br>
<a href="index.php">Add New Student</a>
</body>
</html>