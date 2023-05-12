<?php ob_start() ?>
<div class="d-flex col container-fluid justify-content-center ">
<ul class="list-group">  
            <form class ="card p-3 my-3 mx-3 justify-content-start" method="POST">
        <input type="submit" name="1" class="mt-1 mb-1 btn btn-primary" value='lat'>
        <input type="submit" name="2" class="mt-1 mb-1 btn btn-primary" value='ru'>
        <input type="submit" name="3" class="mt-1 mb-1 btn btn-primary" value='fr'>
        </form>
        </ul>
</div>
<?php

if((isset($_COOKIE['lang']))and (empty($_POST))){        //reconnexion avec paramètre de l'utilisateur
    switch($_COOKIE['lang']){
        case '1':
            include 'latin.php';
            break;
        case '2':
            include 'russe.php';
            break;
        case '3':
            include 'français.php'; 
            break;
    }
}if((isset($_POST['1']))or(isset($_POST['2']))or(isset($_POST['3']))){                                 // reconnaissance de l'input utilisateur
    switch($_POST){
        case array_key_exists('1',$_POST):
            include 'latin.php';
            setcookie("lang",'1',time()+3600,"/","",false,true);
            break;
        case array_key_exists('2',$_POST):
            include 'russe.php';
            setcookie("lang",'2',time()+3600,"/","",false,true);
            break;
        case array_key_exists('3',$_POST):
            include 'français.php';
            setcookie("lang",'3',time()+3600,"/","",false,true);
            break;
        }
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>
<!-- 
    <form method="post" action="index.php">
  <select name="opt">
    <option  value="1">latin</option>
    <option  value="2">russe</option>
    <option  value="3">français</option>
  </select>
  <input type="submit" value="Submit the form"/>
</form> -->