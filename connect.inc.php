<?php
$con=mysqli_connect("localhost","root","","admin");
// Check connection
if (!$con)
  {
  echo "Failed to connect to MySQL: ";
  }
else{
	echo 'database found';
}







?> 