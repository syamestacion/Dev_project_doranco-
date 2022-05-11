
<?php
    require_once 'inc/header.php';
?>

<h1 class="text-center text-muted mt-2">Bienvenue <?= $_SESSION['user']['prenom']?> <?= $_SESSION['user']['nom'] ?></h1>
<hr>

<div class="d-flex justify-content-center">
<?php
    echo ("<div class='mb-4' style='width:100px;height:100px;border-radius:50%;background-image:url($myPicture);background-size:cover;background-position:center;background-repeat:no-repeat;'></div>");
?>
</div>

<ul class="list-group col-md-6 mx-auto">
  <li class="list-group-item">Pseudo: <?= $_SESSION['user']['username'] ?></li>
  <li class="list-group-item">Email: <?= $_SESSION['user']['email'] ?></li>
  
  <li class="list-group-item"><a href="edit.php?id=<?= $_SESSION['user']['id'] ?>">Editer mon profil</a></li>
</ul>

<?php require_once 'inc/footer.php'; ?>
