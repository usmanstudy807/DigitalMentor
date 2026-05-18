<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "student" && $password == "12345"){
    echo "<h1>Login Successful</h1>";
    echo "<p>Welcome " . $username . "</p>";
} else {
    echo "<h1>Invalid Username or Password</h1>";
}

?>