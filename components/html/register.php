<?php
session_start();
$conn = new mysqli("localhost", "root", "", "recipe_ds");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password) 
        VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $name;
    $_SESSION['login'] = true;
    echo "<script>window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>