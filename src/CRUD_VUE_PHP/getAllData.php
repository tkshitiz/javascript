<?php

include('connection.php');

$sql = "SELECT * FROM student";
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
     $users[$i]['image']=$row["image"];
     $i++;  
  }
  echo json_encode($users);
  
} else {    
  echo "0 results";

}










?>