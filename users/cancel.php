<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<?php require_once ("../inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "../parts/user_controller/home_search.php"; ?>

  <div class="container mt-4" id="my_purchase">
     <div class="row">
       <div class="col-md-12">
         <table class="table">
           <thead>
             <tr>
                <?php  require_once"purchase/my_purchaeTable.php" ?>
             </tr>
           </thead>
           <tbody>  
                 <?php  require_once"purchase/cancelTable.php"; ?>
           </tbody>
         </table>
       </div><!-- end of col-md-12 -->
     </div><!-- end of row -->
  </div><!-- end of container -->
<br><br><br><br>
 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>