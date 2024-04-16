<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?> 
    <div class="container mt-4" id="place_order">
    <form>
       <div class="row">
         <div class="col-md-3">
          <img src="../img/products/14 Backpack (Arsenio).png" class="img-fluid" width="200">
         </div><!-- end of col-md-6 -->

         <div class="col-md-6 mt-2">
          <h5><b>Shipping Location:</b> Atlas Compound Naga Road Pulang Lupa Uno las Pinas City</h5>
          <br>
          <h5><b>Mobile Number:</b> 09991995650</h5>
          <br>
          <h5><b>Price:</b> P200</h5>
           <br>
          <h5><b>Quantity:</b> P5</h5>
          <br>
          <h5><b>Shipping Fee:</b> P50</h5>
          <br>
          <h5><b>Total:</b> P 1,000</h5>
         </div><!-- end of col-md-6 -->
       </div><!-- end of row -->
       <div class="col-md-12 mt-2 text-center">
         <input type="submit" class="btn btn-outline-danger fs-5" value="Confirm">
       </div>
     </form>  
     <br>
   </div><!-- end of- contaienr -->
 
<br><br><br><br>
 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>