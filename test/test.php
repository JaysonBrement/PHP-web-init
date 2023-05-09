<?php ob_start() ?>
<div class="container d-flex justify-content-start">
<ul class="list-group col-3">
<form class ="card "method="POST">
<input type="submit" name="1" class="btn-primary" value="deboggage">
<input type="submit" name="2" class="btn-primary" value="concatenation">
<input type="submit" name="3" class="btn-primary" value="boucle">
<input type="submit" name="4" class="btn-primary" value="fonction">
<input type="submit" name="5" class="btn-primary" value="supprimer">
</form>
</ul>
</div>
<p><?php
if((array_key_exists('1', $_POST)) or (array_key_exists('2', $_POST)) or (array_key_exists('3', $_POST)) or (array_key_exists('4', $_POST))or (array_key_exists('5', $_POST))){

    switch($_POST){
        case (array_key_exists('1', $_POST)):
            print_r($table);
            break;
        case (array_key_exists('2', $_POST)):
            echo "bouton2";
            break;
        case (array_key_exists('3', $_POST)):
            echo "bouton3";
            break;
        case (array_key_exists('4', $_POST)):
            echo "bouton4";
            break;
        case (array_key_exists('5', $_POST)):
            echo "bouton5";
            break;
        
    
}
}
?>
</p>

<?php
    $content =ob_get_clean();
    require "../template.php";
?>