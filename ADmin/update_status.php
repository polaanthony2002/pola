<?php

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "pola"; 

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

    // Prepare and execute the SQL query to update the status of the report
    $sql = "UPDATE report_problem SET status = 'YES' WHERE rp_id = $report_id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to the page with the reports table after successful update
        header("Location: admindashboard.php");
        exit(); // Stop script execution after redirect
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


$conn->close();
