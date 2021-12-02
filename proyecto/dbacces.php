<?php
  $servername='localhost';
  $username='admin';
  $password='admin';
  $dbname= 'admin';
 
  $con=mysqli_connect($servername, $username, $password, $dbname);
  if(!$con){
    die('Could not connect to mysql:' . mysqli_connect_errno());
  }
?>