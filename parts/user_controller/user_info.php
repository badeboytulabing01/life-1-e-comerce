<?php 
ob_start();
session_start();

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    include("../inc/conn.php");

    $get_record = mysqli_query($conn, "SELECT * FROM tbl_user WHERE user_id = '$user_id'");

    while ($row_edit = mysqli_fetch_assoc($get_record)) {
        $lastname   = $row_edit["lastname"];
        $firstname  = $row_edit["firstname"];

    }
}else{
        echo "<script>window.location.href='../index.php'</script>";
    }
?>

