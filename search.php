<?php
$servername = "localhost";
$username = "root";  
$password = "K4rtik03@";     
$car_inventory_db = "car_inventory_db"; 

$conn = new mysqli($servername, $username, $password, $car_inventory_db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['searchQuery'])) {
    $searchQuery = $_POST['searchQuery'];
    
    $stmt = $conn->prepare("SELECT * FROM cars WHERE name LIKE ? OR model LIKE ? OR description LIKE ? OR year LIKE ?");
    $searchTerm = "%" . $searchQuery . "%"; 
    $stmt->bind_param("ssss", $searchTerm, $searchTerm, $searchTerm, $searchTerm);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='search-result-item'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>Model: " . htmlspecialchars($row['model']) . "</p>";
            echo "<p>Description: " . htmlspecialchars($row['description']) . "</p>";
            echo "<p>Price: $" . htmlspecialchars($row['price']) . "</p>";
            echo "<p>Year: " . htmlspecialchars($row['year']) . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No results found for <strong>" . htmlspecialchars($searchQuery) . "</strong>.</p>";
    }

    $stmt->close();
}

$conn->close();
?>
