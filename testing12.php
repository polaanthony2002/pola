<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscribe for Alerts</title>
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

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 70px; /* Adjust for fixed header */
        }

        h1 {
            color: #333;
        }

        .container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Fixed Header Styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 14px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }

        .suggestion-form, .comment-form {
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .suggestion {
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        .comment {
            padding: 10px;
            border-top: 1px solid #ddd;
            margin-top: 10px;
        }

        /* Footer Styling */
        .footer {
            margin-top: auto;
            
            color: white;
            text-align: center;
            padding: 20px 100px;
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
            background-color: black;
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
       
         
        .view{
           position: right;
           margin-bottom: 25%;
        }
        
       

       h2 {
           color: #333;
       }

       button {
           margin-top: 12px;
           padding: 10px 20px;
           background-color: #007BFF;
           color: white;
           border: none;
           cursor: pointer;
       }

       /* Modal styles */
       .modal {
           display: none; /* Hidden by default */
           position: fixed;
           z-index: 1;
           left: 0;
           top: 0;
           width: 100%;
           height: 100%;
           background-color: rgba(0, 0, 0, 0.5); 
           overflow: auto;
       }

       .modal-content {
           background-color: #f9f9f9;
           margin: 10% auto;
           padding: 20px;
           border: 1px solid #888;
           width: 80%;
           max-width: 600px;
           border-radius: 8px;
       }

       .close-btn {
           color: #aaa;
           float: right;
           font-size: 28px;
           font-weight: bold;
           cursor: pointer;
       }

       .alert {
           border: 1px solid #ddd;
           padding: 10px;
           margin: 10px 0;
           background-color: #f9f9f9;
       }
   

       
        /* Sidebar Styling */
    .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 180px;
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



        .styled-link {
            display: inline-block;
            padding: 12px 20px;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-family: Arial, sans-serif;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .styled-link:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .styled-link:active {
            transform: translateY(2px);
        }
  

  




    </style>
</head>
<body>
    <!-- Sidebar -->

     
    <div class="sidebar">
    <h1 class="logo"><a href="index.html">Butondo ward</a></h1><br>
        <a href="dashboard.php">Dashboard</a>
        <a href="home.php">Meetings</a>
        <a href="suggestion.php">Suggestion<span style="color: #f39c12;">//</span>Box</a>
        <a href="testing12.php">
            <span>🔔</span>
            
        </a><br>
        <a href="logout.php" style="background-color: #007BFF;">Logout</a>
    </div>
    <br>
    </div>

   <div style="background-image: url('assets/img/you.jpg'); background-size: cover; background-position: center;  margin-top: 20px;
       height: 30%;
       width: 50%;
       border-radius: 40px ;
       margin-top: 30px;
       margin-bottom: 40px ;">
    <div>
    <h1 style=" color: white; background-color: black; box-shadow: 0 20px 30px rgb(5, 7, 6); padding:30px 220px; border-radius: 10px;">Alert//Notifications</h1>

    <h2 style=" color: white; padding: 10px; " >Subscribe to Receive Alerts</h2>
    <form style=" color: white; padding: 10px; "  id="subscribeForm" action="subscribe.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <button type="submit">Subscribe</button>
    </form><br><br>



    <div>
    <a href="fix.php" class="styled-link">View Latest Alerts</a>

    <!-- Modal Structure -->
    <div id="notificationsModal" class="modal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Recent Alerts</h2>
            <div id="alerts">
               
            </div>
        </div>
    </div>
            </div>

    <script>
        // Function to open the modal
        function openModal() {
            document.getElementById("notificationsModal").style.display = "block";
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById("notificationsModal").style.display = "none";
        }

        // Close the modal if user clicks outside of the modal content
        window.onclick = function(event) {
            const modal = document.getElementById("notificationsModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

 </div><br><br><br>
    </div>



    <!-- Cool Footer -->      
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


    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    
    <script src="assets/js/main.js"></script>

    </div>
    
    </body>
    </html
    
