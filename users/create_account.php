
<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
  <div class="container mt-3" id="c_account">
  <form action="update/process_updateprofile.php" method="post" autocomplete="off" enctype="multipart/form-data">

  <div class="row">
  <center>
        <div class="col-sm-2  imgUp">
          <div class="imagePreview"></div>
           <input type="hidden" name="user_id" value="<?= $userdeatails['user_id'];?>">
              <label class="btn btn-primary"> Upload Profile
              <input type="file" name="img" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
              </label>
                 <input type="hidden" name="name" value="<?= $userdeatails['Lastname'];?>">
        </div><!-- col-2 -->
        
 </center>
     </div><!-- row -->
    <div class="col-md-12 text-center">
    <input type="submit" class="btn btn-outline-success" name="submit"> 
    </div><!-- end of col-md-12 -->
    <br>
  </form>
</div><!-- end of container -->

 <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>

<style type="text/css">
 
</style>