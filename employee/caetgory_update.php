<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php require_once "../parts/employee_controller/category_data.php"; ?>
<?php  require_once("../mainClass.php");
 $ecomerce->add_category();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
            <div class="container-fluid" id="category_update">
               <h2 class="text-center">Category Update</h2>
               <form action="update_delete/category_process.php"  method="post" autocomplete="off" enctype="multipart/form-data">
                   <input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
              
              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="file" id="img" class="form-control" name="img"  value="<?php echo $db_image?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Category Image</label>
                  </div><!-- end of floating div -->
               </div><!-- end of col-md-12 -->

               <div class="col-md-12">
                 <div class="form-floating mb-3">
                  <input type="text"  class="form-control" name="category_name" id="category_name"  value="<?php echo $db_category_name?>">
                   <label for="floatingInput" class="fs-6 fw-bold">Category Name</label>
                  </div><!-- end of floating div -->
               </div><!-- end of col-md-12 -->

               <input type="hidden"  class="form-control" name="empname" id="epname"  value="<?= $userdeatails['Lastname'];?>,<?= $userdeatails['firstname'];?>">

                 <div class="col-md-12 text-center">
                   <button type="submit" name="submit" class="btn btn-outline-success mt-2 text-right"> Update Now</button>
                 </div>
               </form>
                 <div class="col-md-12">
                    <a href="category.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                </div><!-- end of col-md-12  -->
            </div><!-- end of container --> 
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>