<?php
$host = 'localhost';
$dbname = 'pola';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM suggestions ORDER BY date DESC");
    $suggestions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($suggestions as &$suggestion) {
        $stmtComments = $pdo->prepare("SELECT * FROM comments WHERE suggestion_id = ?");
        $stmtComments->execute([$suggestion['id']]);
        $suggestion['comments'] = $stmtComments->fetchAll(PDO::FETCH_ASSOC);
    }

    echo json_encode($suggestions);
} catch (PDOException $e) {
    echo json_encode([]);
}
?>
