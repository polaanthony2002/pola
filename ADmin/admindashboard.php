<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Enroll History</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Dosis:300,400,500,,600,700,700i|Lato:300,300i,400,400i,700,700i" rel="stylesheet" />

    
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="ass/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
<link href="ass/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
<link href="ass/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
<link href="ass/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

<link href="assets/css/style.css" rel="stylesheet" />





<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
  





    <?php
    
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "pola"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize variables with form data
        $problem_category = $_POST['problem_category'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name']; 
        $image_tmp = $_FILES['image']['tmp_name']; 

        
        move_uploaded_file($image_tmp, "uploads/$image");

        
        $sql = "INSERT INTO report_problem (pro_id, problem_description, status, date, image1) VALUES ('$problem_category', '$description', 'NO', NOW(), '$image')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <section>
        <section id="reports" class="reports">
            <div style="font-size: 20px;" class="container"><br>
            <h1>Welcome<span style="color: red;"> Admin!</span></h1><br>
                <div class="section-title">
               
               
                    <h2 style=" border-radius: 20px; background-color:  #b33144; box-shadow: 0 20px 30px rgb(5, 7, 6); text-align: center;">Citizen Reports</h2><br><br>
                    <p>Explore the latest reports submitted by citizens:</p>
                </div><br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Report ID</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>image</th>
                                        <th>Date</th>
                                        <th>Action</th> 
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                   
                                    // Database connection settings
                                    $servername = "localhost"; 
                                    $username = "root"; 
                                    $password = ""; 
                                    $dbname = "pola"; 

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $sql = "SELECT rp_id, problem_description, status, image1, date FROM report_problem";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>" . $row["rp_id"] . "</td>";
                                            echo "<td>" . $row["problem_description"] . "</td>";
                                            echo "<td>" . ($row["status"] == 'NO' ? "Not Worked On" : "Worked On") . "</td>";
                                            // Echo the image with the src attribute set to the image path retrieved from the database
                                            echo "<td><img src='../uploads/" . $row["image1"] . "' class='img-fluid' style='max-width: 200px; height: auto;' alt='Report Image'></td>";   
                                            echo "<td>" . $row["date"] . "</td>";                           
                                            echo "<td>"; 
                                            if ($row["status"] == 'NO') {
                                                // Display update button only if status is 'NO'
                                                echo "<form method='post' action='update_status.php'>"; 
                                                echo "<input type='hidden' name='report_id' value='" . $row["rp_id"] . "'>"; 
                                                echo "<button type='submit' class='btn btn-primary'>Update Status</button>"; 
                                                echo "</form>";
                                            }
                                             // Add delete button for each row
                                        echo "<form method='post' action='del.php'>"; // Form to submit the delete action
                                        echo "<input type='hidden' name='report_id' value='" . $row["rp_id"] . "'>"; // Hidden input to send the report ID to the delete script
                                        echo "<button type='submit' class='btn btn-danger'>Delete</button>"; // Delete button
                                        echo "</form>";
                                        echo "</td>"; // End action column
                                        echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No reports found.</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <br><br><br><br>






 

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    
    <script src="ass/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="ass/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="ass/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="ass/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="ass/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="ass/vendor/php-email-form/validate.js"></script>

    
    <script src="ass/js/main.js"></script>
</body>

</html>




        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
