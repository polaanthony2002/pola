<?php
   if( isset($_GET["u_id"])){

    $u_id = $_GET["u_id"];
   


       // Database connection settings
       $servername = "localhost"; 
       $username = "root"; 
       $password = ""; 
       $dbname = "pola"; 


       $conn = new mysqli($servername, $username, $password, $dbname);

       $sql = "DELETE FROM users WHERE u_id = $u_id";
       $conn->query($sql);

   }

   header("Location: manage-students.php");
       exit();

?>