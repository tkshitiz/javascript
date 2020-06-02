<?php

include("connection.php");


$method=$_SERVER['REQUEST_METHOD'];

if($method="POST")
{
    $received_data= json_decode(file_get_contents("php://input"),true);

    $id=isset($received_data['id']) ? $received_data['id'] :'';
    $name=isset($received_data['name']) ? $received_data['name'] :'';
    $email=isset($received_data['email']) ? $received_data['email'] :'';
    $phone=isset($received_data['phone']) ? $received_data['phone'] :'';


$sql = "UPDATE student SET name='$name',email='$email',phone_no='$phone' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

}


    

?>