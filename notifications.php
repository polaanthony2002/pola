<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latest Notifications</title>
    <link rel="stylesheet" href="styles.css">


    <style>
        body {
    font-family: Arial, sans-serif;
}

h2 {
    color: #333;
}

form label {
    display: block;
    margin-top: 8px;
}

form input, form textarea {
    width: 100%;
    padding: 8px;
    margin-top: 4px;
}

button {
    margin-top: 12px;
    padding: 10px 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
}

.alert {
    border: 1px solid #ddd;
    padding: 10px;
    margin: 10px 0;
    background-color: #f9f9f9;
}
</style>

</head>
<body>
    <h2>Recent Alerts</h2>
    <div id="alerts">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pola";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT title, message, date_sent FROM notifications ORDER BY date_sent DESC LIMIT 10";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='alert'>";
                echo "<h3>" . $row["title"] . "</h3>";
                echo "<p>" . $row["message"] . "</p>";
                echo "<small>Sent on " . $row["date_sent"] . "</small>";
                echo "</div>";
            }
        } else {
            echo "No alerts available.";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
