<?php

//create connection to SQL
$conn = mysqli_connect('localhost', 'root', '12345', 'phpblog');

//check the connection
if(mysqli_connect_errno()){
  //connection failed
  echo'Failed to connect to MySQL'. mysqli_connect_errno();
}