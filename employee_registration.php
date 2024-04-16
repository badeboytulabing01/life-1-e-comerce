<?php
 require_once("mainClass.php");
 $ecomerce->add_employee();
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
            Employee Registration
        </div>

        <form name="ermReg" method="post" id="user_log" class="mt-5" action="<?php htmlspecialchars("PHP_SELF"); ?>">
            <div class="row">
                <div class="col-md-6">
                  <label class="text-light">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Ex. Dela Cruz">
                </div> 
                 <div class="col-md-6">
                     <label class="text-light">First Name</label>
                     <input type="text" name="fname" class="form-control" placeholder="Ex. Joana">
                 </div>
                <div class="col-md-6">
                  <label class="text-light" style="font-size: 10px;">Employee Number</label>
                    <input type="text" name="userLog" class="form-control" placeholder="Ex. 012332">
                </div> 

                <div class="col-md-6">
                     <label class="text-light">Email</label>
                     <input type="email" name="email" class="form-control" placeholder="Ex. Joana20@gmail.com">
                 </div>

                  <div class="col-md-12">
                     <label class="text-light">Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                 </div>

                 <div class="col-md-12">
                  <label class="text-light" style="font-size: 10px;">Confirm Password</label>
                    <input type="password" name="conpass" class="form-control" placeholder="Confirm Password">
                </div> 

                <input type="hidden" name="access" value="pending">

                <div class="col-md-12 mt-2">
                    <button name="addEmployee" class="btn" onclick="return employeeReg();">Submit</button>
                </div>

            </div><!-- end of row -->
        </form>
        
    </div>
  <!-- end of footer -->  
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>