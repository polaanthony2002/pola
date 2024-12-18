<?php
$conn = new mysqli("localhost", "root", "", "pola");

$poll_id = $_POST['poll_id'];
$option_id = $_POST['option_id'];
$anonymous = $_POST['anonymous'];

$stmt = $conn->prepare("INSERT INTO votes (poll_id, option_id, anonymous) VALUES (?, ?, ?)");
$stmt->bind_param("iii", $poll_id, $option_id, $anonymous);

if ($stmt->execute()) {
    echo "Vote submitted successfully!";
} else {
    echo "Error: " . $stmt->error;
}
$conn->close();
?>
