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
 <!-- caraousel -->
 <!-- sale product  -->

<div class="container" id="category_product">
<?php $view_category = mysqli_query($conn, "SELECT * FROM  tbl_category where status='view'"); ?>
  <div class="d-flex justify-content-center align-items-center mt-5"> <button class="btn btn-dark">OUR CATEGORIES</button> </div>
    <div class="d-flex justify-content-center mt-3"> <span class="text text-center">Finding Best Products Now</span> </div>
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
                        <div> <img src='img/category/$image' height='100' width='100' /> </div>
                     </div>
                    </a> 
               </div> 
                   
              ";
            ?>
        </div>
        <?php endwhile; ?>
    </div>
</div>



<br><br><br><br>


  <?php require_once "parts/footer.php"; ?>
  <!-- end of footer -->  
 <?php require_once "parts/js.php" ?>
  <!-- end of js -->
</html>