<?php ob_start() ?>
<?php session_start() ?>
<form method="post" action="index.php">
  <select name="opt">
    <option value="1">latin</option>
    <option value="2">russe</option>
    <option value="3">français</option>
  </select>
  <input type="submit" value="Submit the form"/>
</form>

<?php
if(isset($lang)==false){
    $lang=3;
}
if(isset($_POST['opt'])){
    $lang=$_POST['opt'];
    $_SESSION=$lang;
    setcookie('lang',$lang,time()+3600,"/","",false,true);
}
if(isset($_COOKIE)){
    $lang=$_COOKIE['lang'];
}
switch($lang){
    case 1:
        include 'latin.php';
        break;
        case 2:
            include "russe.php";
            break;
            case 3:
                include "français.php";
                break;
}
?>

<?php
$content = ob_get_clean();
require "../template.php";
?>
 