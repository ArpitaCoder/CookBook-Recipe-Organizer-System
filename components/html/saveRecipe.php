<?php
// Start at root to find database.php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize Data
    $dishName = mysqli_real_escape_string($conn, $_POST['dishName']);
    $disc = mysqli_real_escape_string($conn, $_POST['description']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);

    // 2. Image Handling
    $uploadDir = "../../uploads/"; 
    if (!is_dir($uploadDir)) { mkdir($uploadDir, 0777, true); }

    $fileName = time() . "_" . basename($_FILES["recipeImage"]["name"]);
    $targetPath = $uploadDir . $fileName;
    $dbPath = "uploads/" . $fileName; // Path for the database to use

    if (move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $targetPath)) {
        // 3. Insert into Database
        $sql = "INSERT INTO recipes (dish_name, description, ingredients, method, image_path) 
                VALUES ('$dishName', '$disc', '$ingredients', '$method', '$dbPath')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Recipe Added!'); window.location.href='../../index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image upload failed.";
    }
}
?>