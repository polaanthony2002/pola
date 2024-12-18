<?php
$host = 'localhost';
$dbname = 'pola';
$username = 'root';
$password = '';

$data = json_decode(file_get_contents("php://input"), true);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("INSERT INTO suggestions (title, content) VALUES (?, ?)");
    $stmt->execute([$data['title'], $data['content']]);

    echo json_encode(["status" => "success"]);
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => $e->getMessage()]);
}
?>
