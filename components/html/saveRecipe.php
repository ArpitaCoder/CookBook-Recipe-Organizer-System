<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize Data
    $dishName = mysqli_real_escape_string($conn, $_POST['dishName']);
    $authorName = mysqli_real_escape_string($conn, $_POST['authorName']);
    $disc = mysqli_real_escape_string($conn, $_POST['description']);
    $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $category = mysqli_real_escape_string($conn, $_POST['category']); // Captured here!

    // 2. Image Handling
    $uploadDir = "../../uploads/"; 
    if (!is_dir($uploadDir)) { mkdir($uploadDir, 0777, true); }

    $fileName = time() . "_" . basename($_FILES["recipeImage"]["name"]);
    $targetPath = $uploadDir . $fileName;
    $dbPath = "uploads/" . $fileName; 

    if (move_uploaded_file($_FILES["recipeImage"]["tmp_name"], $targetPath)) {
        // 3. Insert into Database (Include category in the list below)
        $sql = "INSERT INTO recipes (dish_name, author_name, description, ingredients, method, image_path, category, created_at) 
                VALUES ('$dishName', '$authorName', '$disc', '$ingredients', '$method', '$dbPath', '$category', NOW())";

        if (mysqli_query($conn, $sql)) {
            // Using absolute path for redirect is safer as we discussed!
                            // echo "<script>alert('Recipe Added to " . ucfirst($category) . "!'); window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
            echo "<script>window.location.href='/CookBook-Recipe-Organizer-System/index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Image upload failed.";
    }
}
?>