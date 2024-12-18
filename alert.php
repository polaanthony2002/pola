<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Alerts</title>
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
    color: black;
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
    <div class="alert-form">
        <h2>Send Alerts</h2>
        <form id="alertForm" action="send_alert.php" method="POST">
            <label style=" color: black;" for="title">Alert Title:</label>
            <input style=" color: black;" type="text" id="title" name="title" required>

            <label for="message">Alert Message:</label>
            <textarea style=" color: black;" id="message" name="message" required></textarea>

            <label for="alertType">Alert Type:</label>
            <select  id="alertType" name="alertType">
                <option value="policy">Policy Update</option>
                <option value="hearing">Public Hearing</option>
                <option value="meeting">Town Hall Meeting</option>
                <option value="emergency">Emergency Alert</option>
            </select>

            <button type="submit">Send Alert</button>
        </form>
    </div>
</body>
</html>
