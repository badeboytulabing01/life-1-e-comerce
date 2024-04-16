<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php  require_once("../mainClass.php");
 $ecomerce->add_product();
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="category_table">
        <div class="table">
           <?php $view_customer = mysqli_query($conn, "SELECT * FROM tbl_users where access='users'"); ?>
           <h3 class="text-uppercase text-center">Customers</h3>
        <table id="category" class="table table-responsive" cellspacing="0" width="100%">
            <thead>
             <tr>
               <th>Customer ID</th>
               <th>Image</th>
               <th>Last Name</th>
               <th>First Name</th>
               <th>Username</th>
               <th>Contact Number</th>
               <th>Email</th>
               <th>Action</th>
             </tr> 
             </thead>
                <tbody>
                   <?php while ($row = mysqli_fetch_assoc($view_customer)):?>
                    <tr>
                    <td><?php $user_id = $row["user_id"];?> <?php echo $user_id;?></td>
                      <td><img src="../img/profile/<?php echo $row['image'];?>"></td>
                     <td><?php $lastname = $row["lastname"];?> <?php echo $lastname;?></td> 
                     <td><?php $firstname = $row["firstname"];?> <?php echo $firstname;?></td> 
                     <td><?php $username = $row["username"];?> <?php echo $username;?></td> 
                     <td><?php $contact_number = $row["contact_number"];?> <?php echo $contact_number;?></td> 
                     <td><?php $email = $row["email"];?> <?php echo $email;?></td> 
                     <td>
                       <form action="customer.php" method="POST">
                  <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                  <div class="d-flex">
                 <?php echo "<a href='view_users.php?user_id=$user_id'
                   class='btn btn-outline-success me-1'><i class='fa fa-eye' aria-hidden='true'></i> View</a>"; ?>

                    </div><!-- end of d-flex --> 
                  </form>
                     </td>

                  <?php endwhile;?>
                </tbody>
              </table>
            </div><!-- end of category -->
          </div><!-- end of container -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->
  <?php require_once "update_delete/delete.php" ?>
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->

</body>
</html>