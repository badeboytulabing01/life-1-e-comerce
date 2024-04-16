<?php require_once "../parts/employee_parts/employee_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/employee_sidebar.php"; ?>

<div class="col py-3">
          <div class="container-fluid" id="personal_info">
                <div class="row">
        
        <div class="col-md-5 me-3" id="profile_bg">
           <div class="user_info">
            <h3 class="text-light fs-4">Profile</h3>
            <br>
             <?php 
                  $img =  $userdeatails['image'];
               $imgstatus =  $userdeatails['image_status'];

                          if ($imgstatus >=1) {
                            echo " <img src='../img/employee/$img' width='30' height='30' class='rounded-circle'>";
                              
                          }else if($imgstatus <=0){
                           echo " <img src='../img/icon/user.png' width='30' height='30' class='rounded-circle'>";
                          }
                         ?>
             </div><!-- end of user info -->
          <a href="create_account.php" class="fs-5 me-5">Change Profile Picture</a>

            <div class="d-flex mt-2">
                <h2 class="me-5 text-uppercase fs-5"> <?= $userdeatails['firstname'];?> <?= $userdeatails['Lastname'];?>  </h2>
                 <a href="update_name.php" class="mt-3"> Change name</a>
             </div><!-- AND FLEX -->
        
             <div class="d-flex">
            <a href="update_pass.php" class="mt-1"> Change Password</a>
           </div><!-- end of flex -->
         </div><!-- end of col-md-6 -->
         <!-- end of profile -->
         <div class="col-md-6" id="profile_bg">           
            <div class="mt-5">
                <h2 class="fs-4 me-5"><b>Email Address: </b><?= $userdeatails['email'];?></h2>
                <a href="update_email.php">Change</a>
            </div><!-- end of flex -->
                <div class="d-flex mt-2">
                <h2 class="fs-4 me-5"><b>Employee Number:</b> <?= $userdeatails['Username'];?></h2>
            </div><!-- end of flex -->

            <p class="mt-3">To update an email address, you must have at least one email addresses on file.</p>
        </div><!-- end of col-md-6 -->
        <!-- end of email add -->

    </div><!-- end of eow -->

          </div><!-- end of container -->
        </div><!-- end of col-py -->
    </div><!-- end of flex wrap -->
</div><!-- end of container -->

 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>