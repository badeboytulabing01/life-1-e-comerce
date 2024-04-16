<?php 
require_once("../../mainClass.php");
require_once("../../inc/conn.php");

   $product_id = $_POST["product_id"];

    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp, '../../img/products/'.$img);
    $product_name = $_POST["product_name"];
    $category = $_POST["category"];
    $description= $_POST["description"];

    $price  = $_POST["price"];
    $discount  = $_POST["discount"];
    $shipping  = $_POST["shipping"];
    $color  = $_POST["color"];
    $size  = $_POST["size"];
    $empname  = $_POST["empname"];
    $employee_id  = $_POST["employee_id"];
    $statusProduct  = $_POST["statusProduct"];





  mysqli_query($conn, 
  "UPDATE 
    tbl_product SET 
  image='$img',
  product_name='$product_name',
  discription='$description',
  category='$category',
  price='$price',
  discount='$discount',
  shipping_fee='$shipping',
  color='$color',
  size='$size',
  employee_name='$empname',
  employee_id='$employee_id',
  display_status='$statusProduct'

  WHERE product_id='$product_id'");

  echo "<script language='javascript'> alert('Successfuly Update product'); </script>";
  echo "<script> window.location.href='../product.php' </script> ";

 ?>