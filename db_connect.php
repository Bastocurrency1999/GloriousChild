<?php
session_start();
ob_start();

// start connection
$server="localhost";
$server_username="id14218618_root";
$server_password="EmTDvx@2eT1@7NBV";
$db_name="id14218618_new";

// create connection
$conn= new mysqli($server,$server_username,$server_password,$db_name);

// check connection
if($conn->connect_error){
	echo "<script> alert ('Error in connecting to the database') </script>";
}else{
	// echo "<script> alert ('Connected Successfully') </script>";
}
?>