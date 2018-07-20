<?php

session_start();
include "../db.php"; #including database

#security function
function security($data){
  global $con;


  $data=htmlspecialchars($data);
  $data=trim($data);
  return $data;
}

if(isset($_POST["categoryy"])){
  $category_query = "SELECT * FROM categories";
  $run_query = mysqli_query($con, $category_query);
  
  echo "<option value=''>None</option>";

  if (mysqli_num_rows($run_query) > 0) {
      while ($row = mysqli_fetch_array($run_query)) {
           $cid = $row["cat_id"];
           $cat_name = $row["cat_title"];
           echo "
             <option value='$cid'>$cat_name</option>
           ";
      }
      echo "</div>";
  }
}

if(isset($_POST["brandd"])){
  $brand_query = "SELECT * FROM brands";
  $run_query = mysqli_query($con, $brand_query);
  
  echo "<option value=''>None</option>";

  if (mysqli_num_rows($run_query) > 0) {
      while ($row = mysqli_fetch_array($run_query)) {
           $bid = $row["brand_id"];
           $brand_name = $row["brand_title"];
           echo "
             <option value='$bid'>$brand_name</option>
           ";
      }
      echo "</div>";
  }
}

// add products

if (!empty($_POST['product_cat']) && !empty($_POST['product_brd']) && !empty($_POST['product_ttl']) && 
  !empty($_POST['product_prc']) && !empty($_POST['product_descr']) && !empty($_POST['product_kwrd'])) {

  $category = test_input($_POST['product_cat']);
  $brand = test_input($_POST['product_brd']);
  $title = test_input($_POST['product_ttl']);
  $price = test_input($_POST['product_prc']);
  $description = test_input($_POST['product_descr']);
  $key_word = test_input($_POST['product_kwrd']);

  if (file_exists($_FILES['product_img']['tmp_name'])) {
       // echo "$category <br> $brand <br> $title <br> $price <br> $description <br> $key_word <br> <img src='' class='img-responsive'></img>";
       
       $image_name = basename($_FILES["product_img"]["name"]);
       $target_dir = "../product_images/";
       $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
       $uploadOk = 1;
       $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
       //Check whether it is an image
       $check = getimagesize($_FILES['product_img']['tmp_name']);
         if ($check !== false) {
            $uploadOk = 1;
         }else{
            echo "
              <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This file is not an image</b>
              </div>
              ";
            $uploadOk = 0;
         }
       //file size
       if ($_FILES['product_img']['size'] > 200000000) {
          echo "
            <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Your image size is too large</b>
            </div>
            ";
          $uploadOk = 0;

       }

       // Check if file already exists
        if (file_exists($target_file)) {
            echo "
            <div class='alert alert-danger'>
              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Sorry, file already exists.</b>
            </div>
            ";
            $uploadOk = 0;
        }

       //picture formats
       if ($imageFileType != "jpg" &&$imageFileType != "JPG" && $imageFileType != "png"
        && $imageFileType != "jpeg" && $imageFileType != "gif") {
          echo "
          <div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</b>
          </div>
          ";
          $uploadOk = 0;
       }

       //check whether $upload value is still 1
       if ($uploadOk == 0) {
          echo "
          <div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Sorry, your image was not uploaded.</b>
          </div>
          ";
       }else{
          if (move_uploaded_file($_FILES['product_img']['tmp_name'], $target_file)) {
            //Adding data to the database

            $sql = "INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, 
                    `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`)
                     VALUES (NULL, '$category', '$brand', '$title', '$price', '$description',
                      '$image_name', '$key_word');";

            $run_qry = mysqli_query($con, $sql);
            if ($run_qry) {
                 echo "
                    <div class='alert alert-success'>
                      <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Image uploaded successfully.</b>
                    </div>
                    "; 
            }

          } else {
            echo "
              <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Sorry, there was an error uploading your file.</b>
              </div>
              ";
          }
       }

  }else{
       echo "
          <div class='alert alert-danger'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please upload product image</b>
          </div>
       ";
  }
}else{
    echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields</b>
      </div>
  ";
}

// end of adding products

if (isset($_POST['get_addContent'])) {
   echo "I love coding";
}


//Security function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>