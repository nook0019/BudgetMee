<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style-productkey.css">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<meta charset="utf-8">
	<title>index-The Little Things</title>


</head>
<body>
	<div class="header_web">
		<div class="logofont"><a href="index-admin.php">THELITTLETHINGS</a>
		<div class="useronline">
		<?php 
			if(isset($_SESSION['username'])){
				echo $_SESSION['username']."&nbsp;|&nbsp;"."<a href='checkout.php'>Logout</a>";
			}
		?>
		
		</div>	

	</div><!-- End of header_web-->
	<div class="bg_banner">

	<div class="insert_box">
		<form name="" method="POST" action="confirm-insert.php" enctype="multipart/form-data">
			<div class="headlogin">INSERT PRODUCT</div>
			<div class="insert_prodcut">
			<!-- //////// upload pic //////// -->
			<div class="logoContainer">
				<img src="img/icon-placeholder.png">
			</div>
			<div class="fileContainer sprite">
				<span>choose file</span>
				<input type="file" name="image-pic" id="image-pic" value="Choose File">
			</div>
				<script type="text/javascript">
							$("input:file").change(function (){
								var fileName = $(this).val();
								if(fileName.length >0){
						    $(this).parent().children('span').html(fileName);
								}
								else{
									$(this).parent().children('span').html("Choose file");

								}
							});
							//file input preview
							function readURL(input) {
								if (input.files && input.files[0]) {
										var reader = new FileReader();            
										reader.onload = function (e) {
												$('.logoContainer img').attr('src', e.target.result);
										}
										reader.readAsDataURL(input.files[0]);
								}
							}
							$("input:file").change(function(){
									readURL(this);
							});
					</script>
				</div>
			<!-- //////////////// end upload pic //////////// -->
			<div class="insert_big">
			NAME : <input type="text" name="name_product"><br>
			PRICE : <input type="text" name="price_product"><br>
			DETAIL :<textarea name="detail_product"></textarea>	<br>
			TYPE : <input type="text" name="product_type"><br>
			<center><input name="btn-submit" type="submit" value="Submit"></center>
			</div>
			</div>
		</form>

	

	
		
	

	
</body>
</html>