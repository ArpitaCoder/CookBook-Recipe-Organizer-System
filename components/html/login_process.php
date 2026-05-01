<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['name'];
            $_SESSION['login'] = true;
            echo "<script>window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
        }
    } else {
        echo "<script>alert('User not found!'); window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
    }
}
?>
