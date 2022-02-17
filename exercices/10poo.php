<!-- La programmation orientée objet -->
<!-- Exercices -->
<?php

//1 Ecrire un classe qui affiche le message "Bonjour Professeur !"
//"Professeur" est un argument (varie à chaque instance) de la methode greetings() qui se trouve dans la class.
// "Bonjour" est stocké dans une propriété nommée message.


?>


<!-- Réponses -->

<?php 

    class UserMsg {
        public $message = 'Bonjour';

        public function greetings($title){
            return $this->message . $title;
        }

    }

    $myMessage = new UserMsg();
    echo $myMessage->greetings('Professeur');
    echo $myMessage->message;
?>