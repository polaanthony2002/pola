<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

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
    $title = $_POST['title'];
    $message = $_POST['message'];

    // Insert alert into notifications table
    $sql = "INSERT INTO notifications (title, message) VALUES ('$title', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        // Send alert to all subscribed citizens
        $citizens = $conn->query("SELECT email FROM citizens WHERE subscribed = 1");

        while ($row = $citizens->fetch_assoc()) {
            $to = $row['email'];

            // Set up PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // or your SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'your_email@gmail.com'; // Your email
                $mail->Password = 'your_email_password'; // Your email password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Recipients
                $mail->setFrom('your_email@gmail.com', 'Government Alerts');
                $mail->addAddress($to);

                // Content
                $mail->isHTML(true);
                $mail->Subject = $title;
                $mail->Body = $message;

                $mail->send();
                echo "Alert sent successfully!";
            } catch (Exception $e) {
                echo "Alert could not be sent. Error: {$mail->ErrorInfo}";
            }
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
