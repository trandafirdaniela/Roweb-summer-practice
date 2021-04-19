<?php

$conn = mysqli_connect("localhost","root","","test_web");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>