<?php
session_start();
include_once 'mysqli/functions.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require 'mysqli/vendor/vendor/autoload.php';
$from = "vshaurya30@gmail.com";
//$pqr = $_SESSION['emailid']; //emailid = sarjanpatel0908@gmail.com, meetprajapati20@gnu.ac.in
//$email = explode(", ", $pqr);
$to= "sarjanpatel0908@gmail.com";
$subject = "hello!!";
$cc = "";
$body ="hello";
if (function_exists('sendmail') === false) {
    function sendmail($from, $to, $cc, $subject, $body, $debug = false)
    {
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'vshaurya30@gmail.com'; //SMTP username
        $mail->Password = 'Xilent07#'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->SetFrom($from);
        $mail->AddAddress($to);
        $mail->Subject = $subject;
        $mail->IsHTML(true);
        $mail->Body = $body;
        if ($cc != "") {$mail->AddCC($cc);}
        if (!$mail->Send() && $debug) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            return 1;
        }
    }
}

    if (sendmail($from, $to, $cc, $subject, $body) == 1) {
        echo "email send";
    } else {
        echo "email failed";
    }
