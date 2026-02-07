<?php
include "db.php";
$name = $_POST['name'];
$email = $_POST['email'];
$course = $_POST['course'];
$age = $_POST['age'];

$sql = "INSERT INTO students (name, email, course, age) VALUES ('$name','$email','$course','$age')";
mysqli_query($conn, $sql);
header("Location: view.php");
?>