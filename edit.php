<?php require_once 'inc/header.php'; ?>

<?php 
$r = $pdo->query("SELECT * FROM user WHERE id = '$_GET[id]'");
$user = $r->fetch(PDO::FETCH_ASSOC);
// Récupération du user qui a l'id correspondant à l'id de l'url $_GET['id']

if($_POST){
    $erreur = "";
    if(strlen($_POST['username']) <= 3 || strlen($_POST['username']) >= 20){
        $erreur .= '<div class="alert alert-danger">Le username doit contenir entre 3 et 20 caractères</div>';
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
        
        if(empty($_POST['password'])){
            $pdo->query("UPDATE user SET username = '$_POST[username]', nom = '$_POST[nom]', prenom = '$_POST[prenom]', email = '$_POST[email]', photo = '$photo_bdd' WHERE id = '$_GET[id]'");
         }
         if(!empty($_POST['password'])){
             
            $pdo->query("UPDATE user SET username = '$_POST[username]', nom = '$_POST[nom]', prenom = '$_POST[prenom]', email = '$_POST[email]' , password = '$password', photo = '$photo_bdd' WHERE id = '$_GET[id]'");
         }

        // Afficher une alerte : vous êtes inscrit
        $content .= '<div class="alert alert-success">Mise à jour bien pris en compte</div>';

        // Redirection vers la page profil.php
        header("location:profil.php");
    }
    $content .= $erreur;
}

?>

<h1 class="text-center">Editer mon profil</h1>
<section class="col-md-6 mx-auto m-1">
    <?= $content ?>
    <form method="post" enctype="multipart/form-data">
        <label for="username">username</label>
        <input class="form-control" type="text" name="username" id="username" value="<?= $user['username'] ?>" placeholder="Entrer votre username..." />

        <label for="nom">Nom</label>
        <input class="form-control" type="text" name="nom" id="nom" value="<?= $user['nom'] ?>" placeholder="Entrer votre nom..." />

        <label for="prenom">Prenom</label>
        <input class="form-control" type="text" name="prenom" id="prenom" value="<?= $user['prenom'] ?>" placeholder="Entrer votre prenom..." />

        <label for="password">Nouveau Mot de passe</label>
        <input class="form-control" type="password" name="password" id="password" value="" placeholder="Entrer votre nouveau mot de passe..." />

        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" value="<?= $user['email'] ?>" placeholder="Entrer votre email..." />

        <label for="photo">photo</label>
        <input class="form-control" type="file" name="photo" id="photo" value="" placeholder="Votre photo..." />

        <div class="mt-2">
            <button class="btn btn-dark">Enregistrer</button>
        </div>
    </form>
</section>

<?php require_once 'inc/footer.php'; ?>