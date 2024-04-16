<?php require_once ("inc/conn.php"); ?>
<?php require_once "parts/employee_controller/product_data.php"; ?>
<?php  require_once("mainClass.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>
<?php 
 $ecomerce->requestquation(); 
 ?>
<body>
 <!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>
   
  <div class="container" id="view_product">
  	 <div class="row">
  	 	<div class="col-md-5">
  	 		  <section class="container mt-5" id="product_image">
          <img src="img/products/<?php echo $db_image;?>" class="img-fluid">
        </section>  
  	 	</div><!-- end of col-md-4 -->
        <div class="col-md-6">
          <h4 class="text-center text-danger animated slow flash infinite fw-bold">Request quotation</h4>
        	<h1 class="text-center fs-4"><?php echo $db_product_name; ?></h1>
          <p class="fs-6 text-center"> <?php echo $db_discription; ?></p>
          <div id="product_price">
            </div>
           <div class="row">
            <form method="post">
             <input type="hidden" name="employee_id" value="<?php echo $employee_id ?>">
             <input type='hidden' name='product_id' value='<?php echo $product_id?>'>
             <input type='hidden' name='product_name' value='<?php echo $db_product_name ?>'>
              <input type='hidden' name='image' value='<?php echo $db_image?>'>
              <div class="row">
                <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="text" name="full_name"  class="form-control" placeholder="Full Name" style="width: 500px;" required>
                 <label for="floatingInput" class="fs-6 fw-bold">Full Name</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->
              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="number" name="contact"  class="form-control" placeholder="Contact Number" style="width: 500px;" required>
                 <label for="floatingInput" class="fs-6 fw-bold">Contact Number</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->
              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="email" name="email"  class="form-control" placeholder="Email" style="width: 500px;" required>
                 <label for="floatingInput" class="fs-6 fw-bold">Email</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="text" name="address"  class="form-control" placeholder="Address" style="width: 500px;" required>
                 <label for="floatingInput" class="fs-6 fw-bold">Address</label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

              <div class="col-md-12">
                <div class="form-floating mb-3">
                 <input type="text" name="qty"  class="form-control" placeholder="quantity " style="width: 500px;" required>
                 <label for="floatingInput" class="fs-6 fw-bold">Quantity </label>
                </div><!-- end of floating div -->
              </div><!-- end of col-md-4 -->

              <div class="col-md-12">
              <?php   
                    if ($db_color<="") {
                      echo "<input type='hidden' name='color' class='form-control text-uppercase' placeholder='Please Enter color' style='width: 250px;' value='0'>";
                    }else{
                    echo "
                        <div class='col-md-2'>
                        <label>Color</label>
                        </div>
                        <button class='btn btn-light fs-6 text-uppercase'><span> $db_color</span></button>

                        <input type='text' name='color' class='form-control text-uppercase' placeholder='Please Enter color' required style='width: 500px;'>
                      ";
                    }

                   ?>

                 <div class="col-md-12">
               <?php   
                    if ($db_size<="") {
                      echo "<input type='hidden' name='Size' class='form-control text-uppercase' placeholder='Please Enter color' style='width: 500px;' value='0'>";
                    }else{
                    echo "
                        <div class='col-md-4'>
                        <label>Size</label>
                        </div>
                        <button class='btn btn-light fs-6 text-uppercase'><span> $db_size</span></button>

                        <input type='text' name='Size' class='form-control text-uppercase' placeholder='Please Enter Size' required style='width: 500px;'>
                      ";
                    }

                   ?>
              </div><!-- end of col-md-4 -->
              
              <div class="col-md-12 mt-2">
               <div class="row">
                 <div class="col-md-4"></div>
               <div class="col-md-6">
                  <button type="submit" name="request" class="btn btn-danger">Submit</button>
               </div>
               </div>
              </div><!-- end of col-md-12 -->
          
              </div>
            </form>
            

    
     

     </div><!-- end of row -->   
  	 </div><!-- end of row -->
  </div><!-- end of container -->
<br><br><br><br>
  <?php 
  require_once "parts/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>