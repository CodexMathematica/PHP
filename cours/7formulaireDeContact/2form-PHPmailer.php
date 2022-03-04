<?php
// Necessite la bibliothéque PHPMailer (https://github.com/PHPMailer/PHPMailer)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once "includes/Exception.php";
    require_once "includes/PHPMailer.php";
    require_once "includes/SMTP.php";

    $mail = new PHPMailer(true); #true car on gére les exceptions
    try{
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; # Car on veut afficher les infos de debug (ne pas laisser en prod)
        $mail->isSMTP(); #Indique que l'on transmet par protocole SMTP
        $mail->Host = "localhost";
        $mail->Port = 1025;
        $mail->Charset = "utf-8";

        $mail->addAddress('j7devweb@gmail.com'); # A qui envoyons nous le mail
        // $mail->addCC(); Envoyer une copie
        $mail->setFrom($emailFrom); #Qui envoie le mail
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send(); # On envoie le mail
        echo "Message envoyé.";

    }catch(Exception $e){
        echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
</head>
<body>
    <main>
        <h1>Envoie d'email avec PHP mailer</h1>
        <form method="post">
            <input type="text" name="name" placeholder="Nom">
            <input type="email" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Sujet">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Envoyer par Email</button>
        </form>
    </main>
</body>
</html>

<!-- Présentation de MailHog -->

<!-- MailHog est un outil de test d'e-mail qui permet d'installer et de configurer très facilement un serveur d'e-mail local. MailHog met en place un faux serveur SMTP. -->
<!-- Un « serveur SMTP » est un serveur de messagerie qui achemine sur Internet des emails d'un expéditeur à un ou plusieurs destinataires selon les règles du protocole réseau SMTP -->