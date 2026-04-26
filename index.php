<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CookBook</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="components/index.css">
    <link rel="stylesheet" href="components/css/header.css">
    <link rel="stylesheet" href="components/css/main.css">
    <link rel="stylesheet" href="components/css/menu.css">
    <link rel="stylesheet" href="components/css/contact.css">
    <link rel="stylesheet" href="components/css/logIn.css">
    <link rel="stylesheet" href="components/css/SignIn.css">
    <link rel="stylesheet" href="components/css/addRecipe.css">
</head>
<body>
    
</body>
<?php 
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php'; 
?> 
<?php include 'components/html/logIn.php'; ?>
<?php include 'components/html/SignIn.php'; ?>
<?php include 'components/html/addRecipe.php'; ?>
<?php include 'components/html/header.php'; ?>
<?php include 'components/html/main.php'; ?>
<?php include 'components/html/menu.php'; ?>


<script src="components/JS/logIn_SignIn.js"></script>
</html>