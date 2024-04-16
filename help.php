<?php
 require_once("mainClass.php");
 $ecomerce->login();

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>

<body>
<!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>

  
  <?php require_once"maintenance.php";?>
 

 <?php 
  require_once "parts/footer.php";
  ?>
<!-- end of footer -->

 <?php 
  require_once "parts/js.php";
  ?>
  <!-- end of js -->
</body>
</html>