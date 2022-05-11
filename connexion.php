<?php include_once 'inc/header.php'; ?>

<?php

if(isset($_GET['action']) && $_GET['action'] == 'deconnexion' ){

    unset($_SESSION['user']);
    // foncrion qui permet de supprimer une variable de session a l index membre
    // session_destroy supprime la session entiere

 

    header('location:index.php');


}
if(internauteEstConnecte() ==true){
    header('location:profil.php');
}
if($_POST){

    $r = $pdo->query("SELECT * FROM user WHERE username = '$_POST[username]'");

    if($r->rowCount() >= 1){
        $user = $r->fetch(PDO::FETCH_ASSOC);
        // la fonction fetch permet de recuperer les donnees de la requet dans un tableau
         if(password_verify($_POST['password'],$user['password'])){
           $_SESSION['user']['id'] = $user['id'];
           $_SESSION['user']['username'] = $user['username'];
           $_SESSION['user']['password'] = $user['password'];
           $_SESSION['user']['email'] = $user['email'];
           $_SESSION['user']['nom'] = $user['nom'];
           $_SESSION['user']['prenom'] = $user['prenom'];
           $_SESSION['user']['statut'] = $user['statut'];

           $_SESSION['user']['photo'] = $user['photo'];
           
           if($user['statut'] == 1){
            header('location:administration.php');
        }elseif($user['statut'] == 2){
            header('location:artiste.php');

        }
        else {
            header('location:profil.php');
        }

           
           if($membre['statut'] == 0){
               header('location:profil.php');
           }




}

?>
<div class="container">
    <h1 class="text-center">Connexion</h1>
    <section class="col-md-6 mx-auto">
        <?= $content ?>
        <form method="post">
            <div>
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Votre nom d'utilisateur" value="">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Votre mot de passe" value="">
            </div>
            <button class="btn btn-dark mt-2">Connexion</button>
        </form>
    </section>
</div>



<?php include_once 'inc/footer.php'; ?>