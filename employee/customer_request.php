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
            <h2 class="text-uppercase fw-bold text-center">Customer Request Quatation </h2>
      <div class="row">
       <div class="col-md-12">
         <?php $employee_id = $userdeatails['user_id'];?>

         <?php $view_orders = mysqli_query($conn, "SELECT DISTINCT email, user_id, full_name, contact, address FROM `tbl_request` WHERE status='pending' and employee_id='$employee_id'"); ?>
           <h4 class="text-center text-danger fw-bold">Process</h4>
        <a href="customer_request.php" class="btn btn-success">Process</a> <a href="customer_request_complete.php" class="btn btn-success">Completed</a>
        <table id="category" class="table table-responsive" cellspacing="0" width="100%">
            <thead>
             <tr>
              <th>#</th>
                <th>Customer Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Action</th>
             </tr> 
             </thead>
                <tbody>
                 <?php while ($row = mysqli_fetch_assoc($view_orders)):
                   $user_id   = $row["user_id"];
                  $full_name   = $row["full_name"];
                  $contact   = $row["contact"];
                  $email   = $row["email"];   ?>
                 <tr>
                 <td><?php echo $user_id ?></td>
                 <td><?php echo $full_name ?></td>
                 <td><?php echo $contact ?></td>
                 <td><?php echo $email ?></td> 
               <td>
                   <form action="customer_request.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                   <div class="d-flex">
                    <?php echo "<a href='process_view.php?user_id=$user_id'
                   class='btn btn-outline-primary me-1'><i class='fa fa-eye' aria-hidden='true'></i> View Request</a>"; ?>

                     <div class="dropdown">
                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Select
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><button type="submit" name="complete" id="complete" class="dropdown-item">Completed</button></li>
                   </ul>
                </div>

              </div><!-- end d-flex -->
                   </form>
                 </td>  
                 </tr>
                 <?php endwhile;?>
             </tbody> 
       </div><!-- end of col-md-12 -->
     </div><!-- end of row -->
   </div><!-- end of container -->
</div>
 <?php require_once "update_delete/request_q.php";?>
 <?php require_once "../parts/employee_parts/employee_js.php";?>
  <!-- end of js -->
</body>
</html>