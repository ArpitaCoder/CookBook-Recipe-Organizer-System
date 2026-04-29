<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/CookBook-Recipe-Organizer-System/database.php';

header('Content-Type: application/json');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM recipes WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        $ingredients = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $row['ingredients'])));
        $method = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $row['method'])));

        $data = [
            'title' => $row['dish_name'],
            'desc' => $row['description'],
            'author' => $row['author_name'],
            'date' => date('d-m-Y', strtotime($row['created_at'])),
            'img' => '/CookBook-Recipe-Organizer-System/' . $row['image_path'],
            'ingredients' => array_values($ingredients),
            'method' => array_values($method)
        ];

        echo json_encode($data);
    } else {
        echo json_encode(['error' => 'Recipe not found']);
    }
} else {
    echo json_encode(['error' => 'No ID provided']);
}
?>
