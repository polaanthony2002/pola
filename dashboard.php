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
    include('headeruser.php')
    ?><?php
        
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
        
    <section id="upload-report" class="upload-report">
        <div class="container">
            <?php
        

            
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];

                      
                echo "<h1>Welcome $username!</h1> <p>Please report any issues you encounter on FixMyStreet.</p>" ;
                echo "<p>Your reports help improve our community and ensure problems get addressed promptly.</p>";
            } else {
                echo "<p>You are not logged in.</p>";
            }
            ?>
            <div style=" background-color: black; border-radius: 20px; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="row ">
                <div class="col-lg-6">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group"><br><br>
                            <label for="problem-category">Problem Category:</label>
                            <select name="problem_category" id="problem-category" class="form-control" required>
                                <option value="">Select Problem Category</option>
                                <?php
                                
                                $sql = "SELECT * FROM problem_category";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row["pro_id"] . '">' . $row["problem_name"] . '</option>';
                                    }
                                }
                                ?>
                            </select>

                            </select>
                            <div class="form-group">
                            <label for="province">Provice:</label>
                            <select name="problem_category" id="provice" class="form-control" required>
                                <option value="">Select Provice</option>
                                <?php
                                
                                $sql = "SELECT * FROM province";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row["p_id"] . '">' . $row["p_name"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="district">District:</label>
                            <select name="district" id="ditrict" class="form-control" required>
                                <option value="">Select District</option>
                                <?php
                                
                                $sql = "SELECT * FROM district";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row["d_id"] . '">' . $row["p_id"] . ' ' . $row["d_name"] . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        </div><br>
                    

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file" required>
                        </div><div class="form-group">
                        <div class="form-group">
                            <label for="image">Image:</label>
                            <input type="file" name="image" id="image" class="form-control-file" required>
                        </div><div class="form-group">
                        <div class="form-group">
                           
                          
                        <button type="submit" class="btn btn-primary">Upload Report</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="reports" class="reports">
        <div class="container">
            <div class="section-title">
                <h2 style=" border-radius: 20px; background-color:  black; box-shadow: 0 20px 30px rgb(5, 7, 6);">Reported Problems</h2><br>
                <p>Explore the latest reports submitted by citizens:</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Report ID</th>
                                    <th>Description</th>        
                                    <th>Images</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                                    
                                $servername = "localhost"; 
                                $username = "root"; 
                                $password = ""; 
                                $dbname = "pola";

                                
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                $sql = "SELECT rp_id, problem_description, image1, status, date FROM report_problem";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // Output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["rp_id"] . "</td>";
                                        echo "<td>" . $row["problem_description"] . "</td>";
                                        // Echo the image with the src attribute set to the image path retrieved from the database
                                        echo "<td><img src='uploads/" . $row["image1"] .  "' class='img-fluid' style='max-width: 200px; height: auto;' alt='Report Image'></td>";
                                                                                
                                        echo "<td>" . ($row["status"] == 'NO' ? "Not Approved" : "Approved") . "</td>";
                                        echo "<td>" . $row["date"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No reports found.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
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