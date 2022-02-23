<?php 
include 'classes/pokemon.php';

if(isset($_POST['submit'])){
    $myPokemon = new Pokemon($_POST['name'], $_POST['type'], $_POST['hp']);
    
    $randomNames = ['Salameche', 'Pikachu', 'Onyx', 'Chenipan', 'Bulbizar', 'Carapuce'];
    $randomTypes = ['water', 'fire'];
    $ennemy = new Pokemon($randomNames[rand(0, count($randomNames)-1)], $randomTypes[rand(0, count($randomTypes)-1)], rand(10,20));

}