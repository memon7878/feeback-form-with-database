<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="practical";
 
 $conn=mysqli_connect($servername,$username,$password,$database);
 if($conn){

 	

 }
 else

 	{
 		echo "connection failed ". mysql_connect_error($conn);
 	}
 ?>