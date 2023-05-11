<?php ob_start() ?>
<?php session_start() ?>
    <h1 class="container mb-5 mt-5">Ma page traitement</h1>

    <div class="container">
    <?php 
        if(isset($_POST['name']) && isset($_POST['age'])){

            $nom =$_POST['name'];
            $age =$_POST['age'];

            //Création des variables de session
            $_SESSION['nom'] = $nom;
            $_SESSION['age'] = $age;
            echo "Bonjour " . $nom  . "<br>"; 

            echo "Cliquez <a href='compte.php'>Ici</a> pour accéder à votre compte";
            
        }

    ?>
    </div>
    


    

<?php
$content = ob_get_clean();
require "template.php";
?>