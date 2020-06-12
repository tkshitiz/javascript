<?php
include("connection.php");
$method=$_SERVER['REQUEST_METHOD'];

if($method=="POST")
{   
    $id=$_POST['id']; 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $filename=$_FILES['image']['name'];
    $valid_extensions = array("jpg","jpeg","png","pdf");
    $extension = pathinfo($filename,PATHINFO_EXTENSION);
    if(in_array(strtolower($extension),$valid_extensions) ) {
      $imageName= "uploads/".$filename;
        // Upload file
       
        if(file_exists($filename))
            {
              unlink($imageName);
              move_uploaded_file($_FILES['image']['tmp_name'],$imageName);              
            }
            
            
        
     }else{
        echo 0;
     }

$sql = "UPDATE student SET name='$name',email='$email',phone_no='$phone',image='$filename' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

}
?>