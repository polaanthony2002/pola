<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pola"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $stmt = $conn->prepare("INSERT INTO comm (name, comment) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $comment);
    $stmt->execute();
    $stmt->close();
}

$conn->close();
header("Location: community.php"); // Replace with your page file
exit();
?>
