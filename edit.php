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

 
            $u_id    = "";
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = md5($_POST["password"]); 
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $nickname = $_POST["nickname"];

            $errorMessage = "";
            $successMessage = "";
        


        if ($_SERVER["REQUEST_METHOD"] == 'GET'){


            if (!isset($_GET["u_id"])) {
                header("Location:add.php");
                exit();
                 
            }
                $u_id = $_GET["u_id"];
                

                $sql = "SELECT * FROM users WHERE u_id = $u_id "
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();

                if (!$row) {
                    header("Location:add.php");
                    exit();

                }
                  
                $fullname = $_POST["fullname"];
                $username = $_POST["username"];
                $password = md5($_POST["password"]); 
                $email = $_POST["email"];
                $gender = $_POST["gender"];
                $nickname = $_POST["nickname"];
    
    

            } else {
                
            $u_id    = $_POST["u_id"];
            $fullname = $_POST["fullname"];
            $username = $_POST["username"];
            $password = md5($_POST["password"]); 
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $nickname = $_POST["nickname"];

                do{

                    if( empty($u_id) ||  empty($fullname) ||  empty( $username) ||  empty($password) ||  empty($email) || empty( $gender) || empty(  $nickname)){
                        $errorMessage = "All the fields are required";
                        break;
                    }

                    $sql = "UPDATE users" .
                                        "SET fullname = '$fullname', 'username = '$username', password = '$password', email = '$email', gender = '$gender', nickname = '$nickname' "<div class=""></div>
                                        "WHERE  u_id =  $u_id  ";


                                        $result = $conn->query($sql);

                                        if(!$result){
                                            $errorMessage = "Invalid query: " . $conn->error;
                                            break;
                                        }

                                        $successMessage = "User updated Correctly";
                                        
                                            header("Location:add.php");
                                            exit()
                                          

                } while(true);
            }



        
          
           
            
           
            
            
    









      
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>



    </main>

    <br>
    <footer id="footer">
        <input type="hidden" value="<?php echo $u_id ?>">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <section id="register" class="register">
                        <div class="container">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-6">
                                    <form style=" background-color:  #77acb1; box-shadow: 0 20px 30px rgb(5, 7, 6);" id="register-form" method="post"><br>
                                    
                                    <h1 style=" border-radius: 20px; background-color:  #77acb1; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="row align-items-center justify-content-center">REGISTER NOW</h1><br><br>
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