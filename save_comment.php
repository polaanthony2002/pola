<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "pola");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Insert comment into database
$sql = "INSERT INTO comm (name, email, comment) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $comment);

if ($stmt->execute()) {
    header("Location: community.php"); // Redirect back to the main page
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
