
<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
  <div class="container mt-3" id="personal_info">
  	<div class="row">
  		
  		<div class="col-md-5 me-3" id="profile_bg">
           <div class="user_info">
  			<h3 class="text-light fs-4">Profile</h3>
            <br>
  		      <img src="../img/profile/<?= $userdeatails['image'];?>" class="img-fluid rounded-circle">
  		     </div><!-- end of user info -->
          <a href="create_account.php" class="fs-5 me-5">Change Profile Picture</a>

	  		<div class="d-flex mt-2">
	  			<h2 class="me-5"> <?= $userdeatails['firstname'];?> <?= $userdeatails['Lastname'];?>  </h2>
	  	         <a href="update_name.php" class="mt-3"> Change name</a>
	  		 </div><!-- AND FLEX -->
        
             <div class="d-flex">
  			<a href="update_pass.php" class="mt-1"> Change Password</a>
  	       </div><!-- end of flex -->
  	     </div><!-- end of col-md-6 -->
  		 <!-- end of profile -->
  		 <div class="col-md-6" id="profile_bg">
  		   <h3 class="mt-2">Email & Username</h3>  			
  			<div class="d-flex mt-5">
  				<h2 class="fs-4 me-5"><?= $userdeatails['email'];?></h2>
  				<a href="update_email.php">Change</a>
  			</div><!-- end of flex -->
  				<div class="d-flex mt-2">
  				<h2 class="fs-4 me-5"><?= $userdeatails['Username'];?></h2>
  				<a href="update_username.php">Change</a>
  			</div><!-- end of flex -->

  			<p class="mt-3">To update an email address, you must have at least one email addresses on file.</p>
  		</div><!-- end of col-md-6 -->
  		<!-- end of email add -->
  		 <div class="col-md-5 me-3 mt-2" id="profile_bg">
  		   <h3 class="mt-2">Account Options</h3>  	
  		   
  		   <label>Language</label>
  			<h5 class="fs-6 fw-bold">English</h5>
             <br>
  			<label>Nationality</label>
  			<h5 class="fs-6 fw-bold">Philippines</h5>
            <br>
            <label>Religion</label>
  			<h5 class="fs-6 fw-bold"></h5>

  			<a href="#" class="mt-5 fw-bold">Edit</a>
  		</div><!-- end of col-md-6 -->
  		<!-- end of account option -->

  		<div class="col-md-6 mt-2" id="profile_bg">
  		   <h3 class="mt-2">Address</h3>  			
  			<div class="d-flex mt-5">
  				<h2 class="fs-4 me-5"><?= $userdeatails['address'];?></h2>
  				<a href="update_adress.php">Change</a>
  			</div><!-- end of flex -->
  			
  		</div><!-- end of col-md-6 -->
  		<!-- end of email add -->


  	</div><!-- end of eow -->
  </div><!-- end of container -->

 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>