<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Fix MyStreet</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

 
    <link href="assets/css/style.css" rel="stylesheet" />

    
</head>

<body>
    <?php
    include('headeradmin.php')
    ?>


   
      <br>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"><br>
                        <h1>Be apart of shaping the future of our community. Your voice matters!</h1>
                        <h2> Report & engage in discussions on local issues directly 
                            impacting our neighborhood. Together, let's transform challenges into opportunities for positive change.
                        </h2>
                        <div>
                            <a href="login.php" class="btn-get-started scrollto">Get Started</a>
                        </div>
                    </div>
                </div>
            
        </div>
    </section><br><br>


   
    <main id="main">     
        <section style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6);" id="services" class="services section-bg">
            <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="container">
                <div class="section-title">
                    <h2 style=" border-radius: 20px; color: white; background-color: black; ">Services</h2>
                    <p>Explore the features and services offered by our platform to empower citizens and improve communities:</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="register.php">Report Problems</a></h4>
                            <p class="description">Easily report local issues such as potholes, broken streetlights, and litter to authorities.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Discuss Solutions</a></h4>
                            <p class="description">Engage in discussions with other citizens and policymakers to find solutions to community problems.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-wow-delay="0.1s">
                        <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;" class="icon-box">

                            <h4 class="title"><a href="#">Track Progress</a></h4>
                            <p class="description">Stay updated on the progress of reported issues and see them resolved in your community.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        
      <br>
     <br>
   
        <section id="about" class="about">
            <div style=" color: white; background-color: black; box-shadow: 0 20px 30px white;  border-radius: 20px;"  class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3 style="text-align: center; border-radius: 20px; font-size: 40px; background-color: black; box-shadow: 0 20px 30px white">Empowering Citizens to Improve Their Communities</h3><br><br>
                        <p>
                            Our platform provides a space for citizens to report, view, and discuss local problems within their constituency. Here's how we make a difference:
                        </p>

                        <div class="icon-box">

                            <h4 class="title">Report Problems</h4>
                             <p class="description">
                                Easily report issues such as potholes, broken streetlights, and litter to your local government authorities.
                              </p>
                               </div>

                                 <div class="icon-box">

                               <h4 class="title">Discuss Solutions</h4>
                             <p class="description">
                                Engage in discussions with other citizens and policymakers to find solutions to community problems.
                            </p>
                        </div>

                       
                    </div>

                    <div class="col-xl-5 col-lg-6 d-flex justify-content-center video-box align-items-stretch position-relative">
                       
                    </div>
                </div>
            </div>
        </section>

       

    
        
        
        <section id="faq" class="faq">
            <div class="container">
                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Here are some common questions about our platform:</p>
                </div>

                <div class="row faq-item">
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>How do I report a problem?</h4>
                        <p>
                            To report a problem, simply navigate to the "Report" section of our platform and fill out the form with the necessary details about the issue you encountered.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <i class="bx bx-help-circle icon-help"></i>
                        <h4>Can I edit my submitted report?</h4>
                        <p>
                            Yes, you can edit your submitted report by logging into your account and selecting the report you wish to edit. From there, you can make the necessary changes.
                        </p>
                    </div>
                    
                </div>
            </div>
        </section>


        


        <section id="about" class="about">
            
  
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background-color: #f4f4f4;
                    margin: 0;
                    padding: 0;
                }
                .container {
                    width: 80%;
                    margin: auto;
                    padding: 20px;
                }
                h1 {
                    text-align: center;
                    color: #333;
                    background-color: black;
                    color: white;
                }
                .meeting-section, .registration-section, .recordings-section {
                    background: #fff;
                    padding: 20px;
                    margin-bottom: 20px;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                }
                button {
                    padding: 10px 15px;
                    color: #fff;
                    background: #007bff;
                    border: none;
                    cursor: pointer;
                    border-radius: 5px;
                }
                button:hover {
                    background: #0056b3;
                }
                .meeting {
                    margin: 10px 0;
                }
                label, input[type="text"], input[type="datetime-local"], input[type="email"] {
                    display: block;
                    margin: 5px 0;
                    padding: 8px;
                    width: 100%;
                }
            </style>
        
        <body>
            <div class="container">
                <h1>Virtual Town Hall Meetings</h1>
        
                <!-- Section for Scheduling New Meetings -->
                <div class="meeting-section">
                    <h2>Schedule a New Meeting</h2>
                    <form id="scheduleMeetingForm">
                        <label for="meetingTitle">Meeting Title:</label>
                        <input type="text" id="meetingTitle" required>
        
                        <label for="meetingDateTime">Date & Time:</label>
                        <input type="datetime-local" id="meetingDateTime" required>
        
                        <label for="meetingDescription">Description:</label>
                        <input type="text" id="meetingDescription">
        
                        <button type="button" onclick="scheduleMeeting()">Schedule Meeting</button>
                    </form>
                </div>
        
        
                <!-- Section for Upcoming Meetings -->
                <div class="meeting-section">
                    <h2>Upcoming Meetings</h2>
                    <div id="upcomingMeetingsContainer">
                        <!-- Scheduled meetings will be dynamically added here -->
                    </div>
                </div>
        
                <!-- Section for Meeting Recordings and Minutes -->
                <div class="recordings-section">
                    <h2>Meeting Recordings and Minutes</h2>
                    <div id="recordingsContainer">
                        <!-- Recordings or minutes will be dynamically added here -->
                    </div>
                </div>
            </div>
        
            <script>
                let meetings = [];
                let recordings = [];
        
                function scheduleMeeting() {
                    const meetingTitle = document.getElementById('meetingTitle').value;
                    const meetingDateTime = document.getElementById('meetingDateTime').value;
                    const meetingDescription = document.getElementById('meetingDescription').value;
        
                    const newMeeting = {
                        id: Date.now(),
                        title: meetingTitle,
                        dateTime: meetingDateTime,
                        description: meetingDescription,
                        registeredCitizens: []
                    };
        
                    meetings.push(newMeeting);
        
                    document.getElementById('scheduleMeetingForm').reset();
                    displayUpcomingMeetings();
                }
        
                function displayUpcomingMeetings() {
                    const upcomingMeetingsContainer = document.getElementById('upcomingMeetingsContainer');
                    upcomingMeetingsContainer.innerHTML = "";
        
                    meetings.forEach(meeting => {
                        const meetingDiv = document.createElement('div');
                        meetingDiv.className = "meeting";
                        meetingDiv.innerHTML = `
                            <h3>${meeting.title}</h3>
                            <p><strong>Date & Time:</strong> ${new Date(meeting.dateTime).toLocaleString()}</p>
                            <p>${meeting.description}</p>
                        `;
                        upcomingMeetingsContainer.appendChild(meetingDiv);
                    });
                }
        
                function registerForMeeting() {
                    const citizenName = document.getElementById('citizenName').value;
                    const citizenEmail = document.getElementById('citizenEmail').value;
        
                    if (meetings.length === 0) {
                        alert("No upcoming meetings to register for.");
                        return;
                    }
        
                    const latestMeeting = meetings[meetings.length - 1];
                    latestMeeting.registeredCitizens.push({ name: citizenName, email: citizenEmail });
        
                    document.getElementById('registrationForm').reset();
                    alert(`Registered for the meeting: ${latestMeeting.title}`);
                }
        
                function addRecording() {
                    const recordingTitle = prompt("Enter the recording title:");
                    const recordingLink = prompt("Enter the recording link:");
        
                    if (recordingTitle && recordingLink) {
                        recordings.push({ title: recordingTitle, link: recordingLink });
                        displayRecordings();
                    }
                }
        
                function displayRecordings() {
                    const recordingsContainer = document.getElementById('recordingsContainer');
                    recordingsContainer.innerHTML = "";
        
                    recordings.forEach(recording => {
                        const recordingDiv = document.createElement('div');
                        recordingDiv.className = "recording";
                        recordingDiv.innerHTML = `
                            <p><strong>${recording.title}</strong> - <a href="${recording.link}" target="_blank">View Recording</a></p>
                        `;
                        recordingsContainer.appendChild(recordingDiv);
                    });
                }
            </script>
        </body>
                </section>
        




    </main>

  
    </main>
   

    <?php
    include('footer.php')
    ?>

    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    
    <script src="assets/js/main.js"></script>
</body>

</html>