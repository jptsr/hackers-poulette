<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    
    require '../../vendor/autoload.php';
    require '../../src/.hidden/pwd.php';

    session_start();

    $sender_name = $_SESSION['lastname'] . ' ' .  $_SESSION['firstname'];
    $all_msg = $sender_name . '<br>' . $_SESSION['gender'] . '<br>' .  $_SESSION['email'] . '<br>' . $_SESSION['subject'] . '<br>' . $_SESSION['msg'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.dvlpt22@gmail.com';
        $mail->Password = $pwd;
        $mail->Port = 587;
    
        //Recipients
        $mail->setFrom($_SESSION['email'], $sender_name);
        $mail->addAddress('test.dvlpt22@gmail.com', 'Support');
    
        //Content
        $mail->isHTML(true);
        $mail->Subject = $_SESSION['subject'];
        $mail->Body = $all_msg;
        $mail->AltBody = $all_msg;
    
        $mail->send();

        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>