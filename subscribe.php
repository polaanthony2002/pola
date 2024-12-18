<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pola";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO citizens (name, email) VALUES ('$name', '$email')";

    if ($conn->query($sql) === TRUE) {
      
        
        header("Location: testing12.php");
        echo "Subscribed successfully!";
        
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
