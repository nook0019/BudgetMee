<html>
<head>
<title>control insert</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
if(move_uploaded_file($_FILES["img_product"]["tmp_name"],"product/".$_FILES["img_product"]["name"]))
{
echo "Copy/Upload Complete<br>";
 
//*** Insert Record ***//
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
require './connect.php';
//$objDB = mysqli_select_db("budgetmee");
$strSQL ="INSERT INTO product (name, price, img_product) VALUES ('".$_POST["name"]."','".$_POST["price"]."','".$_FILES["img_product"]["name"]."')";
$objQuery = mysqli_query($conn ,$strSQL);

if (!$objQuery) {
     	echo "Error";
     }elseif ($objQuery) {
     	header('Location: http:./pageupload3.php');
     }    
}
?>

</body>
</html>