
<?php

if (isset($_POST['cancel'])) {
    $buy_id = $_POST['buy_id'];
    $select = "UPDATE tbl_buying SET status = 'cancel' WHERE buy_id  = '$buy_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Successfully cancel your order");';
    echo 'window.location.href = "buy_now.php"';
    echo '</script>';
  }/*end of arcvie product*/



 if (isset($_POST['complete'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE tbl_buying SET status = 'complete' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'alert("Your order Successfully Receive");';
    echo 'window.location.href = "to_receive.php"';
    echo '</script>';
  }/*end of arcvie product*/



 ?>