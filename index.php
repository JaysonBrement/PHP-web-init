<?php ob_start() ?>


    <div class="container-fluid row justify-content-center gap-3 mt-5 mb-5 m-0 p-3">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-black p-5">
            <p class="fw-bold fs-3 text-white">Conversion</p>
            <p class=" text-white ">Conversion en chiffre romain une introduction à l'intégration de PHP dans une page web</p>
            <a id="btn"class="btn btn-black text-white fs-5 border-white mb-2" href="./conversion/conversion.php">Look at the moves !</a>
        </div>
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-warning p-5">
            <p class="fw-bold fs-3 text-white">Authentification</p>
            <p class=" text-white">Un text effectué sur une expression à l'aide de REGEX</p>
            <a class="btn btn-black text-white fs-5 border-white mb-2" href="./authentification/authentification.php">Look at the moves !</a>
        </div>
    </div>
    <div class="container-fluid row justify-content-center gap-3 me-0 ms-0 mt-5 mb-5">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-primary p-5">
            <p class="fw-bold fs-3 text-white">Session</p>
            <p class=" text-white ">Une introduction pour gérer une session avec une SSID et des super globale.</p>
            <a class="btn btn-black text-white fs-5 border-white mb-2" href="./session/accueil.php">Look at the moves !</a>
        </div>
        <div class="pd-5 col-md-4 text-left text-black shadow rounded bg-white p-5">
            <p class="fw-bold fs-3 ">Traduction</p>
            <p class=" ">Une traduction, l'input ajoute un paramètre dans la page reconnu par une succession de boucle "if"  </p>
            <a class="btn btn-black text-black fs-5 border-black mb-2" href="./traduction/traduction.php">Look at the moves !</a>
        </div>
        <div class="container-fluid row justify-content-center gap-3 mt-5 mb-5 m-0 p-3">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-black p-5">
            <p class="fw-bold fs-3 text-white">Cookies</p>
            <p class=" text-white ">Une traduction sauvegardé sous forme de cookies</p>
            <a class="btn btn-black text-white fs-5 border-white mb-2" href="./cookies/index.php">Look at the moves !</a>
        </div>
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-secondary p-5">
            <p class="fw-bold fs-3 text-white">Tentative de calculatrice</p>
            <p class=" text-white ">on y croit</p>
            <a class="btn btn-black text-white fs-5 border-white mb-2" href="./calculatrice/index.php">Look at the moves !</a>
        </div>
        
</div>
<?php
$content =ob_get_clean();
require "template.php";
?>