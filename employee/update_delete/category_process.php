<?php 
require_once("../../mainClass.php");
require_once("../../inc/conn.php");

     $category_id = $_POST["category_id"];

    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp, '../../img/category/'.$img);
    $category_name = $_POST["category_name"];
    $empname  = $_POST["empname"];


  mysqli_query($conn, 
  "UPDATE 
   tbl_category SET 
  image='$img',
  category_name='$category_name',
  encoder_update='$empname'
  WHERE category_id='$category_id'");

  echo "<script language='javascript'> alert('Successfuly Update Category'); </script>";
  echo "<script> window.location.href='../category.php' </script> ";

 ?>