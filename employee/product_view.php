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
             <div class="row">
               <div class="col-md-4">
                 <img src="../img/products/<?php echo $db_image;?>" class="img-fluid">
               </div><!-- end of col-md-12 -->
               
               <div class="col-md-6">
                  <h4 class="fw-bold"><?php echo $db_product_name; ?></h4>
                  <label class="fs-5"><b>Description:</b> <?php echo $db_discription; ?></label><br>
                  <label class="fs-5"><b>Category</b><?php echo $db_category; ?></label><br>
                  <label class="fs-5"><b>Price: </b> ₱<?php echo (number_format($db_price,2)); ?></label><br>
                  <label class="fs-5"><b>Discount: </b><?php echo $db_discount; ?></label><br>
                  <label class="fs-5"><b>Shipping Fee:</b><?php echo $db_shipping_fee; ?></label><br>
                  <label class="fs-5"><b>Available Color: </b><?php echo $db_color; ?></label><br>
                  <label class="fs-5"><b>Size: </b><?php echo $db_size; ?></label><br>
                  <label class="fs-5"><b>Stock: </b><?php echo $db_product_stock; ?></label>
               </div><!-- end of col-md-12 -->
             </div><!-- end of row -->
             <br>
            
            </div><!-- end of container -->
               <div class="col-md-12 mt-4">
                    <a href="product.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                </div><!-- end of col-md-12  -->

        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>