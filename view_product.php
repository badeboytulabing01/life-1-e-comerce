<?php require_once ("inc/conn.php"); ?>
<?php require_once "parts/employee_controller/product_data.php"; ?>
<?php  require_once("mainClass.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>


<body>
 <!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>
   
  <div class="container" id="view_product">
  <form method="POST" action="login.php">
  	 <div class="row">
  	 	<div class="col-md-5">
  	 		  <section class="container mt-5" id="product_image">
          <img src="img/products/<?php echo $db_image;?>" class="img-fluid">
        </section>  
  	 	</div><!-- end of col-md-4 -->
        <div class="col-md-6">
        	<h1 class="text-center fs-4"><?php echo $db_product_name; ?></h1>
          <p class="fs-6 text-center"> <?php echo $db_discription; ?></p>
          <div id="product_price">
              <h2 class="text-center fs-4 fw-bold">₱<?php echo (number_format($db_price,2)); ?></h2>
            </div>
           <div class="row">
              <div class="col-md-2">
                <label>Shipping</label>
              </div><!-- end of col-md-2 -->

              <div class="col-md-9">
                <label><img src="img/icon/delivery-truck.png" class="img-fluid"> Shipping Discount</label>
                <p>Shipping discount for orders over <?php echo $db_discount; ?>%</p>
                <label>Shipping Fee:  <span>₱<?php echo (number_format($db_shipping_fee,2)); ?></span></label>
              </div><!-- end of col-md-6 -->
             
      
            <div class="col-md-9">
                  <?php   
                    if ($db_color<="") {
                      echo "<input type='hidden' name='color' class='form-control text-uppercase' placeholder='Please Enter color' style='width: 250px;' value='0'>";
                    }else{
                    echo "
                        <div class='col-md-2'>
                        <label>Color</label>
                        </div>
                        <button class='btn btn-light fs-6 text-uppercase'><span> $db_color</span></button>

                        <input type='text' name='color' class='form-control text-uppercase' placeholder='Please Enter color' required style='width: 250px;'>
                      ";
                    }

                   ?>
            </div><!-- end of col-md-2 -->
            
                <div class="col-md-9">
                  <?php   
                    if ($db_size<="") {
                      echo "<input type='hidden' name='Size' class='form-control text-uppercase' placeholder='Please Enter color' style='width: 250px;' value='0'>";
                    }else{
                    echo "
                        <div class='col-md-4'>
                        <label>Size</label>
                        </div>
                        <button class='btn btn-light fs-6 text-uppercase'><span> $db_size</span></button>

                        <input type='text' name='Size' class='form-control text-uppercase' placeholder='Please Enter Size' required style='width: 250px;'>
                      ";
                    }

                   ?>
            </div><!-- end of col-md-2 -->
            

                <?php 
                



                    if ($db_product_stock>=5) {
                    echo "
                    <div class='col-md-12 mt-2 d-flex'>
                      <label class='me-2 mt-2'>Quantity</label>
                       <input type='number'name='qty'  class='form-control text-center me-2 ' data-min='0' placeholder='Input Quantity' required value='1'>
                          <label class='mt-2'>$db_product_stock pieces available</label><br>                      
                    </div>
                        <input type='hidden' name='employee_id' value='$employee_id'>
                        <input type='hidden' name='product_id' value='$product_id'>
                        <input type='hidden' name='product_name' value='$db_product_name'>
                   
              
                        <input type='hidden' name='image' value='$db_image'>
                        <input type='hidden' name='price' value='$db_price'>
                        <input type='hidden' name='discount' value='$db_discount%'>
                        <input type='hidden' name='shipping' value='$db_shipping_fee'>
            
                      <div class='col-md-6 mt-2' id='button_buy'>
                       <input type='hidden' name='status' value='addTocart'>
                        <button class='btn btn-danger' name='addTocart' id='add_tocart'>Add To Cart</button>
                      </div>  

                         <div class='col-md-6 mt-2' id='button_buy'>
                           <button type='submit' name='buy' class='btn btn-info'  style='background-color: #F06013; color: #fff;'>Buy Now</button>
                      </div>
                     






                    ";
                    }else{
                      echo "
                      <div class='col-md-12'>
                         <label class='fs-6'>Out Of Stock</label>
                     </div>
                       <div class='col-md-6 mt-2' id='button_buy'>
                       <input  class='btn btn default' value='Add To Card' disabled>
                      </div>
                      <div class='col-md-6 mt-2' id='button_buy'>
                            <input class='btn btn-info' id='add_tocart' style='background-color: #F06013; color: #fff;' Value='Buy Now' disabled>
                      </div>
                      ";
                    }

                 ?>
     

     </div><!-- end of row -->   
  	 </div><!-- end of row -->
  </form>
  </div><!-- end of container -->
<br><br><br><br>
  <?php 
  require_once "parts/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>