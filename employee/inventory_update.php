<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php require_once "../parts/employee_controller/product_data.php"; ?>
<?php  require_once("../mainClass.php");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
            <div class="container-fluid mt-4" id="product_view">
              <h3 class="text-center">Product Update</h3>
              <form action="update_delete/inventory_process.php"  method="post" autocomplete="off" enctype="multipart/form-data">
             <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

              <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 text-center">
                <label class="fs-4">Stock</label>
                <input type="number" name="stock" class="form-control" placeholder="Update Stock" value="<?php echo $db_product_stock ?>">
              </div>

               <div class="col-md-12 text-center">
                <button type="submit" name="submit" class="btn btn-outline-success mt-2 text-right"> Update Stock</button>
                 </div>
             </div><!-- end of row -->
             </form>
             <br>
            </div><!-- end of container -->
             <div class="col-md-12 mt-4">
                    <a href="inventory.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                </div><!-- end of col-md-12  -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>