<?php
    require_once("../../mainClass.php"); 
	include("../../inc/conn.php");
	$user_id = $_POST["user_id"];
    $new_pass   = md5($_POST['new_pass']);
    
	mysqli_query($conn, "UPDATE tbl_users SET 
	    password		='$new_pass'
	    WHERE 
	    user_id 		='$user_id'");
	
    echo '<script = "text/javascript">';
    echo 'alert("Successfully Change Password");';
    echo 'window.location.href = "../personal_info.php"';
    echo '</script>';
  


?>