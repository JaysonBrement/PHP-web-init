<?php ob_start() ?>
<?php session_start() ?>
<div class="container">
    <?php
        if(isset($_POST['nom']) && isset($_POST['prénom'])&& isset($_POST['age'])&& isset($_POST['taille'])){

            $prénom =$_POST['prénom'];
            $nom =$_POST['nom'];
            $age =$_POST['age'];
            $taille =$_POST['taille'];
            $sexe=$_POST['sexe'];

            //Création des variables de session
            $_SESSION['prénom'] = $prénom;
            $_SESSION['nom'] = $nom;
            $_SESSION['age'] = $age;
            $_SESSION['taille'] = $taille;
            $_SESSION['sexe'] = $sexe;
            
            echo "sexe|prénom|nom|age|taille";
            echo "<br>";
            echo "$sexe|$prénom|$nom|$age|$taille";
            echo " Cliquez <a href='session.php'>Ici</a> pour accéder à votre compte";
        }
    ?>
</div>


<?php
    $content =ob_get_clean();
    require "../template.php";
?>

<!-- variable :
-nom
-prénom
-age
-taille
-->