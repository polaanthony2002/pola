<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fix MyStreet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    
   

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
   
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    
    <link href="assets/css/style.css" rel="stylesheet">

    
</head>

<body>

    <?php
    include('header.php')
    ?>



    <main id="main">

       
        <?php
        // Start a session

        // Database connection settings
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "pola"; 

        
        $conn = new mysqli($servername, $username, $password, $dbname);

      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           

            $username = $_POST['username'];
            $password = $_POST['password']; 


            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Login successful, store username in session variable
                $_SESSION['username'] = $username;

                // Redirect to dashboard
                header("Location: admindashboard.php");
                exit(); // Stop further execution
            } else {
                // Login failed
                echo "Invalid username or password.";
            }
        }

       
        $conn->close();
        ?>


    </main><!-- End #main -->

    
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <section id="login" class="login">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <form style=" background-color:  black; box-shadow: 0 20px 30px blue;" id="login-form" method="post">

                                        <h1 style=" background-color:  black; box-shadow: 0 20px 30px white;" class="row align-items-center justify-content-center">Admin Login</h1>
                                        <div class="form-group"><br>
                                        <i class="fas fa-user"></i>
                                            <input type="text" id="username-input" name="username" class="form-control" placeholder="Enter username..." required />
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-lock"></i>
                                            <input type="password" id="password-input" name="password" class="form-control" placeholder="Enter password..." required />
                                        </div><br>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                        
                                    </form>
                                   
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </footer>
    <br><br><br><br>
   

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