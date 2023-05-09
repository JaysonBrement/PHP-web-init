
<?php
$session=array("nom" =>"jean","prénom"=>"biche","age"=>15,"taille"=>1.56);
$table=[];
foreach($session as $key=>$value){
    $table[$key]=$value;
}
foreach($table as $key=>$value){                //transforme maj première lettre prénom
    if($key=='prénom'){
        $table[$key]=ucfirst($table[$key]);
    }
    if($key=='nom'){
        $table[$key]=strtoupper($table[$key]);
    }
    if($key=='taille'){
        $table[$key]=str_replace('.', ',', $table[$key]);
    }
}
foreach($table as $key=>$value){
    echo "$key=>$value ";
}
?>