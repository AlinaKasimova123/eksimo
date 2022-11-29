<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $max_work_time_in_second = 60;
    $start_time = time();
    require __DIR__.'/phpmailer/src/Exception.php';
    require __DIR__.'/phpmailer/src/PHPMailer.php';
    require __DIR__.'/phpmailer/src/SMTP.php';

    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.yandex.ru';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->CharSet = 'UTF-8';
        $mail->setWordWrap();
        $mail->Username = 'kar@copycon.ru';                     //SMTP username
        $mail->Password = 'zbdwxrpnvfxxgfpn';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->setFrom('kar@copycon.ru', 'kar@copycon.ru');
        $mail->addAddress('kar@copycon.ru', 'User');     //Add a recipient
        $mail->addReplyTo('kar@copycon.ru', 'Information');
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Новое письмо';
        $body = '<p>Имя: ' . $name . '.</p> <p>Email: ' . $email. '.</p> <p>Номер телефона:  '. $number. '</p>';

        $mail->Body = $body;
        $mail->send();
        $mail->ClearAllRecipients();
        header('Location: https://эксимо.рф');
    } catch (Exception $e) {

    }
} catch(PDOException $e) {

}

