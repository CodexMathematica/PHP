<?php

require_once 'contact/Security.php';
require_once 'payment/Security.php';

var_dump(new Security());

// Erreur car même nom de classe (Pour résoudre le problème on préfixe les noms de classe ex: ContactSecurity et PaymentSecurity)
// Même problème avec les nom de fonctions.