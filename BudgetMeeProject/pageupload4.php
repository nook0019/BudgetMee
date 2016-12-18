<html>
<head>
<title>Update</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
require './connect.php';
$strSQL = "SELECT * FROM product WHERE id_product = '".$_GET["id_product"]."' ";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
$objResult = mysqli_fetch_array($objQuery);
?>
<form name="form1" method="post" action="pageupload5.php?id_product=<?php echo $_GET["id_product"];?>" enctype="multipart/form-data">
Edit Product :<br>
Name : <input type="text" name="name" value="<?php echo $objResult["name"];?>"><br>
Price : <input type="text" name="price" value="<?php echo $objResult["price"];?>"><br>
<img src="product/<?php echo $objResult["img_product"];?>"><br>
Picture : <input type="file" name="img_product"><br>
<input type="hidden" name="hdnOldFile" value="<?php echo $objResult["img_product"];?>">
<div class="submit1"><input name="btnSubmit" type="submit" value="Submit"></div>
</form>
</body>
</html>