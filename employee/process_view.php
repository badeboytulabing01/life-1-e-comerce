<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>
<?php require_once "../parts/employee_controller/request_order.php"; ?>

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
            <h2 class="text-uppercase fw-bold text-center">Customer Request Quatation</h2>
      <div class="row">
          
            <div class="col-md-6">
            	 <label class="fs-5"><b>Customer Name:</b> <?php echo $full_name; ?></label>
            </div>

            <div class="col-md-6">
            	 <label class="fs-5"><b>Contact Number:</b> <?php echo $contact; ?></label>
            </div>

             <div class="col-md-6">
               <label class="fs-5"><b>Email:</b> <?php echo $email; ?></label>
            </div>

             <div class="col-md-12">
            	 <label class="fs-5"><b>Address:</b> <?php echo $address; ?></label>

            </div>
             <hr>
            <table id="category" class="table table-responsive mt-3" cellspacing="0" width="100%">
              <?php $employee_id = $userdeatails['user_id'];?>
            <?php $view_orders = mysqli_query($conn, "SELECT * FROM `tbl_request` WHERE  employee_id='$employee_id' and user_id='$user_id' "); ?>

           <thead>
             <tr>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Color</th>
                <th>Size</th>
             </tr>
           </thead>
           <tbody>
              <?php while ($row = mysqli_fetch_assoc($view_orders)):?>
           	  <tr>
           	     <td><?php  $image   = $row["image"];?>
           	     <img src="../img/products/<?php echo $image; ?>" class="img-fluid" width="80">
                 <?php  $product_name   = $row["product_name"]; echo $product_name?></td>
           	     <td><?php  $qty   = $row["qty"]; echo $qty?></td>
    
           	     <td><?php  $color   = $row["color"]; echo $color?></td>
           	     <td><?php  $Size   = $row["Size"]; echo $Size?></td>
        




           	  </tr>
           	 <?php endwhile; ?>
           </tbody>

     

    
         </table> 

     </div><!-- end of row -->
     
   </div><!-- end of container -->
   <div class="col-md-12 mt-4">
         <a href="customer_request.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
     </div><!-- end of col-md-12  -->
</div>
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>