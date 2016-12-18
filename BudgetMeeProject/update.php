<html>
 <head>
 	<title></title>
 </head>
 <body>

<?php 
include("connect.php");

		$name = $_POST['name'];
		$price = $_POST['price'];

 		$sql = "INSERT INTO product (name, price) VALUES ('".$_POST["name"]."','".$_POST["price"]"')";

 		$query = mysqli_query($conn,$sql);
 
		if($query) {
			echo "Record add successfully";
		}
 
		mysqli_close($conn);

	?>
	<form action="/android/show.php" method="post">
		<!--ID:<div><input type="text" value="number" name="id_product"></div>-->
 		Product:<div><input type="text" value="name" name="name"></div>
 		Price:<div><input type="text" value="000" name="price"></div>
 		<input type="submit" value="submit">
 	</form>
 	<?php
 } ?>

 </body>
 </html>