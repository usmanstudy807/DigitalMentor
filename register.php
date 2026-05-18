<?php
$conn = new mysqli("localhost", "root", "", "student_portal");

if ($conn->connect_error) {
    die("Connection failed");
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

/* password ko secure hash karo */
$password_hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO students (username, email, password_hash)
VALUES ('$username', '$email', '$password_hash')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful. <a href='index.html'>Login now</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>