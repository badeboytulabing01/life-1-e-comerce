<?php require_once "../parts/employee_parts/ceo_session.php"; ?>
<?php  require_once("../mainClass.php"); ?>
<?php  require_once("../inc/conn.php"); ?>

<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/employee_parts/employee_head.php"; ?>

<body>
<?php require_once "../parts/employee_parts/ceonav.php"; ?>
  <div class="container mt-2">
  <h4 class="text-center fw-bold text-danger">LIFE 1 CORPORATION EMPLOYEE PROFILE</h4>
  <div class="row">
   <?php $view_user = mysqli_query($conn, "SELECT * FROM tbl_users WHERE access='employee'"); ?>
        <?php while ($row = mysqli_fetch_assoc($view_user)):
                $user_id   = $row["user_id"];
                $image   = $row["image"];
                $image_status   = $row["image_status"];
                $lastname   = $row["lastname"];
                $firstname   = $row["firstname"];
                $username   = $row["username"];

                ?>	
  	<div class="col-md-6">
  		<div class="p-18 bg-surface-secondary">
  <div class="row">
    <div class="col-lg-9">
     
      <div class="card shadow">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <a href="#" class="avatar avatar-xl rounded-circle">
               <?php 
        
                          if ($image_status >=1) {
                            echo " <img src='../img/employee/$image' class='img-fluid'>";
                              
                          }else if($image_status <=0){
                           echo " <img src='../img/icon/user.png' width='30' height='30' class='img-fluid'>";
                          }
                         ?>
            </a>
          </div>				
          <div class="text-center my-6">
            <!-- Title -->
            <label class="d-block h5 mb-0"><?php echo $lastname; ?>, <?php 	echo $firstname; ?></label>
            <!-- Subtitle -->
            <span class="d-block text-sm text-muted">Employee Id: <?php echo $username; ?></span>
          </div>
          <!-- Stats -->
          <div class="d-flex">
            <div class="col-6 text-center">
            <?php  $sql="SELECT SUM(price*qty+shipping_fee) as total_sale FROM tbl_buying WHERE status='complete' AND  employee_id ='$user_id'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_sale=$values['total_sale']; ?> 
       
              <a href="#" class="h4 font-bolder mb-0 text-success">
               <?php 
                  if ($total_sale<="0") {
                    echo "0";
                  }else{
                    echo (number_format($total_sale));
                  }
               ?></a>
              <span class="d-block text-sm">Total Sales</span>
            </div>
            <div class="col-6 text-center">
            <?php  $sql="SELECT count(product_id ) as total_product FROM tbl_product WHERE status='view_product' AND  employee_id ='$user_id'";  $result=mysqli_query($conn,$sql); $values=mysqli_fetch_assoc($result); $total_product=$values['total_product']; ?> 

              <a href="#" class="h4 font-bolder mb-0 text-danger">
                <?php 
                  if ($total_product<="0") {
                    echo "0";
                  }else{
                    echo (number_format($total_product));
                  }
               ?>
              </a>
              <span class="d-block text-sm">Total Product's</span>
            </div>
          <!--   <div class="col-4 text-center">
              <a href="#" class="h4 font-bolder mb-0">1.5K</a>
              <span class="d-block text-sm">Followers</span>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  	</div>
  	  <?php endwhile; ?>
  </div>
  	
  </div>
 
 <?php require_once "../parts/employee_parts/employee_js.php" ?>
  <!-- end of js -->
</body>
</html>