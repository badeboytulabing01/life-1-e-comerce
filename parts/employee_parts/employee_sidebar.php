<div class="container-fluid" >
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" id="sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-3 d-none d-sm-inline text-danger fw-bold">Life 1 </span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="mt-2">
                        <a href="dashboard.php" class="nav-link d-flex px-0 align-middle">
                           <img src="../img/icon/dashboard.png"> <span class="ms-1 d-none d-sm-inline mt-1">Dashboard</span></a>
                    </li>
                     
                          <li class="mt-2">
                        <a href="category.php" class="nav-link px-0 align-middle">
                            <img src="../img/icon/category.png"><span class="ms-1 d-none d-sm-inline mt-1">Category</span></a>
                    </li>

                    <li class="mt-2">
                        <a href="inventory.php" class="nav-link px-0 align-middle">
                           <img src="../img/icon/inventory.png" class="img-fluid"> <span class="ms-1 d-none d-sm-inline">Inventory</span></a>
                    </li>

                    <li class="mt-2">
                        <a href="customer_order.php" class="nav-link px-0 align-middle">
                           <img src="../img/icon/order.png" class="img-fluid"> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                    </li>

                      <li class="mt-2">
                        <a href="customer_request.php" class="nav-link px-0 align-middle">
                           <img src="../img/icon/request.png" class="img-fluid"> <span class="ms-1 d-none d-sm-inline">Customer Request</span></a>
                    </li>
                 
                   <li class="mt-2">
                        <a href="product.php" class="nav-link px-0 align-middle">
                            <img src="../img/icon/product.png" class="img-fluid"></i> <span class="ms-1 d-none d-sm-inline">Product's</span> </a>
                    </li>

                 

                    <li class="mt-2">
                        <a href="#" class="nav-link px-0 align-middle">
                            <img src="../img/icon/order.png" class="img-fluid">  <span class="ms-1 d-none d-sm-inline">Report</span> </a>
                    </li>

                </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php 
                          $img =  $userdeatails['image'];
                          $imgstatus =  $userdeatails['image_status'];

                          if ($imgstatus >=1) {
                            echo " <img src='../img/employee/$img' width='30' height='30' class='rounded-circle'>";
                              
                          }else if($imgstatus <=0){
                           echo " <img src='../img/icon/user.png' width='30' height='30' class='rounded-circle'>";
                          }
                         ?>
                        <span class="d-none d-sm-inline mx-1 text-dark"><?= $userdeatails['Lastname'];?>
                         <?= $userdeatails['firstname'];?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="personal_info">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        