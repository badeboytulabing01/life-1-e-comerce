<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
	$new_email = $_POST["new_email"];

	mysqli_query($conn, "UPDATE tbl_users SET 
	    email		     ='$new_email'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully Change your email");';
    echo 'window.location.href = "../logout_for_update.php"';
    echo '</script>';
  


?>