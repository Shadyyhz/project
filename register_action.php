<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

   $con = mysqli_connect("localhost","root","","bonyanform");
      
   $userName=$_POST["userName"];
  
   $password=$_POST["password"];
   
   $email=$_POST["email"];

   
    $sql = "INSERT INTO form (db_UserName,db_Password,db_email) VALUES ('$userName','$password','$email') ";
         
        if(mysqli_query($con,$sql)){

         echo" <script> alert('thank you " .$userName . " for contacting us please wait our email');</script> ";
         
        }else{

                echo"something went wrong";
            }

        

?>


</body>
</html>