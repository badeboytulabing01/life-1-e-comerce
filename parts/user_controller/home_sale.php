<?php require_once("../inc/conn.php");?>
<div class="container" id="category_product">
<?php $view_category = mysqli_query($conn, "SELECT * FROM  tbl_category where status='view' LIMIT 20"); ?>
  
    <div class="row mt-2 g-4">
    <?php while ($row = mysqli_fetch_assoc($view_category)):
         $category_id    = $row["category_id"];
         $image    = $row["image"];
         $category_name = $row["category_name"];?>
        <div class="col-md-3">
           <?php 
              echo
              "
               <div class='card p-1'>
                <a href='view_category_result.php?category_id=$category_id'style='text-decoration:none; color:black;'>
                     <div class='d-flex justify-content-between align-items-center p-2'>
                        <div class='flex-column lh-1 imagename'> <span>$category_name</span> </div>
                        <div> <img src='../img/category/$image' height='100' width='100' /> </div>
                     </div>
                    </a> 
               </div> 
                   
              ";
            ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<!-- end of catgeroy -->


<?php $view_product = mysqli_query($conn, "SELECT * FROM  tbl_product where status='view_product' LIMIT 20"); ?>
<div class="container bg-trasparent my-4 p-3" style="position: relative" id="salesProduct">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
   <?php while ($row = mysqli_fetch_assoc($view_product)):
      $product_id   = $row["product_id"];
       $product_name = $row["product_name"];
      $image   = $row["image"];?>
    <div class="col hp">
      <div class="card h-100 shadow-sm">
          <img src="../img/products/<?php echo $image; ?>" class="card-img-top" alt="product.title" />
        <div class="label-top shadow-sm">
          <a class="text-white" href="#"><!--text --></a>
        </div>
        <form action="home_sale.php" method="POST">
          <?php 
             $product_name = $row["product_name"];
             $discription = $row["discription"];
             $price = $row["price"];
             $price_format = (number_format($price,2));
             echo 
              "
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
           ?>
         </form>
      </div>
    </div>
  <?php endwhile; ?>
    
  </div>
</div>
