<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
	$new_address = $_POST["new_address"];

	mysqli_query($conn, "UPDATE tbl_users SET 
	    address		     ='$new_address'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully Change your Address");';
    echo 'window.location.href = "../personal_info.php"';
    echo '</script>';
  


?>