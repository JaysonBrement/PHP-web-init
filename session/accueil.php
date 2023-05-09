<?php ob_start() ?>
<?php session_start() ?>
<?php require "../fonction.php"; ?>

<a href="session.php">Ajouter</a>
<?php
    $content =ob_get_clean();
    require "../template.php";
?>