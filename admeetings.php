<?php
$servername = "localhost"; // Change if necessary
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "pola";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create Meeting
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['meeting_title'])) {
    $title = $_POST['meeting_title'];
    $date = $_POST['meeting_date'];

    $stmt = $conn->prepare("INSERT INTO meetings (title, date) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $date);
    $stmt->execute();
    $stmt->close();
    $messageMeeting = "Meeting created successfully!";
}

// Create Poll
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['poll_question'])) {
    $question = $_POST['poll_question'];
    $meeting_id = $_POST['meeting_id'];

    $stmt = $conn->prepare("INSERT INTO polls (question, meeting_id) VALUES (?, ?)");
    $stmt->bind_param("si", $question, $meeting_id);
    $stmt->execute();
    $poll_id = $stmt->insert_id;

    // Insert Poll Options
    if (isset($_POST['options'])) {
        foreach ($_POST['options'] as $option) {
            $stmt = $conn->prepare("INSERT INTO poll_options (poll_id, option_text) VALUES (?, ?)");
            $stmt->bind_param("is", $poll_id, $option);
            $stmt->execute();
        }
    }
    $stmt->close();
    $messagePoll = "Poll created successfully!";
}

$meetings = $conn->query("SELECT * FROM meetings");
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h2 { color: white; font-size: 45px; }
        input, select, textarea { width: 100%; padding: 8px; margin: 10px 0; }
        button { background-color: blue; color: #fff; padding: 10px; border: none; cursor: pointer; }
        .message { margin: 10px 0; color: green; }

          /* Fixed Header Styling */
          .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: right;
            padding: 30px 0;        
            font-size: 14px;
            border-bottom-right-radius: 40px; 
            border-bottom-left-radius: 40px;
        }
        .header a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }

        
        /* Footer Styling */
        .footer {
            margin-top: auto;
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px 0;
            border-top-right-radius: 40px; border-top-left-radius: 40px;
        }
        .footer p {
            margin: 0;
        }
    </style
    </style>
</head>
<body>


<!-- Fixed Header -->
<br><br><div class="header">

        <a href="admindashboard.php">DASHBOARD</a>
        <a href="admeetings.php">POLLS//MEETINGS</a>
        <a href="manageuser.php">MANAGE_USERS ACC</a>
        <a href="manageuser.php"><span class="bell-icon">🔔</span></a>
        <a style=" background-color: #007BFF; border-radius:5px; padding: 5px 10px;" class="nav-link" href="logout.php">Logout</a></div><br><br><br>

<div style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="container">
    <h2>Create a Meeting</h2>
    <form method="post">
        <label for="meeting_title">Meeting Title:</label>
        <input type="text" name="meeting_title" id="meeting_title" required>
        
        <label for="meeting_date">Meeting Date:</label>
        <input type="date" name="meeting_date" id="meeting_date" required>
        
        <button type="submit">Create Meeting</button>
    </form>
    
    <?php if (isset($messageMeeting)) { echo "<div class='message'>{$messageMeeting}</div>"; } ?>

    <h2>Create a Poll</h2>
    <form method="post">
        <label for="poll_question">Poll Question:</label>
        <input type="text" name="poll_question" id="poll_question" required>
        
        <label for="meeting_id">Assign to Meeting:</label>
        <select name="meeting_id" id="meeting_id" required>
            <option value="" disabled selected>Select a Meeting</option>
            <?php while ($row = $meetings->fetch_assoc()) { ?>
                <option value="<?= $row['id'] ?>"><?= $row['title'] ?> - <?= $row['date'] ?></option>
            <?php } ?>
        </select><br>
        
        <br><label>Poll Options (Separate with commas):</label>
        <input type="text" name="options[]" placeholder="Option 1" required>
        <input type="text" name="options[]" placeholder="Option 2">
        <input type="text" name="options[]" placeholder="Option 3">
        
        <button type="submit">Create Poll</button>
    </form>
    
    <?php if (isset($messagePoll)) { echo "<div class='message'>{$messagePoll}</div>"; } ?>
</div><br><br><br><br> <br>

<div class="footer">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; FixMyStreet. All Rights Reserved.</p>
                <p>Designed and Maintained By Mathews Jery Chilanga</p>
                <p>SIN: 2303426630</p>
            </div><br>
            <div class="col-md-6 text-md-right">
                <p>Email: <a href="mailto:info@fixmystreet.com" style="color: #ffffff; font-size: 14px; ">mathewswilliam@gmail.com</a></p>
                <p>Phone: <a href="tel:+260123456789" style="color: #ffffff; font-size: 14px;">0972026910</a></p>
                <p>
                    Follow us: 
                    <a href="http://facebook.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-twitter"></i></a>
                    <a href="http://instagram.com/fixmystreet" style="color: #ffffff; margin-left: 5px;"><i class="fab fa-instagram"></i></a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="credits">
                    <strong><a href="http://icuzambia.net" style="color: #ffffff;">ICU Zambia</a> // <a href="http://zrdc.org" style="color: #ffffff;">ZRDC</a></strong>
                </div>
            </div>
        </div>
    </div>


<!-- Add Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </div>



</body>
</html>
