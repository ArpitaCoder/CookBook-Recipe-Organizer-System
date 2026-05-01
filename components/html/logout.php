<?php
session_start();
session_destroy();
header("Location: /CookBook-Recipe-Organizer-System/index.php");
exit();
?>
