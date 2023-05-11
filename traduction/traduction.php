<?php ob_start() ?>
<?php

include 'liste.php';


?>
<?php

if(isset($_GET['latin'])){
    include 'latin.php';
}elseif(isset($_GET['russe'])){
    include 'russe.php';
}else{
    include 'français.php';
} 
?>

<?php
    $content =ob_get_clean();
    require "../template.php";
?>