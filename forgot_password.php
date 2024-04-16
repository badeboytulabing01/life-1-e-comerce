<?php
 require_once("mainClass.php");
 $ecomerce->login();

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>
<?php require_once "parts/forgot_pass.php"; ?>

<body>
<!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>

    <div class="container-fluid" id="forgot">
    	<div class="row">
    		<div class="col-md-12">
    			<p>If you forgot your password follow the instruction and after you finish the instruction it will send you the code in your email address then kindly login with your username and the verified code...</p>

    			<p>Input your Email Address</p>

    			<form name="frmgot" class="form-inline"  method="POST" action="<?php htmlspecialchars("PHP_SELF"); ?>">
				
				<div class="form-group d-flex">
					<label for="email">Email: </label>
					<input type="email" name="email" class="form-control me-2" value="">

					<input type="submit" class="btn btn-success" name="btnFor" value="Proceed" onclick="return val(); ">
				</div>

			

			</form>


    		</div><!-- end of col-md-12 -->
    	</div><!-- end of row -->
    </div><!-- end of container -->

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