
<?php


if (isset($_POST['complete'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_request SET status = 'complete' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "customer_request.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}


if (isset($_POST['pending'])) {
    $user_id = $_POST['user_id'];
    $select = "UPDATE  tbl_request SET status = 'pending' WHERE user_id  = '$user_id'";
    $result = mysqli_query($conn, $select);

    echo '<script = "text/javascript">';
    echo 'window.location.href = "customer_request_complete.php"';
    echo '</script>';
    /*end of archive to customer oder*/
}


 ?>