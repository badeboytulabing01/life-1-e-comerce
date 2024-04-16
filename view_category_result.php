<?php  require_once("mainClass.php"); ?>
<?php require_once ("inc/conn.php"); ?>
<?php require_once "parts/employee_controller/category_data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>


<body>
 <!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
<?php require_once "parts/home_controller/home_search.php"; ?>
 <!-- caraousel -->
 <!-- sale product  -->

  <?php $view_product = mysqli_query($conn, "SELECT * FROM  tbl_product where status='view_product' and category='$category_id' "); ?>
<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative" id="salesProduct">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
   <?php while ($row = mysqli_fetch_assoc($view_product)):
      $product_id   = $row["product_id"];
       $product_name = $row["product_name"];
      $image   = $row["image"];?>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
       
          <img src="  img/products/<?php echo $image; ?>" class="card-img-top" alt="product.title" />
      
        
        <div class="label-top shadow-sm">
          <a class="text-white" href="#"><!--text --></a>
        </div>
        
          <?php 
             $product_name = $row["product_name"];
             $discription = $row["discription"];
             $price = $row["price"];
             $display_status = $row["display_status"];

             $price_format = (number_format($price,2));
              
             if ($display_status =='none') {
                echo "
                  <div class='card-body'>
                 <div class='clearfix mb-3'>
                    <span class='float-start badge rounded-pill bg-success'>₱$price_format</span>
                    <span class='float-end'><a href='view_product.php?product_id=$product_id' class='small text-muted text-uppercase aff-link'>reviews</a></span>
                  </div>
                    <h5 class='card-title'>
                      <a href='view_product.php?product_id=$product_id' href='#'>$product_name </a>
                    </h5>
                    <div class='clearfix mb-1'>
                         <span class='float-start'><a href='#'><i class='fas fa-question-circle'></i></a></span>
                          <span class='float-end'>
                        
                    </div>
              </div>
                ";
              }else if($display_status =='Customer Allowed to Request Price'){
                echo "
                     <div class='card-body'>
                 <div class='clearfix mb-3'>
                    <span class='float-end'><a href='request_price.php?product_id=$product_id' class='small text-muted text-uppercase aff-link'>reviews</a></span>
                  </div>
                    <h5 class='card-title'>
                      <a href='request_price.php?product_id=$product_id' href='#'>$product_name </a>
                    </h5>
                    <div class='clearfix mb-1'>
                         <span class='float-start'><a href='#'><i class='fas fa-question-circle'></i></a></span>
                          <span class='float-end'>
                        
                    </div>
              </div>
                ";

              } 
           ?>
         </form>
      </div>
    </div>
  <?php endwhile; ?>
    
  </div>
</div>
  



  <?php require_once "parts/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</html>