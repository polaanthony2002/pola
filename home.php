<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community Meeting Registration and Voting</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 60px; /* offset for fixed header */
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }


        
        /* Footer Styling */
        .footer {
            margin-top: auto;
            background-color: black;
            color: white;
            text-align: center;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-top-right-radius: 40px; border-top-left-radius: 40px;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer .footer-links, .footer .social-icons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 10px;
        }
        .footer a {
            color: #ddd;
            text-decoration: none;
            font-size: 14px;
        }
        .footer a:hover {
            color: #fff;
        }
        .footer .social-icons a {
            font-size: 20px;
            color: #ddd;
            transition: color 0.3s;
        }
        .footer .social-icons a:hover {
            color: #007BFF;
        }

        /* Fixed Header Styling */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #802f3b;
            color: white;
            text-align: right;
            padding: 30px 0;        
            font-size: 14px;
            border-bottom-right-radius: 40px; border-bottom-left-radius: 40px;
        }
        .header a {
            color: white;
            text-decoration: none;
            padding: 0 15px;
        }
       
        h1 {
            color: #333;
            text-align: center;
            margin: 0;
        }

        .container, .poll-container, #registration-form, #vote-history {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
        }

        .meeting-section, .poll-section, .history-section {
            margin-bottom: 20px;
        }
        .meeting-list, .poll-list, .history-list {
            list-style: none;
            padding: 0;
        }
        .meeting-list li, .poll-list li, .history-list li {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .meeting-date {
            font-weight: bold;
        }
        .register-button, .vote-button {
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .register-button:hover, .vote-button:hover {
            background-color: #0056b3;
        }

        label {
            display: block;
            margin-top: 10px;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        #submit-button, #submit-vote {
            background-color:#007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #submit-button:hover, #submit-vote:hover {
            background-color: #218838;
        }

        /* Footer Styling */
        .footer {
            margin-top: auto;
            background-color: black;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
        .footer p {
            margin: 0;
        }
    /* Sidebar Styling */
    .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 170px;
            background-color: #1c023d;
            color: white;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);

            border-top-right-radius: 10px;
             border-bottom-right-radius: 10px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            font-size: 19px;
            padding: 10px 5px;
            margin: 5px 0;
            border-radius: 4px;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        
    .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: green;
        margin-bottom: 20px;
        background-color: black;
        padding: 20px 20px;
        border-radius: 15px;
    }
    </style>
</head>
<body>
    <!-- Sidebar -->

     
    <div class="sidebar">
    <h1 style="color: green;" class="logo"><a href="index.html">Butondo ward</a></h1><br>
        <a href="dashboard.php">Dashboard</a>
        <a href="home.php">Meetings</a>
        <a href="suggestion.php">Suggestion<span style="color: #f39c12;">//</span>Box</a>
        <a href="testing12.php">
            <span>🔔</span>
           
        </a><br>
        <a href="logout.php" style="background-color: #007BFF;">Logout</a>
    </div>
    <br>

    <h1 style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6); padding:20px 5px;">Community Meeting Registration and Voting</h1>

    <div class="container">
        <div class="meeting-section">
            <h2>Available Meetings</h2>
            <ul id="available-meetings" class="meeting-list"></ul>
        </div>

        <div class="meeting-section">
            <h2>Previous Meetings</h2>
            <ul id="previous-meetings" class="meeting-list"></ul>
        </div>
    </div>

    <div id="registration-form">
        <h3>Register for <span id="meeting-title"></span></h3>
        <form id="form">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit" id="submit-button">Submit Registration</button>
        </form>
    </div>

    <div class="poll-container">
        <div class="poll-section">
            <h2 style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6);">Active Polls</h2>
            <ul id="poll-list" class="poll-list"></ul>
        </div>
    </div>

    <div id="vote-history" class="history-section">
        <h2>Your Voting History</h2>
        <ul id="history-list" class="history-list"></ul>
    </div>

 
        

 
<br><br>
    <div class="footer">
        <div class="row">
            <div class="col-md-6">
            <p>&copy; FixMyStreet. All Rights Reserved.</p>
                <p>Designed and Maintained By Pola Anthony</p>
                <p>SIN: 2210391550</p>
            </div><br>
            <div class="col-md-6 text-md-right">
                <p>Email: <a href="mailto:info@fixmystreet.com" style="color: #ffffff; font-size: 14px; ">polaanthony3@gmail.com</a></p>
                <p>Phone: <a href="tel:+260123456789" style="color: #ffffff; font-size: 14px;">0772673470</a></p>
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




    <script>
        const meetings = [
            { title: "Community Planning", date: "2024-11-15" },
            { title: "Annual Report Discussion", date: "2024-10-01" },
            { title: "Safety and Security Workshop", date: "2024-12-02" },
            { title: "Community Outreach", date: "2024-09-15" }
        ];

        const polls = [
            { question: "Should we improve public transportation?", options: ["Yes", "No"], anonymous: true },
            { question: "Do you support the new park proposal?", options: ["Yes", "No"], anonymous: false }
        ];

        const today = new Date();
        const votingHistory = [];

        function displayMeetings() {
            const availableMeetingsContainer = document.getElementById('available-meetings');
            const previousMeetingsContainer = document.getElementById('previous-meetings');

            meetings.forEach(meeting => {
                const meetingDate = new Date(meeting.date);
                const meetingElement = document.createElement('li');
                meetingElement.innerHTML = `
                    <span class="meeting-date">${meeting.date}</span> - ${meeting.title}
                    <button class="register-button" onclick="openRegistrationForm('${meeting.title}')">Register</button>
                `;
                if (meetingDate >= today) {
                    availableMeetingsContainer.appendChild(meetingElement);
                } else {
                    previousMeetingsContainer.appendChild(meetingElement);
                }
            });
        }

        function openRegistrationForm(meetingTitle) {
            document.getElementById('meeting-title').innerText = meetingTitle;
            document.getElementById('registration-form').style.display = 'block';
        }

        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            const fullName = document.getElementById('full-name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const meetingTitle = document.getElementById('meeting-title').innerText;

            alert(`Registration Successful!\n\nMeeting: ${meetingTitle}\nName: ${fullName}\nEmail: ${email}\nPhone: ${phone}`);
            
            document.getElementById('registration-form').reset();
            document.getElementById('registration-form').style.display = 'none';
        });

        function displayPolls() {
            const pollListContainer = document.getElementById('poll-list');
            polls.forEach((poll, index) => {
                const pollElement = document.createElement('li');
                pollElement.innerHTML = `
                    <span class="poll-question">${poll.question}</span>
                    ${poll.options.map(option => `<button class="vote-button" onclick="vote(${index}, '${option}')">${option}</button>`).join(' ')}
                    ${poll.anonymous ? "<span>(Anonymous Voting)</span>" : ""}
                `;
                pollListContainer.appendChild(pollElement);
            });
        }

        function vote(pollIndex, option) {
            const poll = polls[pollIndex];
            const anonymous = poll.anonymous;
            const voteEntry = anonymous ? { question: poll.question, choice: option, anonymous } : { question: poll.question, choice: option, user: "User123" };

            votingHistory.push(voteEntry);
            updateVoteHistory();
            alert(`Vote Successful! You chose: "${option}" for the poll: "${poll.question}"${anonymous ? " (Anonymous)" : ""}`);
        }

        function updateVoteHistory() {
            const historyListContainer = document.getElementById('history-list');
            historyListContainer.innerHTML = '';
            votingHistory.forEach(vote => {
                const historyItem = document.createElement('li');
                historyItem.innerHTML = `${vote.question}: <strong>${vote.choice}</strong>${vote.anonymous ? " (Anonymous)" : ""}`;
                historyListContainer.appendChild(historyItem);
            });
        }

        displayMeetings();
        displayPolls();
    </script>

</body>
</html>
