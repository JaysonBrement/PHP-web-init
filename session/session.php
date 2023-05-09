<?php ob_start() ?>
<?php session_start() ?>
<?php require "../fonction.php"; ?>
<h1><a href="session.php">rafraichir</a></h1>
<?php
  if(isset($_SESSION['nom']) && isset($_SESSION['prénom'])&& isset($_SESSION['age'])&& isset($_SESSION['taille'])){
    echo '<div class="container d-flex justify-content-start">
    <ul class="list-group col-3">
    <form class ="card "method="POST">
    <input type="submit" name="1" class="btn-primary" value="deboggage">
    <input type="submit" name="2" class="btn-primary" value="concatenation">
    <input type="submit" name="3" class="btn-primary" value="boucle">
    <input type="submit" name="4" class="btn-primary" value="fonction">
    <input type="submit" name="5" class="btn-primary" value="supprimer">
    </form>
    </ul>
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
            foreach($table as $key=>$value){                //transforme maj première lettre prénom
              if($key=='prénom'){
                  $table[$key]=ucfirst($table[$key]);
                  echo "Mr $value ";
              }
              if($key=='nom'){
                  $table[$key]=strtoupper($table[$key]);
                  echo "$value";
              }
              if($key=='age'){
                echo "<br></br> J'ai $value ans et je mesure ";
              }
              if($key=='taille'){
                  $table[$key]=str_replace('.', ',', $table[$key]);
                  echo "$value";
              }
              
          }
              break;
          case (array_key_exists('3', $_POST)):
              echo "bouton3";
              break;
          case (array_key_exists('4', $_POST)):
              echo "bouton4";
              break;
          case (array_key_exists('5', $_POST)):
              session_destroy();
              header("location:session.php");
              break;
          
      
  }
  }
  }
else{
echo '
<div class="container row d-flex justify-content-center">
<a href="session.php"><button type="button" class="btn btn-primary col-3">Primary</button></a>
<div id="sessioncard" class="card d-flex col-8 justify-content-center text-center">
    <form action="traitement.php" method="POST">
      <div class="form-group">
        <label class=" display-5"for="exampleInputEmail1">prénom</label>
        <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="prénom"name="prénom">
      </div>
      <div class="form-group">
        <label class=" display-5" for="exampleInputPassword1">nom</label>
        <input type="text" class="form-control " id="exampleInputPassword1" placeholder="nom"name="nom">
      </div>
      <div class="form-group">
        <label class=" display-5" for="exampleInputPassword1">age</label>
        <input type="text" class="form-control " id="exampleInputPassword1" placeholder="age"name="age">
      </div>
      <div class="form-group">
        <label class=" display-5" for="exampleInputPassword1">taille</label>
        <input type="text" class="form-control " id="exampleInputPassword1" placeholder="taille"name="taille">
      </div>
      <button type="submit"value="Envoyer" class="btn btn-primary ">submit</button>
    </form>
  </div>
</div>
';
}
?>

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