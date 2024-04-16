<?php
 require_once("mainClass.php");
 $ecomerce->ceologin();
?>


<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>
<div class="main text-center">
  <div class="loginbox mx-auto mt-5 w-25 p-5 bg-light border border-2 rounded">
   <img src="img/logo.jpg" class="img-fluid" width="100">
    <h1 class="mb-5">CEO LOGIN</h1>
    <form name="ceolog" method="post" class="p-3 mt-3">
    <div class="input-group mb-3">
  <span class="input-group-text">ID Number</span>
    <input class="form-control" type="text" name="userLog" placeholder="ex. 12345">
</div>
        <div class="input-group mb-3">
  <span class="input-group-text">Password</span>
    <input class="form-control" type="password" name="password">
</div>
  <button class="btn bg-success rounded border text-white mt-3" name="ceolog" onclick="return ceoLog();">Log in</button>
  </div>
  </form>
</div>
  
  <!-- end of footer -->	
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>