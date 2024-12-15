<?php
// Database configuration
$host = 'localhost';
$dbname = 'rating';
$username = 'root';
$password = '';

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute a query to fetch reviews
    $query = "SELECT user_name, user_review FROM review_table";
    $stmt = $pdo->query($query);
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Send the reviews as JSON response
    header("Content-Type: application/json");
    echo json_encode($reviews);
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>



