<?php
include("connection.php");
$method=$_SERVER['REQUEST_METHOD'];
if($method=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $phone=$_POST['phone'];
    $filename = $_FILES['image']['name'];
    $valid_extensions = array("jpg","jpeg","png","pdf");

    // File extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(in_array(strtolower($extension),$valid_extensions) ) {

        // Upload file
        if(move_uploaded_file($_FILES['image']['tmp_name'], "uploads/".$filename)){
           echo "";
        }else{
           echo "Image not uploaded";
        }
     }else{
        echo 0;
     }
$sql = "insert into student(name,email,phone_no,image) values ('$name','$email','$phone','$filename')";

    if(mysqli_query($conn,$sql))
    {
        echo "Record inserted succesfully";
    }
    else{
        echo "Error".$sql."<br>".$conn->error;
    }
}
?>