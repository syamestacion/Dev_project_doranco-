<?php

// Verifie que l'internaute est bien connecté
function internauteEstConnecte(){
    if(!isset($_SESSION['user'])){
        return false;
    }else{
        return true;
    }
}

// verifier si l'internaute est connecter et est admin
function estConnecteEtAdmin(){
    if(internauteEstConnecte() && $_SESSION['user']['statut'] == 1){
        return true;
    }else{
        return false;
    }
}

function estConnecteEtArtiste(){
    if(internauteEstConnecte() && $_SESSION['user']['statut'] == 2){
        return true;
    }else{
        return false;
    }
}

?>



