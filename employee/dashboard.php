<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="employeeDashboard">
           
            <div class="row">
            	<div class="col-md-3 me-1" id="user">
            		<h4>Total of User</h4>
            		 <label class="fs-2"><img src="../img/icon/users.png" class="img-fluid" width="100"> <?php  $sql="SELECT count(user_id) AS total FROM  tbl_users WHERE access='users'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_users=$values['total']; echo (number_format($total_users));?></label>
                 <br>
            	</div><!-- end of col-md-3 -->
            	<div class="col-md-3 me-2" id="order">
            		<h4>Total of Order</h4>
            		<label class="fs-2"><img src="../img/icon/orders.png" class="img-fluid" width="100"><?php  $sql="SELECT count(user_id) AS total FROM  tbl_buying WHERE status='Delivery'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_orders=$values['total']; echo (number_format($total_orders));?></label>
                <br>
            	</div><!-- end of col-md-3 -->
            	<div class="col-md-3 me-1" id="sales">
            		<h4>Total of Sales</h4>
            		 <label class="fs-2"><img src="../img/icon/sales.png" class="img-fluid" width="100">
                     <?php $employee_id = $userdeatails['user_id'];?>
                  <?php  $sql="SELECT user_id, SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE status='complete'  and employee_id='$employee_id'";   $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_sale=$values['total_sale']; echo (number_format($total_sale));?>      
             
                 </label>
                 <br>
            	</div><!-- end of col-md-3 -->
            	<div class="col-md-3" id="products">
            		<h4>Total of Product's</h4>
                <?php $employee_id = $userdeatails['user_id'];?>

            		  <label class="fs-2"><img src="../img/icon/tatal_products.png" class="img-fluid" width="100"><?php  $sql="SELECT count(product_id) AS total FROM tbl_product WHERE status='view_product'  and employee_id='$employee_id' ";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_products=$values['total']; echo (number_format($total_products));?></label>
                  <br>
            	</div><!-- end of col-md-3 -->
            </div><!-- end of row -->	 
             <div class="row mt-4">
               <div class="col-md-12">
               	 <h2 class="text-uppercase fw-bold">Announcement</h2>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
               </div><!-- end of col-md-12 -->  	
            </div><!-- end of row -->

          </div><!-- end of container -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>