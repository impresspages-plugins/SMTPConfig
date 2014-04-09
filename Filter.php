<?php

namespace Plugin\SMTPConfig;


class Filter
{
    public static function ipSendEmailPHPMailerObject(\PHPMailer $mail)
    {
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = "smtp.gmail.com"; // SMTP server
        //$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->Port = 465; // set the SMTP port for the GMAIL server
        $mail->Username = "yourname@gmail.com"; // SMTP account username
        $mail->Password = "yourpassword";
        $mail->SMTPSecure = 'ssl';
        return $mail;
    }
}
