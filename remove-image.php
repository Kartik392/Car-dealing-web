<?php
$conn = new mysqli("localhost", "root", "K4rtik03@", "gallery_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $result = $conn->query("SELECT image_path FROM images WHERE id = $id");
    if ($result && $row = $result->fetch_assoc()) {
        $file = $row['image_path'];
        if (file_exists($file)) {
            unlink($file);
        }
        $conn->query("DELETE FROM images WHERE id = $id");
    }
}
?>
