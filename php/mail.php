<?php
// Include Composer autoloader
require 'vendor/autoload.php';

// Now you can use PHPMailer classes
// For example:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])) {
    $bidder_name = $_POST['bidder_name'];
    $bidder_email = $_POST['bidder_email'];
    $offer = $_POST['offer'];

// Your PHPMailer code goes here
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

// Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'mail.matagram.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tester@matagram.com';
        $mail->Password = '000000';
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // Port number may vary depending on your SMTP provider

        // Sender and recipient details
        $mail->setFrom('tester@matagram.com', 'Imo Gov Domians Sales');
        $mail->addAddress('tester@matagram.com', 'Imo Gov Domians Sales');

        // Email content
        $mail->isHTML(false); // Set email format to HTML
        $mail->Subject = 'New Bidding';
        $mail->Body = 'user email is '.$bidder_email.' and user name is '.$bidder_name.' and offer is '.$offer;

        // Send email
        $mail->send();
//        echo 'Email sent successfully!';
        header('Location: index.php?msg=email_sent_successfully!');
    } catch (Exception $e) {
        echo 'Error: ' . $mail->ErrorInfo;
    }

}