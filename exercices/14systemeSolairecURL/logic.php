<?php

function curlRequest(string $url){
    $request = curl_init();
    curl_setopt($request, CURLOPT_URL, $url); 
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true); 
    curl_setopt($request, CURLOPT_SSL_VERIFYPEER, false); 
    $response = curl_exec($request);

    if($response == false) { 
        echo 'Error : ' . curl_error($request);
        }
    $status = curl_getinfo($request, CURLINFO_HTTP_CODE);

    curl_close($request);
    $response = json_decode($response, true);

    if($status != 200){
        header("Location: index.php");
    }

    return $response;
}

if(isset($_GET['searchType']) && isset($_GET['search'])){
    $searchType = $_GET['searchType'];
    $search = $_GET['search'];

    if(!empty($searchType) && !empty($search)){
        $answers = curlRequest("https://api.le-systeme-solaire.net/rest/bodies?filter[]=bodyType,eq,$searchType&filter[]=name,cs,$search");
        if(isset($answers['bodies'][0])){
            $answer= $answers['bodies'][0];

                if($answer['aroundPlanet'] != NULL){ 
                    $around = $answer['aroundPlanet'];
                }

                if($answer['moons'] != NULL){ 
                    $moons = $answer['moons'];
                }
        }else{
            $error = '<p> Aucune correspondance </p>' ;
        }
        
    }elseif(empty($searchType)){
        $answer = curlRequest("https://api.le-systeme-solaire.net/rest/bodies/$search");
        if(!empty($answer)){

            if($answer['aroundPlanet'] != NULL){ 
                $around = $answer['aroundPlanet'];
            }

            if($answer['moons'] != NULL){ 
                $moons = $answer['moons'];
            }
        }

    }elseif(empty($search)){
        $answer = curlRequest("https://api.le-systeme-solaire.net/rest/bodies?filter[]=bodyType,eq,$searchType");
        
        foreach($answer as $elt){
            $datas = $elt;
        }
    }else{
        echo 'erreur';
    }
}elseif(isset($_GET['link'])){
    $answer = curlRequest($_GET['link']);
        if(!empty($answer)){

            if($answer['aroundPlanet'] != NULL){ 
                $around = $answer['aroundPlanet'];
            }

            if($answer['moons'] != NULL){ 
                $moons = $answer['moons'];
            }
        }
}