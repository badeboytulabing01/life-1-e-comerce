<?php 	
if (isset($_POST['cancel'])) {
    $buy_id = $_POST['buy_id'];
    $select = "UPDATE tbl_buying SET status = 'cancel' WHERE buy_id  = '$buy_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Successfully cancel your order");';
    echo 'window.location.href = "addTocart.php"';
    echo '</script>';
  }/*end of arcvie product*/




 ?>