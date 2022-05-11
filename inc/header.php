<?php
include "inc/bdd.php";
include "inc/function.php";


$myPicture = $_SESSION['user']['photo'];



?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Womart</title>

    <meta name="description" content="le site de la wom'art" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Oswald:wght@700&display=swap"
      rel="stylesheet"
    />

    <link rel="shortcut icon" href="inc/img/Asset-5.svg" />
    <link rel="stylesheet" href="inc/css/normalize.css" />
    <link rel="stylesheet" href="inc/css/style.css" />
  </head>

  <body>
    <div class="header">
      <div class="wrap">
        <div class="grid">
          <header class="logo col-d-3">
            <a href="index.html" title="Retour à la page d'accueil">
              <img src="inc/img/Asset-4.svg" alt="WomArt" width="200" height="" />
            </a>
          </header>

          <nav class="menu col-d-9">
            <select class="form-select "  name="artiste">
              <option>Decouvrez les artistes</option>
              <option><a href="Robine2.html" title="Go to Robine">Robine</a></option>
              <option><a href="mymy.html" title="Go to Mymy">Mymy</a></option>
              <option><a href="constance.html" title="Go to Constance">Constance</a></option>
            </select>
            
            
            
            <a href="news.html" title="Go to News">News</a>
            

            <a href="news.html" title="Go to Inscription">Inscription</a>
            <?php
              if(internauteEstConnecte() == false){
                echo '<a href="connexion.php" title="Go to Connexion">Connexion</a>';
              }elseif(internauteEstConnecte() == true){
                echo '<a class="dropdown-item" href="connexion.php?action=deconnexion">Deconnexion</a>';
              }
            
            ?>
            
            


            <a href="news.html" title="Go to Profil">Profil</a>
            
          </nav>
        </div>
      </div>
    </div>