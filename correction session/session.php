<?php ob_start() ?>
<?php 
session_start();

if(isset($_SESSION['table'])){
    $table = $_SESSION['table'];
}
?>


<div class="container">
    <div class="row ">
        <div class="col-6">
            <a href="session.php"><button type="button" class="btn btn-outline w-100 border mt-5 p-3">HOME</button></a>
            <!-- <a href="formulaire.php?form"><button type="button" class="btn btn-primary w-100 mt-5 p-3">Ajouter des données</button></a> -->
            <?php
            //  include "./liste.php"; 

            if(isset($_SESSION['table'])) {
                include "liste.php";
            }
?>
<?php 
            if (isset($_GET['form'])) {
                echo '<a href="formulaire.php"><button type="button" class="btn btn-primary w-100 mt-5 p-3">Ajouter des données</button></a>';
                include "formulaire.php";

            }elseif (isset($_POST['envoyer'])) {
                    $table['prenom']=$_POST['prenom'];
                    $table['nom']=$_POST['nom'];
                    $table['age']=$_POST['age'];
                    $table['taille']=$_POST['taille'];
                    $table['radios']=$_POST['radios'];
                    $_SESSION['table'] = $table;
                    echo '<a href="session.php?form"><button type="button" class="btn btn-success" w-100 mt-5 p-3">Données sauvegardées</button></a>';
            }else{
                if(isset($table)){
                    if(isset($_GET['debugging'])){
                        echo'<h2 class="text-center">Débogage</h2>';
                        echo "<h3>===> Lecture du tableau à l'aide de la fonction print_r()</h3>";
                        $table=$_SESSION['table'];
                        echo '<pre>';
                        print_r($table) ;
                        echo '<pre>';
                    }
                    elseif(isset($_GET['concatenation'])){
                        echo'<h2 class="text-center">Concaténation</h2><br><br>';
                        echo "<h3>===> Construction d'une phrase avec le contenu du tableau</h3>";
                        echo ($table["radios"]=='homme')?"Mr":"Mme";
                        echo ' '. $table["prenom"] .' '.$table["nom"].' <br> ' ;
                        echo  "J'ai " . $table["age"] . ' ans et je mesure ' . $table["taille"] .'m.';
                
                        $table['prenom'] = ucfirst($table['prenom']);
                        $table['nom']  = strtoupper($table['nom']);

                        echo "<h3>===> Construction d'une phrase après MAJ du tableau</h3>";
                        echo ($table["radios"]=='homme')?"Mr":"Mme";
                        echo ' '. $table["prenom"] .' '.$table["nom"].' <br> ' ;
                        echo  "J'ai " . $table["age"] . ' ans et je mesure ' . $table["taille"] .'m.';
                        echo "<h3>===> Affichage d'une virgule à la place du point pour la taille</h3>";
                        
                        $table['taille'] = str_replace('.',',',$table['taille']);
                        echo ($table["radios"]=='homme')?"Mr":"Mme";
                        echo ' '. $table["prenom"] .' '.$table["nom"].' <br> ' ;
                        echo  "J'ai " . $table["age"] . ' ans et je mesure ' . $table["taille"] .'m.';
                
                
                        }
                        elseif(isset($_GET['loop'])){
                            echo'<h2 class="text-center">Boucle</h2>';
                            echo "<h3>===> Lecture du tableau à l'aide d'une boucle foreach</h3>";
                            
                            $compteur=0;
                            foreach($table as $key => $value){
                                echo "à la ligne n°".$compteur. " correspond la clé '".$key."' et contient" ."' $value'". "<br>";
                                $compteur++;
                            }
                            }
                        elseif(isset($_GET['function'])){
                            echo'<h2 class="text-center">Fonction</h2>';
                            echo "<h3>===>J'utilise ma fonction readTable()</h3>";
                            // readTable($table);

                            }
                            elseif(isset($_GET['del'])){
                                session_destroy();
                                echo '<div class="alert alert-success text-center col-md-5" role="alert">Données supprimées</div>';

                                }
                            // else{
                            //     echo '<a type="button" href="./formulaire.php" class="btn btn-primary">Ajouter des données</a>';
                            //     }

                            } 
                        else{
                            echo '<a href="formulaire.php"><button type="button" class="btn btn-primary w-100 mt-5 p-3">Ajouter des données</button></a>';
                        } 

                    }      

            ?>
            

    </div>

</div>
</div>

<?php
$content = ob_get_clean();
require "../template.php";
?>