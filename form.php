<?php
include("connection.php");
if(isset($_POST['submit'])){
$firstname = mysqli_escape_string($db,$_POST['firstname']);
$lastname = mysqli_escape_string($db,$_POST['lastname']);
$bankacc = mysqli_escape_string($db,$_POST['bankacc']);
$bank = mysqli_escape_string($db,$_POST['bank']);
$country = mysqli_escape_string($db,$_POST['country']);
$bitcoin = mysqli_escape_string($db,$_POST['bitcoin']);
$email = mysqli_escape_string($db,$_POST['email']);
$phone = mysqli_escape_string($db,$_POST['phone']);
$file = $_FILES['file']['name'];
$target = "users/";
move_uploaded_file($_FILES['file']['tmp_name'],$target.$file);

require'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->isSMTP();//disable when we go live
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure = 'tls';
$mail->Username='westernbitcoins@gmail.com';
$mail->Password='Walexwale33';

$mail->setFrom('westernbitcoins@gmail.com','Western');//who we are sending it to and name of the person(optional);
$mail->addAddress($_POST['email']);//email id
$mail->addCC('westernbitcoins@gmail.com');
$mail->addReplyto('westernbitcoins@gmail.com');//reply to me

$mail->isHTML(true);
$mail->Subject='western bitcoins';
$mail->Body='<h1 align=center>Thank you for your order with Western BTC after the review of your bitcoin transfer<br>we will pay the equivalent amount to the account submitted<br> Thank you </h1>';

$mail->send();

$insert = mysqli_query($db,("INSERT INTO users (firstname,lastname,bank_account
                                                 ,bank_name,country,amount_of_bitcoin_sent,email_address,
												 phone_no,image)VALUES('$firstname','$lastname',
												 '$bankacc','$bank','$country',
												 '$bitcoin','$email','$phone','$file')"))or die(mysqli_error($db));
												 

	header("Location:comments.php?submission_successful");
	
	
}
?>