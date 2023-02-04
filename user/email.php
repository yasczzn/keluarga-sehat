<?php 

    include '../function/connection.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "../assets/phpmailer/src/PHPMailer.php";
    require "../assets/phpmailer/src/Exception.php";
    require "../assets/phpmailer/src/SMTP.php";
    require '../assets/vendor/autoload.php';

    if (isset($_POST['Submit'])) {
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Mailer = "smtp";
            $mail->Port = 587;
            $mail->Username = "putriyasminarahmaz@gmail.com";
            $mail->Password = "cwxwxcphuotcexsh";

            $mail->setFrom("putriyasminarahmaz@gmail.com", "Keluarga Sehat");
            $mail->addAddress("putriyasminarahmaz@gmail.com");
            $mail->addReplyTo($_POST['email']);

            $mail->isHTML(true);
            $mail->Subject = "Payment va for Vaccination Appointment Keluarga Sehat";
            $mail->msgHTML("<b>Hello " . $_POST['name'] . " Thank you for trust and using our services at Keluarga Sehat!.</b><br>
                                <h3>Please continue your payment by send Rp" . $_POST['price'] . " to 081234567890 via " . $_POST['payment'] . ". We will send you 
                                the vaccination schedule and the queue number after the transaction is complete.</h3>");

            $mail->send();   
            
            echo "<script>alert('Email send!')</script>";

            header("Location: regist-3.php");

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        $mail->smtpClose(); 
    }
        
?>