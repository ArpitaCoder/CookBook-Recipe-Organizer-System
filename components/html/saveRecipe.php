<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    echo "Error: Please log in to add a recipe!";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize Data
    $dishName = mysqli_real_escape_string($conn, $_POST['dishName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $disc = mysqli_real_escape_string($conn, $_POST['description']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    // 2. Image Handling
    $uploadDir = "../../uploads/"; 
    if (!is_dir($uploadDir)) { mkdir($uploadDir, 0777, true); }

    $fileName = time() . "_" . basename($_FILES["recipeImage"]["name"]);
    $targetPath = $uploadDir . $fileName;
    $dbPath = "uploads/" . $fileName; 

    if (move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $targetPath)) {
        // 3. Insert into Database
        $sql = "INSERT INTO recipes (dish_name, author_name, description, ingredients, method, image_path, category, created_at) 
                VALUES ('$dishName', '$authorName', '$disc', '$ingredients', '$method', '$dbPath', '$category', NOW())";

        if (mysqli_query($conn, $sql)) {
            echo "success";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error: Image upload failed.";
    }
}
?>