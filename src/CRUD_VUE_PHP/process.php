<?php
header("allow-control-access-origin: *");
include("connection.php");
  


$received_data= file_get_contents("php://input");
   
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 


       $sql = "insert into student(name,email,phone_no) values ('$name','$email','$phone')";

       if(mysqli_query($conn,$sql))
       {
           echo "record inserted succesfully";
       }
       else{
           echo "Error".$sql."<br>".$conn->error;
       }


?>