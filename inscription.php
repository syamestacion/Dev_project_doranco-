<?php require_once 'inc/header.php'; ?>

<?php 
if($_POST){
    $erreur = "";
    if(strlen($_POST['username']) <= 3 || strlen($_POST['username']) >= 20){
        $erreur .= '<div class="alert alert-danger">Le username doit contenir entre 3 et 20 caractères</div>';
    }

    $r = $pdo->query("SELECT * FROM user WHERE username = '$_POST[username]'");

    // Verifie si le username existe déjà
    if($r->rowCount() >= 1){
        // Si oui, on affiche un message d'erreur
        $erreur .= '<div class="alert alert-danger">Ce username est déjà pris</div>';
    }

    // On parcour le tableau $_POST et on verifie les champs
    foreach($_POST as $indice => $valeur){
        // Permet de proteger des caratères speciaux. ENT_QUOTES permet de proteger les guillemets, apostrophes
        $_POST[$indice] = htmlspecialchars($valeur, ENT_QUOTES);

        // Permet d'ajouter des antislashs
        $_POST[$indice] = addslashes($valeur);
    }

    // On crypte le mot de passe
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    

    if(empty($erreur)){ // si $erreur est vide, alors on peut rentrer dans la bdd

        // TODO: GESTION DE LA PHOTO
        $photo_bdd = "";
        if(!empty($_FILES['photo']['name'])){
            // Concatenation du username et du nom de la photo
            $nom_photo = $_POST['username'] . '-' . $_FILES['photo']['name'];

            // On affecte l'url de la photo dans la variable $photo_bdd (chemin de la photo)
            $photo_bdd = URL . "inc/photo/$nom_photo";

            // On affecte le chemin de la photo dans la variable $photo_dossier
            $photo_dossier = RACINE_SITE . "inc/photo/$nom_photo";

            // On déplace/copy la photo dans le dossier photo grâce a la fonction copy()
            copy($_FILES['photo']['tmp_name'], $photo_dossier);
            // Ne pas oublier l'attribut enctype="multipart/form-data" dans la balise form pour le traitement de la photo
        }

        $pdo->query("INSERT INTO user (username, password, nom, prenom, email, statut, photo) VALUES ('$_POST[username]', '$password', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[statut]','$photo_bdd')");

        // Afficher une alerte : vous êtes inscrit
        $content .= '<div class="alert alert-success">Vous êtes inscrit</div>';
    }
    $content .= $erreur;
}

?>

<h1 class="text-center">Inscription</h1>
<section class="col-md-6 mx-auto m-1">
    <?= $content ?>
    <form  method="post" enctype="multipart/form-data">
        <label for="username">username</label>
        <input class="form-control" type="text" name="username" id="username" value="" placeholder="Entrer votre username..." />

        <label for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom" value="" placeholder="Entrer votre nom..." />

        <label for="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="" placeholder="Entrer votre prenom..." />

        <label for="password">Mot de passe</label>
        <input class="form-control" type="password" name="password" id="password" value="" placeholder="Entrer votre password..." />

        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="" placeholder="Entrer votre email..." />

        <label for="statut">Vous êtes</label>
        <select class="form-control" name="statut" id="statut">
            <option value="0">Artiste</option>
            <option value="2">fan</option>
        </select>

    
        <label for="photo">photo</label>
        <input class="form-control" type="file" name="photo" id="photo" value="" placeholder="Votre photo..." />

        <div class="mt-2">
            <button class="btn btn-dark">Inscription</button>
        </div>
    </form>
</section>

<?php require_once 'inc/footer.php'; ?>