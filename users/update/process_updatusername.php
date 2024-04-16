<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
	$new_username = $_POST["new_username"];

	mysqli_query($conn, "UPDATE tbl_users SET 
	    username		     ='$new_username'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully Change your Username");';
    echo 'window.location.href = "../personal_info.php"';
    echo '</script>';
  


?>