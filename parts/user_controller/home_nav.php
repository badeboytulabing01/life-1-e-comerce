<nav class="navbar navbar-expand-lg px-0 py-3">
  <div class="container-xl">
    <!-- Logo -->
    <a class="navbar-brand text-light" href="personal_info.php">
     <img src="../img/profile/<?= $userdeatails['image'];?>" class="img-fluid rounded-circle" width="50">
      <?= $userdeatails['Lastname'];?> <?= $userdeatails['firstname'];?>
      <?php $customer_id = $userdeatails['user_id']; ?>
    </a>
    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <img src="../img/icon/menu.png" class="img-fluid" width="50">
    </button>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <!-- Nav -->
      <div class="navbar-nav mx-lg-auto fw-bold">
        <a class="nav-item nav-link active" href="dashboard.php" aria-current="page">HOME</a>
        <a class="nav-item nav-link" href="all_category.php">ALL CATEGORY</a>
        <a class="nav-item nav-link" href="help.php">HELP</a>
        <a class="nav-item nav-link" href="#"></a>
      </div>
      <!-- Right navigation -->

      <div class="navbar-nav ms-lg-4 fw-bold d-flex">
       <div class="dropdown d-flex">
       
        <?php $sql = "SELECT * FROM tbl_buying WHERE status='addTocart' and user_id='$customer_id' ORDER BY buy_id DESC";
        $res = mysqli_query($conn, $sql); ?>
        <a href="addTocart.php" class="nav-item nav-link"><i class="fa fa-shopping-cart fs-4"></i><span class="count"><?php echo mysqli_num_rows($res); ?></span>
        </a>
        
        <a class="nav-item nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
         My Account

        </a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item text-dark" href="personal_info.php">Personal Information</a></li>
          <li><a class="dropdown-item text-dark" href="my_purchase.php">My Purchase</a></li>
          <li><a class="dropdown-item text-dark" href="logout.php">Logout</a></li>
        </ul>
        </div><!-- end of dropdown -->
      </div>
      <!-- Action -->
      
    </div>
  </div><!-- end of container -->
</nav><!-- end of nav -->