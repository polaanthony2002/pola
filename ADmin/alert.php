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
    <title>Admin | Semester</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
  
   

    <style>


h2 {
    color: white;
    font-size: 40px;
    text-align: center;

}

   .alert-form{
    display: center;
    margin-top: 15px;
    margin-bottom: 40px;
    width: 50%;
    padding: 20px 50px;
    background-color: black;
    color: white;
    border-radius: 20px;
     border: 1px solid #ddd;

}   
label{
    font-size: 20px;
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
<body><br><br>
    <div class="alert-form">
        <h2>Send Alerts</h2>
        <form id="alertForm" action="../send_alert.php" method="POST">
            <label for="title">Alert Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="message">Alert Message:</label>
            <textarea style=" color: black;" id="message" name="message" required></textarea>

            <label for="alertType">Alert Type:</label>
            <select style=" color: black;" id="alertType" name="alertType">
                <option value="policy">Policy Update</option>
                <option value="hearing">Public Hearing</option>
                <option value="meeting">Town Hall Meeting</option>
                <option value="emergency">Emergency Alert</option>
            </select><br>

            <button type="submit">Send Alert</button>
        </form>
    </div>


<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





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
<?php  ?>
