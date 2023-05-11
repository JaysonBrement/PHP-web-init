<?php ob_start() ?>
<form method="post" action="test.php">
  <select name="opt">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  <input type="submit" value="Submit the form"/>
</form>

<?php

if(isset($_POST['opt'])){
    switch($_POST){
        case ($_POST['opt']==1):
            echo "numero 1";
            break;
            case ($_POST['opt']==2):
                echo "numero 2";
                break;
                case ($_POST['opt']==3):
                    echo "numero 3";
                    break;
    }
}

?>

<?php
    $content =ob_get_clean();
    require "../template.php";
?>