<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
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
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>