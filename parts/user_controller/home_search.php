<?php

$search = $searchErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["search"])) {
    $searchErr = "Required";
  }else{
    $search = $_POST["search"];
  }

  if ($search) {
    echo "<script>window.location.href='search_result.php?search=$search';</script>";
  }

}

?>
<section class="mt-2" id="searc_back">
    <div class="container" id="search_bar">
        <div class="row">
           <div class="col-sm-2" id="logo">
            <img src="../img/logo.png" class="img-fluid" alt="life logo">
           </div><!-- end of col-sm 4- -->

           <div class="col-sm-8 mt-3" id="search_input">
            <form  method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
              <label class="d-flex">

              <input type="search" class="form-control" name="search" placeholder="Search in Life 1" alue="<?php echo $search; ?>">

              <button type="submit" class="btn me-3"><i class="fa fa-search fs-3 mt-1"></i></button> <i class="fa fa-shopping-cart fs-4 mt-4"></i></label>
            </form>
           </div><!-- end of col-sm 4- -->


        </div><!-- end of row -->
     </div><!-- end of container -->
 </section>