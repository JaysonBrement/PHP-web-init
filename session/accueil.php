<?php ob_start() ?>
<?php session_start() ?>
<?php require "../fonction.php"; ?>

<a class="btn btn-primary mt-3 ms-3" href="session.php">Ajouter des données</a>
<?php
    $content =ob_get_clean();
    require "../template.php";
?>