<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>
<?php require_once "../parts/employee_controller/customerOrder_data.php"; ?>

<?php  
  $custmer_id = $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="category_table">
            <h2 class="text-uppercase fw-bold text-center">Customer Orders</h2>
      <div class="row">
          
            <div class="col-md-6">
            	 <label class="fs-5"><b>Customer Name:</b> <?php echo $db_customer_name; ?></label>
            </div>

            <div class="col-md-6">
            	 <label class="fs-5"><b>Contact Number:</b> <?php echo $db_mobile_number; ?></label>
            </div>

             <div class="col-md-12">
            	 <label class="fs-5"><b>Address:</b> <?php echo $db_address; ?></label>

            </div>
             <hr>
            <table id="category" class="table table-responsive mt-3" cellspacing="0" width="100%">

            <?php $view_orders = mysqli_query($conn, "SELECT * FROM `tbl_buying` WHERE status='toreceive' and user_id='$custmer_id' "); ?>

           <thead>
             <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Shipping fee</th>
                <th>Color</th>
                <th>Size</th>
                <th>Total</th>
             </tr>
           </thead>
           <tbody>
              <?php while ($row = mysqli_fetch_assoc($view_orders)):?>
           	  <tr>
           	     <td><?php  $image   = $row["image"];?>
           	     <img src="../img/products/<?php echo $image; ?>" class="img-fluid" width="80"><?php  $product_name   = $row["product_name"]; echo $product_name?></td>
           	     <td>₱<?php  $price   = $row["price"]; echo(number_format($price,2));?></td>
           	     <td><?php  $qty   = $row["qty"]; echo $qty?></td>
           	     <td>₱<?php  $shipping_fee   = $row["shipping_fee"]; echo(number_format($shipping_fee,2));?></td>
           	     <td><?php  $color   = $row["color"]; echo $color?></td>
           	     <td><?php  $size   = $row["size"]; echo $size?></td>
           	     <td><?php $totalPrice = $price*$qty+$shipping_fee; echo $totalPrice?></td>




           	  </tr>
           	 <?php endwhile; ?>
           </tbody>

             <tbody>
    <td></td><td></td><td><td><td></td><td></td>
    <?php
    $user_id =  $userdeatails['user_id'];
    $view_totalSale = mysqli_query($conn, "SELECT user_id, SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE status='toreceive' and user_id='$custmer_id'"); ?>
     <?php while ($row = mysqli_fetch_assoc($view_totalSale)):?>
    <td>
         <div class="row" id="check_out">
          <div class="col-md-12">          
           <span class="me-2"> Total: ₱<?php $total_sale = $row["total_sale"];
            echo(number_format($total_sale,2));?></span>
         </div><!-- end of col-dm-12 -->
        </div><!-- end of row -->
    </td>
     <?php endwhile; ?>
  </tbody>

    
         </table> 

     </div><!-- end of row -->
     
   </div><!-- end of container -->
   <div class="col-md-12 mt-4">
         <a href="toreive.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
     </div><!-- end of col-md-12  -->
</div>
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>