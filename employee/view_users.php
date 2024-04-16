<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php require_once ("../inc/conn.php"); ?>
<?php require_once "../parts/employee_controller/user_data.php"; ?>
<?php  require_once("../mainClass.php");?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>
<div class="col py-3">
            <div class="container-fluid mt-4" id="product_view">
                <h2 class="text-uppercase text-center">customer view</h2>
                  <div class="row">
                     <div class="col-md-12">
                       <img src="../img/profile/<?php echo $image?>" clas="img-fluid" width="50">
                     </div>
                     
                     <table class="mt-2 table table-borderd" border="2">
                       <tbody>
                         <td><b>Lastname: </b><?php echo $lastname; ?></td>
                         <td><b>Lastname: </b><?php echo $firstname; ?></td>
                         <td><b>Contact Number: </b><?php echo $contact_number; ?></td>
                       </tbody>
                       <tbody>
                         <td><b>Username: </b><?php echo $username; ?></td>
                         <td><b>email: </b><?php echo $email; ?></td>
                       </tbody>
                       <tbody>
                         <td><b>Address: </b><?php echo $address; ?></td>
                       </tbody>

                     </table>
                  </div> 
             </div>
               <div class="col-md-12 mt-4">
                    <a href="customer.php" class="btn btn-danger">Back <i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
                </div><!-- end of col-md-12  -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>