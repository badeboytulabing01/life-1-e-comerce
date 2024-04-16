<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="category_table">
            <h2 class="text-uppercase fw-bold text-center">Customer Orders</h2>
      <div class="row">
       <div class="col-md-12">
         <?php require_once"orderButton/order.php"; ?>

         <?php $view_orders = mysqli_query($conn, "SELECT DISTINCT user_id, customer_name, address, mobile_number FROM `tbl_buying` WHERE status='complete'"); ?>
         <h5 class="mt-2 fw-bold text-center">COMPLETE ORDER</h5>
         <table id="category" class="table table-responsive" cellspacing="0" width="100%">
           <thead>
             <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Action</th>

             </tr>
           </thead>
           <tbody>  
           <?php while ($row = mysqli_fetch_assoc($view_orders)):
                  $user_id   = $row["user_id"];
                  $mobile_number   = $row["mobile_number"];
                  $customer_name   = $row["customer_name"];
                  $address   = $row["address"];


                  
                  ?>
              <tr>
                 <td><?php echo $user_id ?></td>
                 <td><?php echo $customer_name ?></td>
                 <td><?php echo $mobile_number ?></td>
                 <td><?php echo $address ?></td> 
                 <td>
                   <form action="complete_order.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                   <div class="d-flex">
                    <?php echo "<a href='completeview_orders.php?user_id=$user_id'
                   class='btn btn-outline-primary me-1'><i class='fa fa-eye' aria-hidden='true'></i> View order</a>"; ?>

                     <div class="dropdown">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Select
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><button type="submit" name="toship" id="toship" class="dropdown-item">To Ship</button></li>
                      <li><button type="submit" name="toreceive" id="toreceive" class="dropdown-item">To Receive</button></li>
                      <li><button type="submit" name="complete" id="complete" class="dropdown-item">Completed</button></li>
                   </ul>
                </div>

              </div><!-- end d-flex -->
                   </form>
                 </td>  


              </tr>
            <?php endwhile;?>
           </tbody>
         </table>
       </div><!-- end of col-md-12 -->
     </div><!-- end of row -->
   </div><!-- end of container -->
</div>
 <?php require_once "update_delete/completedelete.php";?>
 <?php require_once "../parts/employee_parts/employee_js.php";?>
  <!-- end of js -->
</body>
</html>