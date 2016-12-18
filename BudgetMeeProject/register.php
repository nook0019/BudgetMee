<?php
	require("dbconnect.php");
	$registerpass = true;
	
	if(!empty($_POST['username']))
	{
		$username = mysqli_escape_string($link,$_POST['username']);
	}else{
		$registerpass = false;
	}

	if(!empty($_POST['password']))
	{
		$password = mysqli_escape_string($link,$_POST['password']);
	}else{
		$registerpass = false;
	}

	if(!empty($_POST['name']))
	{
		$name = mysqli_escape_string($link,$_POST['name']);
	}else{
		$registerpass = false;
	}



	if(strlen($username)<=0 || 
	strlen($password)<=0 || 
	strlen($name)<=0)
	{	
		$registerpass = false;
	}

	if ($registerpass)
	{
		$sql = "INSERT INTO Customer (username,password,name,role) 
 			VALUES('$username','$password','$name','1')";

		$query = mysqli_query($link,$sql) or die("Query Error");
		include("search_userid.php");
	}
?>