<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$password=md5($_POST['password']);
$pincode = rand(100000,999999);
$ret=mysqli_query($con,"insert into students(studentName,StudentRegno,password,pincode) values('$studentname','$studentregno','$password','$pincode')");
if($ret)
{
$_SESSION['msg']="User Added Successfully !!";
}
else
{
  $_SESSION['msg']="Error : User not Register";
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Student Registration</title>
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
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add User </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div style=" text-align: center; font-size: 22px;" class="panel-heading">
                         Add//User Registration
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="dept" method="post">

   <div class="form-group">
    <label for="studentname">Full Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" placeholder= "Full Name" required />
  </div>


  
  <div class="form-group">
          <label for="username">Username </label>
              <input type="text" id="username-input" name="username" class="form-control" placeholder="Enter username..." required />
                  </div>


 <div class="form-group">
    <label for="studentregno">User Reg//No </label>
    <input type="text" class="form-control" id="studentregno" name="studentregno" onBlur="userAvailability()" placeholder= "User Reg//No" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>


            <div class="form-group">
                        <label for="mail">Email </label>
                      <input type="email" id="email-input" name="email" class="form-control" placeholder="Enter email..." required />
                            </div>

      <div class="form-group">
      <label for="mail">Gender </label>
        <select id="gender-select" name="gender" class="form-control" required>
           <option value="">Select gender</option>
                    <option value="Male">Male</option>
                        <option value="Female">Female</option>
                                              
                                            </select>
                                        </div>



<div class="form-group">
    <label for="password">Password  </label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required />
  </div>   

 <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

            </div>





        </div>
    </div>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'regno='+$("#studentregno").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


</body>
</html>
<?php } ?>
