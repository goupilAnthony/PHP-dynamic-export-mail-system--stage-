<?php 
error_reporting(E_ALL);
            ini_set('display_errors','1');

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPmailer();
$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP 
$mail->Host = 'in-v3.mailjet.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = '098c89479e6051a4207c61708b0b6939'; // Votre adresse email d'envoi
$mail->Password = '83a972a2a5bc6d62442f795fb6456287'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = 'tsl'; 
$mail->Port = 25;

$mail->setFrom('anthony.93460@gmail.com', 'Mailer'); // Personnaliser l'envoyeur
$mail->addAddress('anthony.93460@gmail.com', 'User'); // Ajouter le destinataire

$mail->Subject = 'Jingles commande';

$mailBody = '';
			
if(isset($_POST['jingle'])){
	foreach($_POST['jingle'] as $text){
			$mailBody= $mailBody."        ".$text;
		}
}else{echo'test';}
$mail->Body = $mailBody;

if(!$mail->send()) {
   echo 'Erreur, message non envoyé.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo 'Votre commande a bien été envoyé !';
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans nom</title>
</head>

<body>
</body>
</html>
