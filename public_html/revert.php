<?php
include('conn.php');
//session_save_path('./tmp');
//session_start();

//following line is for new latest swiftmailer version 6.1.3
require_once("composedlib/vendor/autoload.php");
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\RFCValidation;
if(isset($_POST["submit"])){
	$message1=$_POST['message'];
	$sub=$_POST['subject'];
	$email=$_POST['email'];
	
}
$addresses= $email;
$finalmsg = "<br><h3> BMCC Astitva</h3> <i><b><br>".$message1."</b></i></u><br>";
$transport = (new Swift_SmtpTransport('ssl://smtp.gmail.com', 465))
  ->setUsername('conference@bmcc.ac.in')
  ->setPassword('pass3@123')
;
$mailer = new Swift_Mailer($transport);
$message = (new Swift_Message($message1))
 ->setFrom(['mnwadekar14@gmail.com'=>'BMCC Astitva'])
 ->setTo($addresses)
 ->setReplyTo(['mnwadekar14@gmail.com'=>'BMCC Astitva'])
 ->setBody($finalmsg, 'text/html')
 ->setSubject($sub)
 ->attach(Swift_Attachment::fromPath($_FILES['upload']['tmp_name'])->setFilename($_FILES['upload']['name']));
;
$result = $mailer->send($message);

echo "<script>alert('Email sent successfully !');window.location.href='admin.php';</script>";

?>



