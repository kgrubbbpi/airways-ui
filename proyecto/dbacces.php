<?php
  $servername='localhost';
  $username='admin';
  $password='admin';
  $dbname= 'admin';
 echo 'l';
 die();
  $con=mysqli_connect($servername, $username, $password, $dbname);
  if(!$con){
    die('Could not connect to mysql:' .mysql_error());
  }
?>