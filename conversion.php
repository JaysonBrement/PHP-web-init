<?php ob_start() ?>
<?php require "fonction.php"; ?>

<div class="d-flex justify-content-center row">
    <h1 class="text-center row-6">Conversion en chiffre romain</h1>
    <form class="container mt-5 perso d-flex col-2 row justify-content-center " action="conversion.php" method="POST">
        <label class="mb-1" for="chiffre"><h6 class="fs-5 bold">Chiffre :</h6></label>
        <input type="text" class="form-control" placeholder="Un entier s'il vous plait, je suis fragile" id="chiffre" name="chiffre">
        <input class="mt-3 text-center col-6" type="submit" value="Convertir">
    </form>
    <div class="d-flex column justify-content-center mt-2">
        <div class="pd-5 pd-5 col-md-4 text-center text-wrap shadow rounded bg-warning p-5">        
            <p class="fw-bold fs-3 text-white">
                <?php
                    $line=0;
                    if (empty($_POST['chiffre'])) {
                        echo "---";
                    }else{
                        $nb=$_POST['chiffre'];
                        aratorom($nb);
                    }
                ?>
                
                    
                    
                    
                </p>
            </p>
        </div>
    </div>
</div>

<?php
    $content =ob_get_clean();
    require "template.php";
?>