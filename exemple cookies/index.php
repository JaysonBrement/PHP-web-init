
<?php ob_start() ?>
<?php session_start() ?>

<h1 class="container mt-5">COOKIES</h1>
<form class="container mt-5 perso" action="traitement.php" method="POST">
<div class="mb-3">
  <label for="nom" class="form-label">Nom :</label>

  <!-- On va rajouter value, balise php, est-ce que la superglobal est définie si c'est le cas on fait
  un htmlspecialchars de notre superglobal cookie
  Si c'est false, on va juste mettre une chaine de caractère vide
 -->
 <!-- Repartir dans compte.php -->
  <input type="text" class="form-control" placeholder="Nom"  name="name" value="<?= isset($_COOKIE['username'])? htmlspecialchars($_COOKIE['username']):"";?>">
</div>
<div class="mb-3">
  <label for="age" class="form-label">Age :</label>
  <input type="text" class="form-control"  placeholder="Votre age" name="age">
</div>
<input class="mt-4 btn btn-primary" type="submit" value="Envoyer">
</form>

<?php
$content = ob_get_clean();
require "template.php";

?>