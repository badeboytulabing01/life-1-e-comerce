<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
	$new_lastname = $_POST["new_lastname"];
	$new_firstname = $_POST["new_firstname"];

	mysqli_query($conn, "UPDATE tbl_users SET 
	    lastname		='$new_lastname', 
	    firstname 		='$new_firstname'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully Update");';
    echo 'window.location.href = "../personal_info.php"';
    echo '</script>';
  


?>