<?php
// Load Composer's autoloader
require  '../..vendor/autoload.php';

$variable1 = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$variable2 = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$variable3 = (isset($_GET["variable3"])) ? $_GET["variable3"] : NULL;

$nomRecu = $variable1;
$mailRecu = $variable2;
$messageRecu = $variable3;


/*header("Content-Type: text/plain"); // Utilisation d'un header pour spécifier le type de contenu de la page. Ici, il s'agit juste de texte brut (text/plain). 
//$to  = 'efdbfa399b-d96522@inbox.mailtrap.io';
$to  = 'sebastien.dubel@laposte.net';
//$from = '80fe6aa055-9959ef@inbox.mailtrap.io';
$subject = 'Duino.fr';


$message = '
     <html>
      <head>
      </head>
      <body>
       <h1>Nouveau message</h1>
       <p><strong>Nom :</strong>'.$nomRecu.'</p>
       <p><strong>Mail :</strong>'.$mailRecu.'</p>
       <p><strong>Message :</strong>'.$messageRecu.'</p>
      </body>
     </html>
     ';

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';


if ($variable1 && $variable2 && $variable3 != NULL) {
	mail($to, $subject, $message, implode("\r\n", $headers));
	echo "Le mail à été envoyé avec succes";
	}
//************************ fichier base de données******************

/*
$monfichier = fopen('baseDeDonnees.txt', 'a+');//r+ pour lecture et écriture.
//$date=strftime("%d-%m-%Y %H:%M:%S");
$nombre_mail_envoyer = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$nombre_mail_envoyer += 1;
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier,$nombre_mail_envoyer); // On écrit le nouveau nombre de pages vues
 

fclose($monfichier);
     
//$nomRecu = $variable1;
//$mailRecu = $variable2;
//$messageRecu = $variable3;

//var_dump ($variable1);
//var_dump ($mailRecu);
//var_dump ($messageRecu);*/


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.ionos.fr';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contact@duino.fr';                     // SMTP username
    $mail->Password   = 'BoXmAil1921';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('duinopi3@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>