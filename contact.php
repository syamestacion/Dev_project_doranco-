<?php require_once "inc/header.php"; ?>
<?php

if ($_POST) {

    // $erreur = '';
    $pdo->query("INSERT INTO contact (nom,telephone,email,msg) VALUES ('$_POST[nom]','$_POST[telephone]','$_POST[email]','$_POST[msg]')");
}

?>

<section class="col-md-6 mx-auto m-1">
    <div>
        <h2 class="text-center">Contactez-nous</h2>
    </div>
    <div>
        <form method="post">
            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="msg">Message</label>
                <textarea name="msg" id="msg"></textarea>
            </div>
            <div class="d-grip gap-2 d-md-block mx-auto">
                <button class="btn btn-primary text-center" type="submit"> Envoyer </button>
            </div>

        </form>
    </div>
</section>

