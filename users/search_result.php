<?php  require_once("../parts/users_parts/user_session.php"); ?>
<?php  require_once("../mainClass.php"); ?>
<?php require_once ("../inc/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "../parts/users_parts/user_head.php"; ?>

<body>
<!-- navigation -->
 <?php require_once "../parts/user_controller/home_nav.php"; ?>
 <!-- search bar -->
 <?php require_once "../parts/user_controller/home_search.php"; ?>

<section class=" pt-2 pb-5 shadow-sm" id="product_list">
<div class="container-fluid">

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
      $product_name = $row["product_name"];
      $discription = $row["discription"];
      $price = $row["price"];
      $status = $row["status"];
      $product_id  = $row["product_id"];
      $price_format = (number_format($price,2));

      echo "
      <div class='row'>
            <div class='col-sm-3'>
             <a href='view_product.php?product_id=$product_id'style='text-decoration:none; color:black;'>
            <div class='card' style='width: 18rem;'>
              <img src='../img/products/$image' class='card-img-top img-fluid'>
               <div class='card-body'>
                  <p class='card-text fs-5 fw-bold'> $product_name</p>
                  <p class='card-text'> $discription</p>
                  <label class='text-danger fw-bold fs-5'>₱$price_format <label>
               </div>
             </div>
             </a>
             </div> 
        </div>  ";
      
    }


  }else{
    echo "<div class='col-md-12 text-center'>
                <img src='../img/icon/search.png' class='img-fluid' style='width:80px;'>
                <p><span class='fs-4'>No results found</span>
                <br><label class='text-dark fs-5'>Try different or more general keywords</label>
                <p>
                
            </div>";
  }


}

?>

  </div><!-- end of of container -->
           </section>



  <?php 
  require_once "../parts/user_controller/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "../parts/users_parts/user_js.php" ?>
  <!-- end of js -->
</body>
</html>