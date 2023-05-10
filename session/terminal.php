
<?php
$session=array("nom" =>"jean","prénom"=>"biche","age"=>15,"taille"=>1.56);
$table=[];
foreach($session as $key=>$value){
    $table[$key]=$value;
}

$ligne=0;
foreach($table as $key=>$value){
    echo "à la ligne $ligne correspond la clé '$key' et contient '$value'<br></br>";
    $ligne++;
}
?>