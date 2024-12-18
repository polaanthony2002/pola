<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'create_meeting') {
        $title = $_POST['title'];
        $date = $_POST['date'];
        
        $stmt = $conn->prepare("INSERT INTO meetings (title, date) VALUES (?, ?)");
        $stmt->bind_param("ss", $title, $date);
        $stmt->execute();
        echo "Meeting created successfully";
    } elseif ($action === 'create_poll') {
        $question = $_POST['question'];
        $anonymous = isset($_POST['anonymous']) ? 1 : 0;
        
        $stmt = $conn->prepare("INSERT INTO polls (question, anonymous) VALUES (?, ?)");
        $stmt->bind_param("si", $question, $anonymous);
        $stmt->execute();
        $poll_id = $conn->insert_id;

        foreach ($_POST['options'] as $option_text) {
            $stmt = $conn->prepare("INSERT INTO poll_options (poll_id, option_text) VALUES (?, ?)");
            $stmt->bind_param("is", $poll_id, $option_text);
            $stmt->execute();
        }
        echo "Poll created successfully";
    }
}
?>
