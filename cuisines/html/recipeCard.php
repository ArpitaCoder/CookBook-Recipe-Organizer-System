<?php
// 1. Connect to the database
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

// 2. Fetch recipes, optionally filtered by category
$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : '';

if (!empty($category)) {
    $sql = "SELECT id, dish_name, image_path, author_name, created_at FROM recipes WHERE category = '$category' ORDER BY id DESC";
} else {
    $sql = "SELECT id, dish_name, image_path, author_name, created_at FROM recipes ORDER BY id DESC";
}

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="rec recipe-item" data-id="<?php echo $row['id']; ?>">
            <div class="r_menu">
                <img src="/CookBook-Recipe-Organizer-System/<?php echo !empty($row['image_path']) ? $row['image_path'] : 'components/img/default-dish.png'; ?>" 
     alt="Recipe Image">
            </div>
            <h3><?php echo $row['dish_name']; ?></h3>
            <p><?php echo $row['author_name']; ?> &bull; <?php echo date('M d, Y', strtotime($row['created_at'])); ?></p>
        </div>
        <?php
    }
} else {
    echo "<p style='color: white;'>No recipes found in this category yet.</p>";
}
?>