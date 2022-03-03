<!-- Techniques pour sauver temporairement des données pour un utilisateur spécifique -->
<!-- En PHP le cookie est sauvegardé coté client, la session coté serveur. -->

<?php
session_start(); // Debute une session (necessaire au début de chaque page voulant accéder à la super globale $_SESSION)
echo session_id(); // Affiche l'id de la session

$_SESSION['counter'] = $_SESSION['counter'] ?? 0; // Stocker une valeur dans une variable en session
$_SESSION['counter']++; // Ajouter +1 au compteur stocker en session

// La donnée une fois sauvée reste en session jusqu'a ce qu'on ferme la session ou que l'on retire la variable.

//unset($_SESSION['counter']); // Supprime manuellement la variable ciblée.
//session_unset(); // Supprime toutes les données de session
//session_destroy(); // Supprime la session. Un session_start() est necessaire pour recréer une session.

/* A retenir
- Chaque session a un id différent.
- A chaque page ou notre session doit être active, on doit placer un session_start() en tout début de page
- Toutes les variables enregistrées au cours de notre session seront accesibles dans les pages de notre session.
- N'oubliez JAMAIS de détruire vos variables de session lors de la déconnexion.
*/
?>
<p> page visitée <?= $_SESSION['counter'] ?> fois pendant cette session. </p>

<!-- Cookies (usages: personnalisation, traque ...) -->
<?php

//Créer un cookie
setcookie('name', 'Je suis une valeur.', time()+60); //setcookie('key', 'value', time(s)); (time= Temps présent+60secondes)
//Le mettre à jour
setcookie('name', 'Je réecrie la valeur déjà stockée', time()+3600);
// Le supprimer
setcookie('name', '', time()-1);

?>
