<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
require '../assets/PHP/ConnectionBDD.php'; //Connection à la base de données.

//********************* RECEPTION DONNEES JS **********************************

$nomRecu = (isset($_GET["variable1"])) ? $_GET["variable1"] : NULL;
$mailRecu = (isset($_GET["variable2"])) ? $_GET["variable2"] : NULL;
$messageRecu = (isset($_GET["variable3"])) ? $_GET["variable3"] : NULL;


//**************************** CONNECTION MAIL ***********************************

$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';

$mail->isSMTP();					// Active l'envoi via SMTP
$mail->Host = 'SMTP.ionos.fr';			// À remplacer par le nom de votre serveur SMTP
$mail->SMTPAuth = true;					// Active l'authentification par SMTP
$mail->Username = 'contact@duino.fr';			// Nom d'utilisateur SMTP (votre adresse email complète)
$mail->Password = 'BoXmAiL1921';				// Mot de passe de l'adresse email indiquée précédemment
$mail->Port = 465;					// Port SMTP 465 587
$mail->SMTPSecure = "ssl";				// Utiliser SSL
$mail->isHTML(true);					// Format de l'email en HTML
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$systeme = $_SERVER['HTTP_USER_AGENT'];

//******************** DESTINATAIRE ET MESSAGE MAIL *************************

$mail->From = 'contact@duino.fr';			// L'adresse mail de l'emetteur du mail (en général identique à l'adresse utilisée pour l'authentification SMTP)
$mail->FromName = 'Duino.fr';				// Le nom de l'emetteur qui s'affichera dans le mail
$mail->addAddress('sebastien.dubel@laposte.net');			// Un premier destinataire
//$mail->addAddress('ellen@example.com');			// Un second destifataire (facultatif)
							// Possibilité de répliquer la ligne pour plus de destinataires
$mail->addReplyTo('contact@duino.fr');			// Pour ajouter l'adresse à laquelle répondre (en général celle de la personne ayant rempli le formulaire)
$mail->addCC('contact@duino.fr');				// Pour ajouter un champ Cc
//$mail->addBCC('bcc@example.com');			// Pour ajouter un champ Cci

$mail->Subject = 'Nouveau message';			// Le sujet de l'email

$mail->Body = '
     <html>
      <head>
      </head>
      <body>
       <h1>Nouveau inscrit</h1>
       <p><strong>Nom :</strong>'.$nomRecu.'</p>
       <p><strong>Mail :</strong>'.$mailRecu.'</p>
       <p><strong>Message :</strong>'.$messageRecu.'</p>
      </body>
     </html>
     ';

$mail->AltBody = 'Contenu du message pour les clients non HTML';	// Le contenu du mail au format texte

//**************************** ENVOI DU MAIL ************************************
if(!$mail->send()) {
    echo "Le message ne peut être envoyé.";
    //echo "Erreur: " . $mail->ErrorInfo;
} else {
    echo "Message envoyé avec succes";
}

//**************************** ENVOI DU NOM ET DU MAIL DANS BDD ****************

//var_dump ($variable1);
$req = $pdo->prepare("INSERT INTO mail(nom, adresse, ip, FAI, os) VALUES('".$nomRecu."', '".$mailRecu."', '".$ip."', '".$hostname."', '".$systeme."')");
$req->execute();

//***************************************************************************

?>