<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{



if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from students where StudentRegno = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Student record deleted !!";
      }

     if(isset($_GET['pass']))
      {
        $password="Test@123";
        $newpass=md5($password);
              mysqli_query($con,"update students set password='$newpass' where StudentRegno = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Password Reset. New Password is Test@123";
      } 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />


    <!-- Vendor CSS Files -->
  
    <link href="ass/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="ass/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="ass/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="ass/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            min-height: 100vh;
        }

        .mm{
            margin-top: 120px;
            text-align: center;
        }
        
        

        h1 {
            
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }

        .btn-primary {          
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
        }

        th, td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table {
            border-collapse: collapse;
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        @media (max-width: 768px) {
            table {
                display: block;
                overflow-x: auto;
                white-space: nowrap;
            }

            .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }

        @media (max-width: 576px) {
            h1 {
                font-size: 1.5rem;
            }

            .btn-primary {
                font-size: 0.875rem;
            }

            th, td {
                font-size: 0.875rem;
            }
        }
    </style>

    <link href="ass/css/style.css" rel="stylesheet" />
</head>
<body>

<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menu.php');
}
 ?>


    <div class="container my-5">
        <h1 style=" background-color:  black; box-shadow: 0 20px 30px rgb(5, 7, 6);" class="mm">USERS</h1><br><br>
        <a class="btn btn-primary mb-3" href="student-registration.php" role="button">Create A New User</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Nickname</th>
                    <th>Created_at</th>
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

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid query: ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['u_id']}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['nickname']}</td>
                        <td>{$row['created_at']}</td>
                        <td>
                            <a class='btn btn-primary' href='edit.php?u_id={$row['u_id']}'>Edit</a>
                            <a class='btn btn-danger' href='delete.php?u_id={$row['u_id']}'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
    <br><br>
    <br><br>
    <br><br>

    



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
