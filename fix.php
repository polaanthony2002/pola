<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Latest Alerts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        .alert {
            margin-bottom: 20px;
            padding: 15px;
            border-left: 4px solid #007BFF;
            background-color: #f9f9f9;
            border-radius: 4px;
        }
        .alert h3 {
            margin: 0 0 5px;
            font-size: 18px;
            color: #007BFF;
        }
        .alert p {
            margin: 0;
            font-size: 14px;
            color: #666666;
        }
        .alert small {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #999999;
        }
        .back-link {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            color: #ffffff;
            background: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            transition: background 0.3s ease;
        }
        .back-link:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <a href="testing12.php" class="back-link">Go Back</a>
    <div class="container">
        <h1>Latest Alerts</h1>
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
            while ($row = $result->fetch_assoc()) {
                echo "<div class='alert'>";
                echo "<h3>" . htmlspecialchars($row["title"]) . "</h3>";
                echo "<p>" . htmlspecialchars($row["message"]) . "</p>";
                echo "<small>Sent on " . htmlspecialchars($row["date_sent"]) . "</small>";
                echo "</div>";
            }
        } else {
            echo "<p>No alerts available.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
