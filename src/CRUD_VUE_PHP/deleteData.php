<?php

include('connection.php');

$method=$_SERVER['REQUEST_METHOD'];

if($method=="POST")
{
  $received_data= json_decode(file_get_contents("php://input"),true); 
    
    $id=isset($received_data['id']) ? $received_data['id'] :'';       
    $sql = "DELETE FROM student WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

}

?>