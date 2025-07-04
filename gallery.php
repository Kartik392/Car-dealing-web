<?php
// database connection
$conn = new mysqli("localhost", "root", "K4rtik03@", "gallery_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// handle image upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $targetDir = "uploads/";
    $fileName = basename($_FILES["image"]["name"]);
    $targetPath = $targetDir . time() . "_" . $fileName;

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetPath)) {
        $conn->query("INSERT INTO images (image_path) VALUES ('$targetPath')");
        header("Location: gallery.php");
        exit;
    } else {
        echo "Failed to upload image.";
    }
}

// handle image delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $result = $conn->query("SELECT image_path FROM images WHERE id = $id");
    if ($result->num_rows > 0) {
        $img = $result->fetch_assoc();
        if (file_exists($img['image_path'])) {
            unlink($img['image_path']);
        }
        $conn->query("DELETE FROM images WHERE id = $id");
    }
    header("Location: gallery.php");
    exit;
}

// fetch images
$result = $conn->query("SELECT * FROM images ORDER BY id DESC");
$images = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Gallery Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background-color: #121212;
      color: white;
    }
    .gallery-container {
      padding: 20px;
    }
    .image-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }
    .image-grid img {
      max-width: 100%;
      border-radius: 10px;
      height: 200px;
      object-fit: cover;
      cursor: pointer;
    }
    .upload-section {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #1e1e1e;
      padding: 15px;
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .upload-section input[type="file"] {
      display: none;
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
         
            <div class="col-md-4 nav-icons">
                <a href="#" class="text-white nav-link"><i class="bi bi-list"></i>SEARCH</a>
                <a href="#" class="text-white nav-link"><i class="bi bi-search"></i>MENU</a>
            </div>
            
            
            <a class="col-md-4 navbar-brand m-0" href="#">SPARTAN <br> HORSE</a>
            
           
            <div class="col-md-4 nav-icons">
                <a href="#" class="text-white"><i class="bi bi-person"></i> JOHN DOE</a>
                <a href="#" class="text-white">Logout</a>
                <a href="#" class="text-white position-relative">
                    <i class="bi bi-car-front"></i>
                </a>
                <a href="#" class="text-white"><i class="bi bi-journal"></i></a>
            </div>
        </div>
    </nav>


  <div class="container gallery-container">
    <h1 class="mb-4">Image Gallery</h1>

    <!-- Upload and Delete Buttons -->
    <form class="upload-section" action="gallery.php" method="post" enctype="multipart/form-data">
      <input type="file" name="image" id="imageUpload" onchange="document.getElementById('submitBtn').click()" required>
      <button type="submit" id="submitBtn" class="btn btn-outline-success d-none">Upload</button>

      <!-- Add Image Button -->
      <button type="button" class="btn btn-primary" onclick="document.getElementById('imageUpload').click()">Add Image</button>

      <!-- Remove Image Button -->
      <button type="button" class="btn btn-danger" onclick="activateDeleteMode()">Remove Image</button>
    </form>

    <!-- Images -->
    <div  style="min-height: 40vh;" class="image-grid" id="imageGrid">
      <?php foreach ($images as $img): ?>
        <div class="img-box" data-id="<?= $img['id'] ?>">
          <img src="<?= htmlspecialchars($img['image_path']) ?>" alt="Uploaded Image" onclick="handleImageClick(this, <?= $img['id'] ?>)">
        </div>
      <?php endforeach; ?>
    </div>
  </div>


  <!-- Footer -->
  <footer>
        <div class="footer-container">
            <div class="footer-item">© 2025 Spartan Horse</div>
            <div class="footer-item">Privacy Policy</div>
            <div class="footer-item">Contact: info@spartanhorse.com</div>
        </div>
    </footer>

  <script>
    let deleteMode = false;

    function activateDeleteMode() {
      deleteMode = true;
      alert("Click on the image you want to delete.");
    }

    function handleImageClick(imgElement, id) {
      if (deleteMode) {
        if (confirm("Are you sure you want to delete this image?")) {
          window.location.href = `gallery.php?delete=${id}`;
        } else {
          deleteMode = false;
        }
      }
    }
  </script>
</body>
</html>
