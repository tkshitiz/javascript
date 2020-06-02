<?php

include('connection.php');

    $received_data= json_decode(file_get_contents("php://input"),true);

    $id=isset($_GET['id']) ? $_GET['id'] :'';
    

    $sql = "DELETE FROM student WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();



?>