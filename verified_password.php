<?php
 require_once("mainClass.php");
 $ecomerce->login();

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>
<?php require_once "parts/verified_pass.php"; ?>

<body>
<!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>

   <div class="container-fluid" id="forgot">
  <div class="row">
    <div class="col-md-12">
      
      <p>If you forgot your password follow the instruction and after you finish the instruction it will send you the code in your email address then kindly login with your username and the verified code...</p>


      <p>Email Address is verified you can now change the Password</p>
      <p>just check the inbox if it's not in the inbox check the spam</p>
      
      <form name="frmgot" class="form-inline" method="POST" action="update.php">

      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

        <div class="form-group d-flex">
          <label for="email" class="mt-2">Email: </label>
          <i class="glyphicon glyphicon-send"></i>
          <input type="email" readonly="" name="new_email" class="form-control me-2" value="<?php echo $db_mail; ?>">
             <input type="hidden" name="new_pass" class="form-control" value="<?php echo $db_password; ?>">

           <input type="submit" class="btn btn-success" name="btnUpdate" value="Change Password">
        </div>

       

      </form>
    </div>
  </div>
</div>

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