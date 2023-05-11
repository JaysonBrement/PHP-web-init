<?php ob_start() ?>



    <div class="container-fluid row justify-content-center gap-3 mt-5 mb-5 m-0 p-3">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-black p-5">
            <p class="fw-bold fs-3 text-white">Conversion</p>
            <p class=" text-white ">Conversion en chiffre romain</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="./conversion/conversion.php">Look at the moves !</a></button>
        </div>
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-warning p-5">
            <p class="fw-bold fs-3 text-white">Authentification</p>
            <p class=" text-white">J'ai une conception libérale du sommeil</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="./authentification/authentification.php">Look at the moves !</a></button>
        </div>
    </div>
    <div class="container-fluid row justify-content-center gap-3 me-0 ms-0 mt-5 mb-5">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-primary p-5">
            <p class="fw-bold fs-3 text-white">Session</p>
            <p class=" text-white ">Ceci est un exemple de session, viens me copier-coller</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="./session/accueil.php">Look at the moves !</a></button>
        </div>
        <div class="pd-5 col-md-4 text-left text-black shadow rounded bg-white p-5">
            <p class="fw-bold fs-3 ">traduction</p>
            <p class=" ">j'en sais rien, je suis à court d'idée de truc à écrire</p>
            <button type="button" class="btn btn-black  fs-5 border-dark mb-2"><a href="./traduction/traduction.php">Look at the moves !</a></button>
        </div>
        <div class="container-fluid row justify-content-center gap-3 mt-5 mb-5 m-0 p-3">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-black p-5">
            <p class="fw-bold fs-3 text-white">cookies</p>
            <p class=" text-white ">Conversion en chiffre romain</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="./cookies/index.php">Look at the moves !</a></button>
        </div>
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-warning p-5">
            <p class="fw-bold fs-3 text-white">dummy</p>
            <p class=" text-white">J'ai une conception libérale du sommeil</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="#">Look at the moves !</a></button>
        </div>
    </div>
    <div class="container-fluid row justify-content-center gap-3 me-0 ms-0 mt-5 mb-5">
        <div class="pd-5 pd-5 col-md-4 text-left shadow rounded bg-primary p-5">
            <p class="fw-bold fs-3 text-white">dummy</p>
            <p class=" text-white ">Ceci est un exemple de session, viens me copier-coller</p>
            <button type="button" class="btn btn-black text-white fs-5 border-white mb-2"><a href="#">Look at the moves !</a></button>
        </div>
        <div class="pd-5 col-md-4 text-left text-black shadow rounded bg-white p-5">
            <p class="fw-bold fs-3 ">dummy</p>
            <p class=" ">j'en sais rien, je suis à court d'idée de truc à écrire</p>
            <button type="button" class="btn btn-black  fs-5 border-dark mb-2"><a href="#">Look at the moves !</a></button>
        </div>
</div>
<?php
$content =ob_get_clean();
require "template.php";
?>