<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = ""; #Une adresse email
    $headers = [
        "From" => $emailFrom,
        "Reply-To" => $emailFrom,
        "Cc" => "contact@gmail.com"
    ];

    $txt = "Vous avez reçus un email de : " . $name . ". \n\n" . wordwrap($message, 70, "\r\n"); # worpdwrap permet un retour à la ligne après 70 caractéres
    # https://www.php.net/manual/fr/function.mail.php (Pose problémes pour les gros volumes de fichier car la fonction ouvre le port à chaque fois)
    mail($mailTo, $subject, $txt, $headers); # Methode PHP qui envoie le mail (ne peut pas être intercepter en local)
    header("Location: 1form-mail-simple.php?mailsend");
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
        <h1>Envoie d'email simple</h1>
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