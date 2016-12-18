<?php
	require_once("dbconnect.php");

	if(!empty($_POST['login_username']))
	{
		$username = mysqli_escape_string($link,$_POST['login_username']);
	}

	if(!empty($_POST['login_password']))
	{
		$password = mysqli_escape_string($link,$_POST['login_password']);
	}

	$sql = "SELECT `id_user`, `username`, `password` FROM Customer WHERE `username` = '$username' AND `password` = '$password'";
	$result = mysqli_query($link, $sql, MYSQLI_USE_RESULT);
	$row = mysqli_fetch_assoc($result);
	//echo $row['user_id']." : ";
	//echo $row['username'];

	echo json_encode($row);
?>