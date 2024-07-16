<?php
session_start();
// var_dump($_SESSION['khach_hang']);
include "../global.php";
$email = $taikhoan['email'];
include('src/PHPMailer.php');
include('src/Exception.php');
include('src/OAuth.php');
include('src/POP3.php');
include('src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'perfumeshopdak@gmail.com';                 // SMTP username
    $mail->Password = 'phfazkrtzwzktbkv';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('perfumeshopdak@gmail.com', 'Shop Perfume');
    $mail->addAddress($email, 'Datdzs1tg');     // Add a recipient
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'PERFUME SHOP XIN CAM ON QUY KHACH';
    $mail->Body = 'Chúng tôi trân trọng cảm ơn bạn đã lựa chọn mua sắm tại cửa hàng "Perfume Shop". Sự ủng hộ của bạn là nguồn động viên lớn, và chúng tôi hy vọng bạn sẽ thấy hài lòng với sản phẩm của mình. Hãy liên hệ nếu có bất kỳ điều gì chúng tôi có thể hỗ trợ.';
    // $mail->AltBody = 'Trân trọng,"Perfume Shop"';

    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
