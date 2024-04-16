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
              <form action="update_delete/product_process.php"  method="post" autocomplete="off" enctype="multipart/form-data">
             <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

              <div class="row">
              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="file" id="img" class="form-control" name="img">
                 <label for="floatingInput" class="fs-6 fw-bold">Product Image</label>
                  </div><!-- end of floating div -->
              </div><!-- end of col-md-12 -->

               <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text"  name="product_name" id="name" class="form-control" value="<?php echo $db_product_name; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Product Name</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-12 -->

              <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="description" id="description" class="form-control" value="<?php echo $db_discription; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Description</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

               <div class="col-md-4">
                <div class="form-floating mb-3">
                <select name="category" class="form-control"> 
                   <option value="<?php echo $db_category;?>"><?php echo $db_category; ?></option>
                     <?php $view_category = mysqli_query($conn, "SELECT * FROM  tbl_category where status='view'"); ?>
                        <?php while ($row = mysqli_fetch_assoc($view_category)):?>                   
                       <option value=" <?php $category_id = $row["category_id"];?> <?php echo $category_id;?>">
                        <?php $category_name = $row["category_name"];?> <?php echo $category_name;?>
                     </option>
                   
                   <?php endwhile; ?>
                </select>
                 <label for="floatingInput" class="fs-6 fw-bold">Category</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

               <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="price" id="price" class="form-control" value="<?php echo $db_price; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Price</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

               <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="discount" id="discount" class="form-control" value="<?php echo $db_discount; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Discount</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->
               
               <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="shipping" id="shipping" class="form-control" value="<?php echo $db_shipping_fee; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Shipping Fee</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

               <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="color" id="color" class="form-control" value="<?php echo $db_color; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Available Color</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

              <div class="col-md-4">
                <div class="form-floating mb-3">
                 <input type="text" name="size" id="size" class="form-control" value="<?php echo $db_size; ?>">
                 <label for="floatingInput" class="fs-6 fw-bold">Available Sizes</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

                <div class="col-md-4">
                <div class="form-floating mb-3">
                 <select name="statusProduct" class="form-control">
                     <option><?php echo $display_status; ?></option>
                     <option value="Customer Allowed to Request Price">Customer Allowed to Request Price</option>
                     <option value="none">none</option>
                  </select>
                 <label for="floatingInput" class="fs-6 fw-bold">Product Status</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->
                    

          <input type="hidden" name="empname" id="empname" value="<?= $userdeatails['Lastname'];?>, <?= $userdeatails['firstname'];?>" />
            <input type="hidden" name="employee_id" id="employee_id" value="<?= $userdeatails['user_id'];?>" />


               <div class="col-md-12 text-center">
                <button type="submit" name="submit" class="btn btn-outline-success mt-2 text-right"> Update Now</button>
                 </div>
             </div><!-- end of row -->
             </form>
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