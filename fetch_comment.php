<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "pola");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch comments from the database
$sql = "SELECT name, comment, timestamp FROM comm ORDER BY timestamp DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="comment-item">';
        echo '<p class="comment-name">' . htmlspecialchars($row['name']) . '</p>';
        echo '<p class="comment-date">' . htmlspecialchars($row['timestamp']) . '</p>';
        echo '<p>' . htmlspecialchars($row['comment']) . '</p>';
        echo '</div>';
    }
} else {
    echo "<p>No comments yet.</p>";
}

$conn->close();
?>
