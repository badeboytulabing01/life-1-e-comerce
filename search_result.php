<?php  require_once("mainClass.php"); ?>
<?php require_once ("inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "parts/head.php"; ?>

<body>
 <!-- navigation -->
 <?php require_once "parts/home_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "parts/home_controller/home_search.php"; ?>
<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative" id="salesProduct">
  <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
<?php
if (empty($_GET["search"])) {
  echo "No Records";
}else{

  $check = $_GET["search"];

  $terms = explode(" ", $check);
  $q = "SELECT * FROM tbl_product WHERE ";
  $i = 0;


  foreach ($terms as $each) {
      
    $i++;

    if ($i == 1) {
      $q .= "product_name LIKE '%$each%' ";

    }
    else{
      $q .= "OR product_name LIKE '%$each%' ";
    }
  }

  $query = mysqli_query($conn, $q);
  $c_q = mysqli_num_rows($query);

  if ($c_q > 0 && $q != "") {
    
    while ($row = mysqli_fetch_assoc($query)) {
      $image   = $row["image"];
      $product_id   = $row["product_id"];

      $product_name = $row["product_name"];
      $discription = $row["discription"];
      $price = $row["price"];
      $display_status = $row["display_status"];
      $status = $row["status"];
      $price_format = (number_format($price,2));
     echo"
      <div class='col hp'>
      <div class='card h-100 shadow-sm'>
         <img src=' img/products/$image' class='card-img-top img-fluid'>
        <div class='label-top shadow-sm'>
          <a class='text-white' href=''></a>
        </div>
        <form action='home_sale.php' method='POST'>
         " ;     
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
         echo"
         </form>
        </div>
    </div>
    ";
      
    }


  }else{
    echo "<div class='col-md-12 text-center'>
                <img src='img/icon/search.png' class='img-fluid' style='width:80px;'>
                <p><span class='fs-4'>No results found</span>
                <br><label class='text-light fs-5'>Try different or more general keywords</label>
                <p>
                
            </div>";
  }


}

?>

</div>
</div>

 <?php 
  require_once "parts/footer.php"; ?>
  <!-- end of footer -->	
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</body>
</html>