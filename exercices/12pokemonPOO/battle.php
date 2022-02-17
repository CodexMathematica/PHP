<?php
if(isset($myPokemon) && isset($ennemy)){
    echo $myPokemon->presentation() . '<br>';
    echo $ennemy->presentation() . '<br> <br>';
    $count = 1;

    do{
        echo 'Round' . $count . '<br> <br>';
        $attack = $ennemy->attack();
        $myPokemon->updateHealth($attack);
        echo '<br>';
        $attack = $myPokemon->attack();
        $ennemy->updateHealth($attack);
        echo '<br> <br>';
        sleep(1);
        $count += 1;
    }while($myPokemon->hp > 0 && $ennemy->hp > 0);

    if($myPokemon->hp > 0){
        echo $myPokemon->name . ' gagne ce combat';
    }elseif($ennemy->hp > 0){
        echo $ennemy->name . ' gagne ce combat';
    }else{
        echo 'Aucun vainqueur.';
    }

    header("refresh: 10");
}