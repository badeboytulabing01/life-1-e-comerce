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

    <!-- Main Content -->
    <div class="container-fluid" id="login_page">
      <div class="row main-content bg-success text-center">
        <div class="col-md-4 text-center company__info">
          <span class="company__logo"><h2><img src="img/logo.jpg" class="img-fluid"></h2></span>
          <h4 class="company_title"></h4>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
          <div class="container-fluid">
            <div class="row">
              <h2>Welcome to Life 1! Please login</h2>
            </div>
            <div class="row">
              <form name="frmLog" method="post" id="loginForm"  action="<?php htmlspecialchars("PHP_SELF"); ?>" class="form-group">
                <div class="row">
                  <input type="text" name="userLog" id="userLog" class="form__input" placeholder="Username">
                </div>
                <div class="row">
                  <!-- <span class="fa fa-lock"></span> -->
                  <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                </div>
                <!-- <div class="row">
                  <input type="checkbox" name="remember_me" id="remember_me" class="">
                  <label for="remember_me">Remember Me!</label>
                </div> -->
                <div class="row">
                  <input type="submit" value="Submit" class="btn" name="submit"  id="submit" onclick="return valLog();">
                </div>
              </form>
            </div>
            <div class="row">
              <p>Don't have an account? <a href="signup.php">Register Here</a></p>
            </div>
          </div>
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