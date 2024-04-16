<?php 
require_once("../../mainClass.php");
require_once("../../inc/conn.php");


   $product_id = $_POST["product_id"];
   $stock  = $_POST["stock"];

  mysqli_query($conn, 
  "UPDATE 
    tbl_product SET 
  product_stock='$stock'
  WHERE product_id='$product_id'");

  echo "<script language='javascript'> alert('Successfuly Add product'); </script>";
  echo "<script> window.location.href='../inventory.php' </script> ";

 ?>