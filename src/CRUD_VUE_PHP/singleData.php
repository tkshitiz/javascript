<?php

include('connection.php');
$received_data= json_decode(file_get_contents("php://input"),true);


$sql = "SELECT * FROM student"  ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $i=0;
  $users=[];
  while($row = $result->fetch_assoc()) {
     $users[$i]['id']=$row["id"];
     $users[$i]['name']=$row["name"];
     $users[$i]['email']=$row["email"]; 
     $users[$i]['phone_no']=$row["phone_no"];
     $i++;  
  }
  echo json_encode($users);
  
} else {    
  echo "0 results";

}










?>