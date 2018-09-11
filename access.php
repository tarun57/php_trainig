<?php
$servername="localhost";
$username="root";
$conn=new mysqli($servername,$username);
if($conn->connect_error){
	die("connection error" .$conn->connect_error);
}
echo "Connected successfully";

?>