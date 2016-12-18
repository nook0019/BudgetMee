<?php 
      require './connect.php';

      $objConnect = mysqli_query($conn,"SET NAMES UTF8");
      $id_product = $_POST['id_product'];
      $name = $_POST['name'];
      $price = $_POST['price'];
      $image_insert = $_FILES["img_product"]["name"];

      $target_dir = "android/product/";
      $target_file = $target_dir . basename($image_insert);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

       // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])){
            $uploadOk = 0;
       }

       if (move_uploaded_file($_FILES["img_product"]["tmp_name"], $target_file)) {

      //ตรงนี้ต้องชื่อฟิลตรงกับในดาต้าเบส

      $sql = "INSERT INTO product( id_product, name , price , img_product )
      VALUES ( '{$id_product}','{$name}','{$price}','{$image_insert}')";

        $result = mysqli_query($objConnect,$sql);
        if (!$result) {
          echo $sql;
        }

        }else{
          echo "success";
          header("location:/android/show.php");

        }

   //mysqli_close($conn);

	?>

