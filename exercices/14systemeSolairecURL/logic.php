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
    $response = json_decode($response);

    if($status != 200){
        header("Location: index.php");
    }

    return $response;
}

if(isset($_GET['searchType']) && isset($_GET['search'])){
    $searchType = $_GET['searchType'];
    $search = $_GET['search'];

    if(!empty($searchType) && !empty($search)){
        $answer = curlRequest("https://api.le-systeme-solaire.net/rest/bodies?filter[]=bodyType,eq,$searchType&filter[]=name,cs,$search");
        $answerObj = curlRequest("https://api.le-systeme-solaire.net/rest/bodies/$search");
        $answer = (array) $answerObj;

        if(!empty($answer)){

            if($answer['aroundPlanet'] != NULL){ 
                $around = (array) $answer['aroundPlanet'];
            }

            if($answer['moons'] != NULL){ 
                $moons = (array) $answer['moons'];
            }
        }
    }elseif(empty($searchType)){
        $answerObj = curlRequest("https://api.le-systeme-solaire.net/rest/bodies/$search");
        $answer = (array) $answerObj;
        if(!empty($answer)){

            if($answer['aroundPlanet'] != NULL){ 
                $around = (array) $answer['aroundPlanet'];
            }

            if($answer['moons'] != NULL){ 
                $moons = (array) $answer['moons'];
            }
        }

    }elseif(empty($search)){
        $answerObj = curlRequest("https://api.le-systeme-solaire.net/rest/bodies?filter[]=bodyType,eq,$searchType");
        $answer = (array) $answerObj;
        
        foreach($answer as $elt){
            $datas = (array) $elt;
        }
    }else{
        echo 'error';
    }
}elseif(isset($_GET['link'])){
    $answerObj = curlRequest($_GET['link']);
        $answer = (array) $answerObj;
        if(!empty($answer)){

            if($answer['aroundPlanet'] != NULL){ 
                $around = (array) $answer['aroundPlanet'];
            }

            if($answer['moons'] != NULL){ 
                $moons = (array) $answer['moons'];
            }
        }
}