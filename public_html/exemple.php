<?php
if(!empty($_POST))
{
date_default_timezone_set('Etc/UTC');

require 'PHPMailer-master/PHPMailerAutoload.php';
$mail->charSet = "UTF-8";
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 2;
//Ask for HTML-friendly debug output
//$mail->Debugoutput = 'html';
//Set the hostname of the mail server

$mail->Host = 'in.mailjet.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '*';                            // SMTP username
$mail->Password = '*';                           // SMTP password
$mail->SMTPSecure = 'tls';                           // Enable encryption, 'ssl' also accepted


$mail->From = 'contact@vestalicom.com';

$mail->FromName = 'Sébastien Coenon';

$mail->addAddress('sebastien.coenon@gmail.com', addslashes($_POST['nom']));  // Add a recipient

$mail->addAddress('marina.coenon@gmail.com');               // Name is optional

$mail->addReplyTo(addslashes($_POST['email']), 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;     
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject='[Contact Photobooth 77] par '.addslashes($_POST['nom']).''; 
$mail->Body='<html><body><head></head>
<center><table>
   <tr>
     <td class="entete"><img src="http://www.photobooth-77.fr/images/logo-photobooth-web.png" width="300"></td>
   </tr>
   <tr><td class="entete" height="200">
       Bonjour,<br><br>
Veuillez trouver ci-dessous le message reçu. <br />
<br />
<strong>Information du contact:</strong><br />
Email : '.addslashes($_POST['email']).'<br />
Nom : '.addslashes($_POST['nom']).'<br />
TEL : '.addslashes($_POST['tel']).'<br /><br />


Message : '.addslashes($_POST['message']).'
<br />
<br />
   </td>
   </tr>

<tr><td align="right" class="ligne"><a href="http://www.photobooth-77.fr">Location photobooth 77</a></td></tr></table></center></body></html>'; 
$mail->AltBody = '';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}
else {
echo '<p class="alert alert-success">Votre message à bien été envoyé nous vous répondrons dans les plus bref délais</p>';	
}
}
?>