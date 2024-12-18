<?php
// Database connection settings
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "pola"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the report ID from the form
    $report_id = $_POST['report_id'];

    // Prepare and execute the SQL query to delete the report from the database
    $sql = "DELETE FROM report_problem WHERE rp_id = $report_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page with the reports table after successful deletion
        header("Location: admindashboard.php");
        exit(); // Stop script execution after redirect
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>