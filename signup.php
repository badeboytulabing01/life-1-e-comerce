<?php
 require_once("mainClass.php");
 $ecomerce->add_user();
?>


<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->  
 <?php require_once "parts/home_controller/home_search.php"; ?>
  
  <div class="container mt-2" id="signup">
     
     <div class="row">
        <div class="col-md-6">
            <h1>Create your Life 1 Account</h1>
        </div><!-- end of col-md-6 -->
        <div class="col-md-6" id="link_login">
          <label>Already member?</label> <a href="login.php">Login</a> <label>Here</label>
        </div><!-- end of col;-md-6 -->
      </div><!-- end of row -->

  	  <div class="row" id="signup_background">
  	  	<div class="col-md-6">
            <img src="img/registration.jpg" class="img-fluid">
  	  	 </div><!-- end of col md row -->
  	  	<div class="col-md-6">
  	   	 <form name="frmReg" method="post" id="user_log" class="mt-5" action="<?php htmlspecialchars("PHP_SELF"); ?>">
  	   		<div class="row mt-2">
  	  			<div class="col-md-6">
  	  			   	 <div class="form-floating">
	                    <input type="text" name="lasname" id="lasname" class="form-control" placeholder="Last Name"  required>
	                   <label for="floatingInput">Last Name*</label>
                   </div><!-- end of form-floating -->	
  	  		  </div><!-- end of col-md-6 -->

  	  			<div class="col-md-6">
  	  			   <div class="form-floating">
	                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name"  required>
	                   <label for="floatingInput">First Name*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	     <div class="col-md-6 mt-2">
  	  			   <div class="form-floating">
	                    <input type="text" name="userLog" id="userLog" class="form-control" placeholder="username"  required>
	                   <label for="floatingInput">username*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	      <div class="col-md-6 mt-2">
  	  			   <div class="form-floating">
	                    <input type="text" name="contact" id="contact" class="form-control" placeholder="Contact Number"  required>
	                   <label for="floatingInput">Contact Number*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	     <div class="col-md-12 mt-2">
  	  			   <div class="form-floating">
	                    <input type="email" name="email" id="email" class="form-control" placeholder="email"  required>
	                   <label for="floatingInput">Email*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	     <div class="col-md-12 mt-2">
  	  			   <div class="form-floating">
	                    <input type="text" name="address" id="address" class="form-control" placeholder="Address"  required>
	                   <label for="floatingInput">Address*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	      <div class="col-md-6 mt-2">
  	  			   <div class="form-floating">
	                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"  required>
	                   <label for="floatingInput">Password*</label>
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->

  	  	     <div class="col-md-6 mt-2">
  	  			   <div class="form-floating">
	                    <input type="password" name="conpass" id="conpass" class="form-control" placeholder="Confirm Password"  required>
	                   <label for="floatingInput">Confirm Password*</label>
	                   
                 </div><!-- end of form-floating -->	
  	  	     </div><!-- end of col-md-6 -->


                 
  	  	     <div class="col-md-12 mt-2">
  	  	     	<button type="submit" name="add" id="add" class="btn btn-outline-danger" onclick="return valReg();"> SIGN UP</button>
                 
  	  	     	<!-- <button type="submit" class="btn btn-outline-primary mt-4"> Sign up with Email</button> -->
  	  	     </div><!-- end of col-md-12 -->
  	  		</div><!-- end of row -->
  	  	  </form>	
  	  	  <br>
  	  	</div><!-- end of col-md- -->
  	  </div><!-- end of row -->
  </div><!-- end of container -->

 <?php 
  require_once "parts/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>