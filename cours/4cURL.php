<?php

//But : consommer une API (recupérer les données envoyer par un autre serveur aprés avoir fait une demande(appeler une url))
//Il existe une methode get_content() mais celle ci est bloqué (pour des raisons de sécurité) sur plein de serveur d'ou le passage par cURL

$url = ''; //url à laquelle on fait la demande et qui renverra une réponse

$request = curl_init(); //initialisation du cURL

curl_setopt($request, CURLOPT_URL, $url); //On pointe vers l'URL
curl_setopt($request, CURLOPT_RETURNTRANSFER, true); //On demande qu'une réponse soit retournée
curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false); // Permet de retirer la vérification SSL (si il y en a une)

$reponse = curl_exec($request); // On stock la réponse retournée dans une variable

if($reponse === false){ //Verifie l'erreur retournée
    echo 'Error : ' . curl_error($request);
} 

$status = curl_getinfo($request, CURLINFO_HTTP_CODE); // Code du status de la réponse (200 si ça marche)

curl_close($request); // Fermeture du cURL (ne pas le faire provoque une fuite de données et une utilisation de la mémoire du serveur)

$reponse = json_decode($reponse); // La réponse est en json on la décode

// On affiche les données de la réponse retournée
echo'<pre>';
echo $status;
print_r($reponse);
echo '</pre>';

?>