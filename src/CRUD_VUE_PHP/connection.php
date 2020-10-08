<?php

$conn=mysqli_connect("localhost","root","","vueapis");
if(!$conn)
{
  die("connection failed".$conn->connect_error);
}

?>