<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $transaction = $_POST['transaction'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $vaccine = $_POST['vaccine'];
  $date = $_POST['date'];


  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bennydavesamuyag32@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'xssabkvkjbchxtky'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('bennydavesamuyag32@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('bennydavesamuyag32@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Veterinary Clinic)';
	$mail->Body = "<h3>Transaction ID : $transaction <br>Name : $name <br>Email: $email <br>Contact: $contact <br>Address: $address  <br>Vaccine: $vaccine    <br>Date and Time: $date </h3>";
    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>




