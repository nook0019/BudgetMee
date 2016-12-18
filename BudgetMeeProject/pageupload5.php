<html>
<head>
<title>control update</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
 
//*** Update Record ***//
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
require './connect.php';
$Pname=$_POST["name"];
$strSQL =" UPDATE product SET name = '{$Pname}' WHERE id_product = '".$_GET["id_product"]."' ";
$objQuery = mysqli_query($conn, $strSQL);

 $Pprice=$_POST["price"];
 $strSQL =" UPDATE product SET price = '{$Pprice}' WHERE id_product = '".$_GET["id_product"]."' ";
 $objQuery = mysqli_query($conn, $strSQL);


$filename =  $_FILES["img_product"]["name"];
if($filename != "")
{
if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"product/".$filename))
{
 
//*** Delete Old File ***// 
@unlink("product/".$_POST["hdnOldFile"]);
 
//*** Update New File ***//
$strSQL =" UPDATE product SET img_product = '{$filename}' WHERE id_product = '".$_GET["id_product"]."' ";
$objQuery = mysqli_query($conn, $strSQL);    
 
if (!$strSQL) {
	echo "Error sql";
}else{
	header('Location: http:./pageupload3.php');
}
}
}
?>

</body>
</html>