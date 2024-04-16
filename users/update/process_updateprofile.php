<?php
    require_once("../../mainClass.php"); 
  include("../../inc/conn.php");
  $user_id = $_POST["user_id"];

    $img = $_FILES['img']['name'];
    $tmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp, '../../img/profile/'.$img);
    $name = $_POST["name"];


  mysqli_query($conn, "UPDATE 
  tbl_users SET 
  image='$img',
  lastname='$name'


  WHERE user_id='$user_id'");

    echo '<script = "text/javascript">';
    echo 'alert("Successfully change profile");';
    echo 'window.location.href = "../personal_info.php"';
    echo '</script>';
  


?>