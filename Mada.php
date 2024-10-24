<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer-master\src\Exception.php;';
require_once 'PHPMailer-master\src\PHPMailer.php';
require_once 'SMTP.php';

if(isset($_POST["send"])){
    $mail= new PHPMailer(true);
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username ='ronaldntila211@gmail.com';
    $mail->Password ='cewqusevnkdakong';// Your gmail app password// 
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('ronaldntila211@gmail.com');

    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();

    echo
    "
    <script>
alert('Sent Successfully');
document.location.href ='Email.php'

    </script>
    
    ";

    
}

?>