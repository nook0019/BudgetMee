<html>
 <head>
 	<title></title>
 </head>
 <body>

<?php 
	require './connect.php';

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result)) { 
    	?>
    	<div><?php echo " ID: ".$row['id_product']; ?></div>
    	<div><?php echo " Name: ".$row['name']; ?></div>
    	<div><?php echo " Price: ".$row['price']; ?></div>
    	<div><img src="android/product/<?php echo $row["img_product"];?>"></div>
    	<?php
        //echo "id: " . $row["id_product"]. " - Name: " . $row["name"]. " - Price: " . $row["price"]." - photo: ". $row["img_product"]. "<br>";
    }
} else {
    echo "0 results";
}
 ?>

 	<form action="/android/addpd.php">
 		<input type="submit" value="addproduct">
 	</form>
 	
 </body>
 </html>

