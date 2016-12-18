<?php 
	require './connect.php';
	$strSQL =" DELETE FROM product WHERE id_product = '".$_GET["id_product"]."' ";
	$objQuery = mysqli_query($conn, $strSQL);

	if (!$strSQL) {
		echo "error sql";
	}else{
		header('Location: http:./pageupload3.php');
	}
 ?>