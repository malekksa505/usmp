<?php 

ini_set('SMTP', "localhost");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

if(isset($_POST['send-email'])) {
    $user = $_POST['fname'];
    $mail = $_POST['fmail'];
    $subject = $_POST['subject'];
    if(empty($user) || empty($mail) || empty($subject)) {
        header('location:contact.php?invalid');
    }else {
        $emailReceiver = "malekksa505@gmail.com";
        if(mail($emailReceiver,$user,$subject)) {
            header('location:contact.php?done');
        }
    }
    
}else {
    header('location:contact.php');
}





?>