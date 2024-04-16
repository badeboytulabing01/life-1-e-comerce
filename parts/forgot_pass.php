<?php 
	
	$email = "";

	if (isset($_POST["btnFor"])) {
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			
			if (!empty($_POST["email"])) {
				$email = $_POST["email"];
			}

			if ($email) {
				$jScript = md5(rand(1,9));
				$newScript = md5(rand(1,9));
				include("inc/conn.php");

				$check_email = mysqli_query($conn, "SELECT * FROM tbl_users WHERE email = '$email'");

				$check_email_row = mysqli_num_rows($check_email);

				if ($check_email_row > 0) {
					
					while ($row = mysqli_fetch_assoc($check_email)) {
						
						$user_id = $row["user_id"];
						$searchmail = $row["email"];
						$db_email = $row["email"];
						$searpass = $row["password"];

					if ($email == $db_email) {
						session_start();
						$_SESSION["user_id"] = $user_id;
						echo "<script>window.location.href='verified_password.php?jScript=$jScript&&newScript=$newScript&&email=$searchmail&&$jScript&&$newScript'</script>";
						}
					}

				}else{
					echo "<script language='javascript'>alert('You Are Not Yet Registered'); </script>";
					echo "<script>window.location.href='index.php'</script>";
				}
			}

		}
	}

?>