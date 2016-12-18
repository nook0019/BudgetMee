<?php 
	$host="localhost";
	$user="root";
	$password="";
	$db_name="budgetmee";
	$conn=mysqli_connect($host,$user,$password,$db_name);
	if (!$db_name) {
			echo "error";
		}
	mysqli_query($conn,"SET NAMES UTF8");
?>