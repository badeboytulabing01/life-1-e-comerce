
<?php

if (isset($_POST['delete_category'])) {
    $category_id = $_POST['category_id'];
    $select = "UPDATE tbl_category SET status = 'delete_category' WHERE category_id  = '$category_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Successfully Category Delete");';
    echo 'window.location.href = "category.php"';
    echo '</script>';
  }/*end of arcvie category*/


  if (isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];
    $select = "UPDATE  tbl_product SET status = 'delete_product' WHERE product_id  = '$product_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Successfully Product Delete");';
    echo 'window.location.href = "product.php"';
    echo '</script>';
    /*end of archive category*/

}

    if (isset($_POST['toship'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'toship' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "customer_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}

 if (isset($_POST['toreceive'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'toreceive' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "customer_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}

if (isset($_POST['complete'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'complete' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "customer_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}


 ?>