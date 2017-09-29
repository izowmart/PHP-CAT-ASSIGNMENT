<?php 
$hostname ="localhost";
$username ="izowmart";
$password ="jigjig";
$dbname ="6470";

$conn = mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
	die("connection failed! ". mysqli_connect_error($conn));
}else{
	echo "Connection successful.";
 }



 ?>

