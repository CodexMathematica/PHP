<?php 
if(isset($_POST['dataSubmited'])){

    $patient = htmlspecialchars($_POST['patient']);
    $sex = htmlspecialchars($_POST['sex']);
    $sampleId = htmlspecialchars($_POST['sampleId']);
    $sample = htmlspecialchars($_POST['sample']);

    //Traitement de l'echantillon------------------------------------------------

    //sexe
    if(strpos($sample, '7') !== false){ // A ameliorer (Peut retourner autre chose que false)
        $sexSampleDetermination = "male";
    }elseif(strpos($sample, '9') !== false){
        $sexSampleDetermination = "femelle";
    }else{
        $sexSampleDetermination = "Erreur de la détermination du sexe via l'analyse de l'echantillon.";
    }

    //age
    if(strlen($sample) > 18){
        $ageSampleDetermination = "Plus de 21 ans";
    }elseif(strlen($sample) < 6){
        $ageSampleDetermination = "Plus de 65 ans";
    }elseif(strlen($sample) >= 6 && strlen($sample) <= 18) {
        $ageSampleDetermination = "Moins de 21 ans mais plus de 6 ans";
    }else{
        $ageSampleDetermination = "Erreur dans la détermination de l'age";
    }

    //taille
    if(substr_count($sample, 'x') < 2){
        $heightSampleDetermination = " Comprise entre 0.5m et 1m50";
    }elseif(substr_count($sample, 'x') < 3){
        $heightSampleDetermination = " Comprise entre 1m51 et 1m70";
    }elseif(substr_count($sample, 'x') < 4){
        $heightSampleDetermination = " Comprise entre 1m71 et 1m80";
    }elseif(substr_count($sample, 'x') < 5){
        $heightSampleDetermination = " Comprise entre 1m81 et 1m90";
    }elseif(substr_count($sample, 'x') < 6){
        $heightSampleDetermination = " Strictement supérieur à 1m90";
    }else{
        $heightSampleDetermination = "Erreur lors de la détermination de la taille";
    }

    if($sex != $sexSampleDetermination){
        $sexError = 'Discordance des informations concernant le sexe de l\'individu.';
    }
}