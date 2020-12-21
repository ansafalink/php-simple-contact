<?php 

set_time_limit(500); // 
//includes required phpmailerfile
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';

//define name spaces
	use PHPMailer \PHPMailer \PHPMailer;
	use PHPMailer \PHPMailer \SMTP;
	use PHPMailer \PHPMailer \Exception;
//create instance of phpmailer
	$mail = new PHPMailer();
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output

//set mailer to use smtp
	$mail->isSMTP();
//define smtphost
	$mail->Host = "mail.acart.in";
//enable smtp authentication
	$mail->SMTPAuth = "true";
//set type of encription(ssl/tls)
	$mail->SMTPSecure = "ssl";
//set port to connect smtp
	$mail->Port = "465";
//set gmail username 
	$mail->Username ="support@your.in";
//set gmail password
	$mail->Password = "";
//set gmail subject
	$mail->Subject = $_POST['subject'].' - acart';
//set sender email
	$mail->setFrom("support@your.in");
	$mail->addReplyTo($_POST['email']);
//email body
	$mail->Body ='name:'. $_POST['name'] . " \n ". "Message:" . $_POST['message'];
//add recipient
	$mail->addAddress('your@gmail.com');
//finaly send email
	
	// if ($mail->Send()) {
	// 	echo "Email Sent.....";
	// }else{
	// 	echo "Error.....";
	// };
	header('Location: thanks.php');
//closing smtp connection
	$mail->smtpClose();


 // host = "smtp.mailtrap.io"
 //  port = 2525
 //  ssl = no
 //  tls = yes
 //  user = "8cfe9ec0912f6d"
 //  password = "7be2ef35fb184e"


 