<?php ob_start() ?>
<?php 
session_start();

$nom = $_SESSION['nom'];
$age = $_SESSION['age'];

setcookie("username",$nom,time()+3600,"/","",false,true);

//Récupérer le cookie
//Est-ce que la superglobal $_cookie existe(true), si c'est le cas alors $_COOKIE sinon $nom $_SESSION nom
//Repartir dans l'index, input nom pour rajouter value
$nom = isset($_COOKIE['username'])?$_COOKIE['username']:$nom;

if(isset($_GET['logout'])){
    // On va utiliser la méthode setcookie, on récupère username,la valeur..les paramètres
    /*
    Le cookie va se supprimer, il aura un temps inférieur à aujourd'hui
     */
    setcookie("username","",time()-3600,"/","",false,true);
    session_destroy();
    header("Location:delete.php");
    exit();
}

?>


<div class="container mt-5">
    <h1 class="my-5">Bienvenue <?= $nom; ?> sur votre compte</h1>
    <p>Voici vos informations :</p>
    <table>
        <tr>
            <th>Nom</th>
            <th>Age</th>
        </tr>
        <tr>
            <td><?= $nom; ?></td>
            <td><?= $age; ?></td>
        </tr>
    </table>
    <br><br>
    <!-- C'est ici quand on va détruire la session, qu'on va également détruire la session -->
    <a class="text-warning" href="?logout=true">Detruire la session</a>

</div>






















<?php
$content = ob_get_clean();
require "template.php";
?>