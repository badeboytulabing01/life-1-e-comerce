
<?php

    if (isset($_POST['toship'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'toship' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "complete_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}

 if (isset($_POST['toreceive'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'toreceive' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "complete_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}

if (isset($_POST['complete'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_buying SET status = 'complete' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "complete_order.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}


 ?>