<?php    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (!isset($_POSt['hide'])) {  
if(isset($_POST['btnUpdate'])){
    
    // use filter sanitize string to prevent malicous
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);

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
    $mail->Username = 'webdesigner0127@gmail.com';          // SMTP username
    $mail->Password = 'badeboytulabing@27';                         // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email,);
    $mail->setFrom('badeboytulabing0127@gmail.com', 'TEAM3NITY EMAIL FORWARDER');
    // $mail->addAddress('team3nity07@gmail.com', 'TEAM3NITY EMAIL FORWARDER');     // Add a recipient
    $mail->addAddress('badeboytulabing0127@gmail.com');
    // $mail->addAddress('sendcompany07@gmail.com');
    // $mail->addAddress('team3nity07@gmail.com');
                   // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message from: ' . $email;
    $mail->Body    = '<hr><h4>Email: ' . $email . '</h4><hr> <h4>Contact Number: ' . $contact . '</h4><hr> <p id="sendpara"><strong>Message:<br>' . $message . '</strong></p>';

    $mail->send();
    // echo 'Message has been sent';
    $test = md5(rand(1,9));
    $success = md5(rand(1,9));
    header('location: index.php?success=' . $success . '&v_1=' . $test);
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}}
else {
    echo "Message Not Sent";
}
}
?>