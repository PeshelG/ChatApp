<?php
 $conn = mysqli_connect("localhost","root","","chat");

 if(!$conn){
     echo "Connection error ". mysqli_connect_error();
 } 

?>