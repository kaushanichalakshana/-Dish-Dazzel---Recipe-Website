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

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $userName = $_POST["user_name"];
        $userRating = $_POST["starCount"];
        $userReview = $_POST["user_review"];

        // Prepare the SQL statement
        $sql = "INSERT INTO review_table (user_name, user_rating, user_review) 
                VALUES (:userName, :userRating, :userReview )";

        // Prepare the query
        $stmt = $pdo->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':userRating', $userRating);
        $stmt->bindParam(':userReview', $userReview);

        // Execute the query
        $stmt->execute();

        // Redirect to the original page or show a success message
        header("Location: test_1_1.php"); // Change 'index.php' to your actual page
        exit();
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$pdo = null;
?>
