<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require "../assets/phpmailer/src/PHPMailer.php";
    require "../assets/phpmailer/src/Exception.php";
    require "../assets/phpmailer/src/SMTP.php";

    $mail = new PHPMailer(true);

    if (isset($_POST['Submit'])) {
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'putriyasminarahmaz@gmail.com';
            $mail->Password = 'cwxwxcphuotcexsh';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('putriyasminarahmaz@gmail.com', 'Keluarga Sehat');
            $mail->addAddress($_POST["email"]);
            $mail->addCC('keluarga-sehat-production.up.railway.app');

            $mail->isHTML(true);
            $mail->Subject = "Payment va for Vaccination Appointment Keluarga Sehat";
            $mail->Body = "<b>Hello " . $_POST["name"] . " Thank you for trust and using our services at Keluarga Sehat!.</b><br>
                                <h3>Please continue your payment by send Rp" . $_POST["price"] . " to 081234567890 via " . $_POST["payment"] . ". We will send you 
                                the vaccination schedule and the queue number after the transaction is complete.</h3>";

            $mail->send();   
            
            echo "<script>alert('Email send!')</script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
        
?>