<?php
include("inc/conn.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function random_password($length = 5){
	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ01234567890";
	$shuffled = substr(str_shuffle($str), 0, $length);
	return $shuffled;
}

$password = random_password(8);

// if(isset($_POST['btnUpdate'])){
$user_id = $_POST["user_id"];

$new_email = $_POST["new_email"];

$new_pass = $password;

// use filter sanitize string to prevent malicous
$new_email = filter_var($_POST['new_email'], FILTER_SANITIZE_STRING);
$new_pass = filter_var($_POST['new_pass'], FILTER_SANITIZE_STRING);

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'badeboy.tulabing@cvsu.edu.ph';          // SMTP username
    $mail->Password = 'badeboy0127';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($new_email);
    $mail->setFrom('webdesigner0127@gmail.com', 'TEAM3NITY EMAIL FORWARDER');
    // $mail->addAddress('team3nity07@gmail.com', 'TEAM3NITY EMAIL FORWARDER');     // Add a recipient
    $mail->addAddress($new_email);
    // $mail->addAddress('sendcompany07@gmail.com');
    // $mail->addAddress('team3nity07@gmail.com');
                   // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
   mysqli_query($conn, "UPDATE tbl_users SET email='$new_email', password='$password' WHERE user_id='$user_id'");

	echo "<script language='javascript'>alert('Password Change!!. Please go to your email ($new_email) account then you can view your new password..')</script>";
	echo "<script>window.location.href='index.php';</script>";   

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Password Changed: ' . $new_email;
    $mail->Body    = '<hr><h4>Email: ' . $new_email . '</h4><hr> <h4>Your password is: ' . $password . '</h4><hr> <p id="sendpara"><strong>Message:<br> <hr>Your password is verified and already changed here is your new password in your account '. $password . ' just log in your account together with your new password</strong></p>';

    $mail->send();
    // echo 'Message has been sent';
    // $test = md5(rand(1,9));
    // $success = md5(rand(1,9));
    // header('location: index.php?success=' . $success . '&v_1=' . $test);
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}//}
// else {
//     echo "Message Not Sent";
// }
?>