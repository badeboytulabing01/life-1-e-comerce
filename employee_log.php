<?php
 require_once("mainClass.php");
 $ecomerce->employee_log();
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/employee_log.css">
<?php require_once "parts/head.php"; ?>

<body>
<div class="wrapper">
        <div class="logo">
            <img src="img/logo.jpg " class="img-circle">
        </div>
        <div class="text-center text-light mt-4 name">
            Employee Login
        </div>
        <form  name="frmLog" method="post" class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="text-light far fa-user"></span>
                <input type="text" class="text-light" name="userLog" id="userName" placeholder="Employee Number">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="text-light fas fa-key"></span>
                <input type="password" class="text-light" name="password" id="pwd" placeholder="Password">
            </div>
            <button class="fw-bold btn mt-3" name="submit"  onclick="return valLog();">Login</button>
        </form>

        <div class="row">
            <div class="col-md-6"></div>
               <div class="col-md-6">
                 <p style="font-size: 10px;" class="text-light">Don't have an account? <a href="employee_registration.php">Register Here</a></p>  
             </div>
        </div>
        
    </div>
  <!-- end of footer -->	
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>