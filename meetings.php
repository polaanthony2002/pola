<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'register') {
        $meeting_id = $_POST['meeting_id'];
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        
        $stmt = $conn->prepare("INSERT INTO registrations (meeting_id, full_name, email, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("isss", $meeting_id, $full_name, $email, $phone);
        $stmt->execute();
        echo json_encode(['success' => true, 'message' => 'Registration successful']);
        exit();
    }
}
