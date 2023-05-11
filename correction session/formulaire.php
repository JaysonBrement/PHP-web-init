<?php ob_start() ?>
<h1 class="container text-center mt-5">Ajouter des données</h1>

<form class="form container" action="session.php" method="POST">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label"></label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Prénom" name="prenom">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nom" name="nom">
    </div>

    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Age (18 à 70 ans)</label>
        <input type="number" class="form-control" id="age" placeholder="Renseugnez votre age" required name="age" max="70" min="18">
    </div>
    <div class="mb-3 input-group">
        <span class="input-group-text">Taille (1,26m à 3m)</span>
        <input type="text" aria-label="First name" class="form-control" name="taille">
    </div>
    <div class="d-flex my-5">
        <div class="form-check pe-4">
            <input class="form-check-input" type="radio" name="radios" value="femme" checked>
            <label class="form-check-label" for="flexRadioDefault1">Femme</label> 
        </div>
        <div class="form-check ">
            <input class="form-check-input" type="radio" value="homme" name="radios">
            <label class="form-check-label" for="flexRadioDefault2">Homme</label>
        </div>
    </div>
    <div class="text-end mb-3">
          <button type="submit" name="envoyer" class="btn btn-primary">Enregistrer les données</button>
    </div>



</form>




<?php
$content = ob_get_clean();
require "../template.php";
?>