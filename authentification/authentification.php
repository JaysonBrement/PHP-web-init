<?php ob_start() ?>
<?php require "../fonction.php"; ?>
<div class="d-flex justify-content-center row">
    <h1 class="text-center row-6">Anthentification</h1>
    <h6 class="text-center row-6">Entre 8 et 20 caractères, majuscules et minuscule, caractère spéciaux, chiffres</h6>
    <form class="container mt-5 perso d-flex col-2 row justify-content-center " action="authentification.php" method="POST">
        <label class="mb-1" for="chiffre"><h6 class="fs-5 bold">Saisie :</h6></label>
        <input type="text" class="form-control" placeholder="Entrez une expression" id="chiffre" name="saisie">
        <input class="mt-3 text-center col-6" type="submit" value="Convertir">
    </form>
    <div class="d-flex column justify-content-center mt-2">
        <div class="pd-5 pd-5 col-md-4 text-center text-wrap shadow rounded bg-primary p-5">        
            <p class="fw-bold fs-3 text-white">
                <?php
                    if(empty($_POST['saisie'])){
                    echo "---";
                    }
                    else{
                        $expr=$_POST['saisie'];
                        exprctrl($expr);
                    }
                ?>
            </p>
        </div>
    </div>
</div>
<?php
    $content =ob_get_clean();
    require "../template.php";
?>

