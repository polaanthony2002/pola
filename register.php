<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Fix MyStreet</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
   
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
            // Initialize variables with form data
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $password = md5($_POST['password']); 
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $nickname = $_POST['nickname'];
            $ward_id = $_POST['ward_id'];

          
            $sql = "INSERT INTO users (fullname, username, password, email, gender, nickname, ward_id) VALUES ('$fullname', '$username', '$password', '$email', '$gender', '$nickname', '$ward_id')";

            if (mysqli_query($conn, $sql)) {
                // Registration successful, redirect to dashboard
                header("Location: login.php");
                exit(); // Stop further execution
            } else {
                // Registration failed
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            
            mysqli_close($conn);
        }
        ?>



    </main>

    <br>
    <footer id="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <section style="background-image: url('assets/img/04.jpg'); background-size: cover; background-position: center;  margin-top: 30px;
       height: 90%;
       width: 100%;
       border-radius: 120px ;
       margin-top: 82px;"  id="register" class="register">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <form style=" background-color:  black; box-shadow: 0 20px 30px blue;" id="register-form" method="post"><br>
                                    
                                    <h1 style=" border-radius: 20px; background-color:  black; box-shadow: 0 20px 30px white;" class="row align-items-center justify-content-center">REGISTRATION-FORM</h1><br><br>
                                        <div class="form-group">
                                        <i class="fas fa-user"></i>
                                            <input type="text" id="fullname-input" name="fullname" class="form-control" placeholder="Enter fullname..." required />
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-user"></i>
                                            <input type="text" id="username-input" name="username" class="form-control" placeholder="Enter username..." required />
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-lock"></i>
                                            <input type="password" id="password-input" name="password" class="form-control" placeholder="Enter password..." required />
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-envelope"></i>
                                            <input type="email" id="email-input" name="email" class="form-control" placeholder="Enter email..." required />
                                        </div>

                                        <div class="form-group"><br>
                                            <select id="gender-select" name="gender" class="form-control" required>
                                            <option value="">Select gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                              
                                            </select>
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-user"></i>
                                          <input type="text" id="nickname-input" name="nickname" class="form-control" placeholder="Enter nickname..." required />
                                        </div>

                                        <div class="form-group"><br>
                                        <i class="fas fa-location"></i>
                                             <select name="ward_id" id="ward_id" class="form-control" required>
                                                <option value="">Select Ward</option>
                                                <?php
                                                // Query to fetch ward data
                                                $sql = "SELECT * FROM ward";
                                                $result = $conn->query($sql);

                                                // Loop through query result and generate options
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . $row["w_id"] . '">' . $row["w_name"] . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div><br>

                                        <button type="submit" class="btn btn-primary">Register</button>
                                        <p>Already have an account? <a href="login.php">Login now</a></p>
                        
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

   
    <script src="assets/js/main.js"></script>

</body>

</html>