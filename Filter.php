<?php

namespace Plugin\SMTPConfig;


class Filter
{
    public static function ipSendEmailPHPMailerObject(\PHPMailer $mail)
    {
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = ipGetOption('SMTPConfig.server', 'smtp.gmail.com'); // SMTP server
        //$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
        $mail->SMTPAuth = ipGetOption('SMTPConfig.smtpAuth', true); // enable SMTP authentication
        $mail->Port = ipGetOption('SMTPConfig.port', 465); // set the SMTP port for the GMAIL server
        $mail->Username = ipGetOption('SMTPConfig.username'); // SMTP account username
        $mail->Password = ipGetOption('SMTPConfig.password');
        $mail->SMTPSecure = strtolower(ipGetOption('SMTPConfig.secure', 'ssl'));
        return $mail;
    }
}
