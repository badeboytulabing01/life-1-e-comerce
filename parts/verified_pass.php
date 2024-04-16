<?php
session_start();

if (isset($_SESSION["user_id"])) {
	$user_id = $_SESSION["user_id"];

	include("inc/conn.php");

	$get_record = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id = '$user_id'");

	while ($row_edit = mysqli_fetch_assoc($get_record)) {
		$db_user = $row_edit["username"];
		$db_email = $row_edit["email"];
		$db_pass = $row_edit["password"];
	}
}else{
		echo "<script>window.location.href='index.php'</script>";
	}
?>

<?php 
	$searchmail = $_REQUEST["email"];
	//$searpass = $_REQUEST["password"];

	include("inc/conn.php");

	$get = mysqli_query($conn, "SELECT * FROM tbl_users WHERE user_id = '$user_id'");

	while ($row = mysqli_fetch_assoc($get)) {
		$db_user = $row["username"];
		$db_mail = $row["email"];
		$db_password = $row["password"];
	}

?>
