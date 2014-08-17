<?php

namespace Plugin\SMTPConfig;


class Filter
{
    public static function ipSendEmailPHPMailerObject(\PHPMailer $mail)
    {
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = ipGetOption('SMTConfig.server', 'smtp.gmail.com'); // SMTP server
        //$mail->SMTPDebug = 2; // enables SMTP debug information (for testing)
        $mail->SMTPAuth = ipGetOption('SMTConfig.smtpAuth', true); // enable SMTP authentication
        $mail->Port = ipGetOption('SMTConfig.port', 465); // set the SMTP port for the GMAIL server
        $mail->Username = ipGetOption('SMTConfig.username'); // SMTP account username
        $mail->Password = ipGetOption('SMTConfig.password');
        $mail->SMTPSecure = strtolower(ipGetOption('SMTConfig.secure', 'ssl'));
        return $mail;
    }
}
