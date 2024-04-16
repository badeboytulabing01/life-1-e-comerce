<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
	$status = $_POST["status"];

	mysqli_query($conn, "UPDATE tbl_buying SET 
	    status		     ='$status'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully confirm Payment");';
    echo 'window.location.href = "../dashboard.php"';
    echo '</script>';
  

?>