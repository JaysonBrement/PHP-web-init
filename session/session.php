<?php ob_start() ?>
<?php session_start() ?>
<?php require "../fonction.php"; ?>
<div class="container-fluid d-flex row justify-content-center text-center">
<div class="container-fluid row-6 text-center">
<?php
  if(isset($_SESSION['nom']) && isset($_SESSION['prénom'])&& isset($_SESSION['age'])&& isset($_SESSION['taille'])){
    echo '<div class="machin">
    <div class="container d-flex row justify-content-center">
        <ul class="list-group">  
            <form class ="card p-3 mt-5 d-flex justify-content-start col-6" id="truc" method="POST">
        <a class="btn btn-primary mb-5 col-3" href="session.php">home</a>
        <input type="submit" name="1" class="mt-1 mb-1 btn btn-primary" value="deboggage">
        <input type="submit" name="2" class="mt-1 mb-1 btn btn-primary" value="concatenation">
        <input type="submit" name="3" class="mt-1 mb-1 btn btn-primary" value="boucle">
        <input type="submit" name="4" class="mt-1 mb-1 btn btn-primary" value="fonction">
        <input type="submit" name="5" class="mt-1 mb-1 btn btn-primary" value="supprimer">
        </form>
        </ul>
    </div>
    </div>';
    foreach($_SESSION as $key=>$value){
      $table[$key]=$value;
  }
    if((array_key_exists('1', $_POST)) or (array_key_exists('2', $_POST)) or (array_key_exists('3', $_POST)) or (array_key_exists('4', $_POST))or (array_key_exists('5', $_POST))){

      switch($_POST){
          case (array_key_exists('1', $_POST)):
              print_r($table);
              break;
          case (array_key_exists('2', $_POST)):
            foreach($table as $key=>$value){
              if($key=='sexe'){
                if($value=='homme'){
                  echo 'Mr';
                }else{
                  echo 'Mme';
                }
              }
              if($key=='prénom'){
                  $value=ucfirst($table[$key]);
                  echo "$value ";
              }
              if($key=='nom'){
                  $value=strtoupper($table[$key]);
                  echo "$value";
              }
              if($key=='age'){
                echo "<br></br> J'ai $value ans et je mesure ";
              }
              if($key=='taille'){
                  $value=str_replace('.', ',', $table[$key]);
                  echo "$value";
              }
              
          }
              break;
          case (array_key_exists('3', $_POST)):
            $ligne=0;
            foreach($table as $key=>$value){
                echo "à la ligne $ligne correspond la clé '$key' et contient '$value'<br></br>";
                $ligne++;
            }
              break;
          case (array_key_exists('4', $_POST)):
              readtable($table);
              break;
          case (array_key_exists('5', $_POST)):
              session_destroy();
              header('location:session.php');
              break;
          
      
  }
  }
  }
else{
echo '
<div class="container row d-flex justify-content-center">

<div id="sessioncard" class="card d-flex col-8 justify-content-center  mt-5">
    <form action="traitement.php" method="POST">
      <div class="form-group">
        <label class=" display-5 mb-3"for="exampleInputEmail1">prénom</label>
        <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="prénom"name="prénom" required>
      </div>
      <div class="form-group">
        <label class=" display-5 mb-3" for="exampleInputPassword1">nom</label>
        <input type="text" class="form-control " id="exampleInputPassword1" placeholder="nom"name="nom"required>
      </div>
      <div class="form-group">
        <label class=" display-5 mb-3" for="exampleInputPassword1">age</label>
        <input type="text" class="form-control mb-3" id="exampleInputPassword1" placeholder="age"name="age"required>
      </div>
      <div class="mb-3 input-group"><span class="input-group-text">Taille (1,26m à 3m)</span><input type="text" aria-label="First name" class="form-control" name="taille"required></div>
      <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="sexe" value="homme" checked>homme 
      <label class="form-check-label mb-3" for="radio1"></label>
    </div>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio2" name="sexe" value="femme">femme
      <label class="form-check-label" for="radio2"></label>
    </div>

      <button type="submit"value="Envoyer" class="btn btn-primary mb-3">submit</button>
    </form>
  </div>
</div>
';
}
?></div>
</div>

<?php
    $content =ob_get_clean();
    require "../template.php";
?>
<!-- session start avant le html(le doctype) -->
<!-- il faut un formularie pour nom ,age  -->
<!-- récuperer l'input sur une page traitement séparé(ça me parait mieux)
en faisant un test dessus(pour voir si elle existent pour eviter le message d'érreur)
il faut copier coller session start (sur les deux pages ?)
$_SESSION['nom'] = $nom récupération de variable super global(sur toute l'arboréssence ?)
puis test de récupération de la dite variable avec echo ou prit r -->

<!-- besoin d'un tableau associatif pour stocker tout ça, ça devrait le faire
du genre $utilisateur=array('age'=>20,'nom'=>'JeanMargoulin',etc...)-->

<!-- faire une autre page compte,
récupérer encore une fois avec $_SESSION tout ce qu'on a entré, 
vérifier la présence de $_GET['logout'] 
si présence, session_destroy(); ,en dessous header("location:delete.php"); et en dessous exit(); (présence sur session.php? d'un bouton logout)-->

<!-- faire un autre page delete.php 
?php 
session start
session destroy
header("location:session.php")
exit()
?
 -->