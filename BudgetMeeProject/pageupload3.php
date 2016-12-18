<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<?php
//$objConnect = mysql_connect("localhost","root","root") or die("Error Connect to Database");
//$objDB = mysql_select_db("mydatabase");
require './connect.php';
$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($conn, $strSQL) or die ("Error Query [".$strSQL."]");
?>
<div class="tb1">
<table width="340" border="1">
<tr>
<th width="50"> <div align="center">Product ID </div></th>
<th width="150"> <div align="center">Picture</div></th>
<th width="150"> <div align="center">Name</div></th>
<th width="150"> <div align="center">Price</div></th>
<th width="150"> <div align="center">Edit</div></th>
<th width="150"> <div align="center">Delete</div></th>

</tr>
<?php
while($objResult = mysqli_fetch_array($objQuery))
{
?>
<tr>
<td><div align="center"><?php echo $objResult["id_product"];?></div></td>
<td><center><img src="product/<?php echo $objResult["img_product"];?>"></center></td>
<td><center><?php echo $objResult["name"];?></center></td>
<td><center><?php echo $objResult["price"];?></center></td>
<td><center><a href="pageupload4.php?id_product=<?php echo $objResult["id_product"];?>">Edit</a></center></td>
<td><center><a href="pageupload6.php?id_product=<?php echo $objResult["id_product"];?>">Delete</a></center></td>
</tr>
<?php
}
?>
</table>
<form name="form1" method="post" action="pageupload1.php" enctype="multipart/form-data">
<div class="submit1"><input name="btnSubmit" type="submit" value="Insert"></div>
</form></div>
<?php
mysqli_close($conn);
?>
</body>
</html>