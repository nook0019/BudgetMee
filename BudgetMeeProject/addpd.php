<html>
 <head>
 	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 	<title></title>
 </head>
 <body>
	<form action="insert.php?img_product=<?php echo $_GET["img_product"];?>" method="post">
		ID:<div><input type="text" value="id" name="id_product"></div>
 		Product:<div><input type="text" value="name" name="name"></div>
 		Price:<div><input type="text" value="000" name="price"></div>
 		<!--<div><img src="img/icon-placeholder.png"></div>-->
 		<div>
 			<span>choose file</span>
			<input type="file" name="img_product" id="img_product" value="Choose File">
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
 		<div><input type="submit" value="submit" name="submit"></div>
 	</form>

 </body>
 </html>
