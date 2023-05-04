<?php
function aratorom($chiffre){
$chrom=array("M"=>1000,"CM"=>900,"D"=>500,"CD"=>400,"C"=>100,"XC"=>90,"L"=>50,"XL"=>40,"X"=>10,"IX"=>9,"V"=>5,"IV"=>4,"I"=>1);
$line=0;
while($chiffre>0){
    foreach ($chrom as $ltr=>$nbr){
        if(($chiffre>=$nbr)){
            $chiffre=$chiffre-$nbr;
            echo "$ltr";
            $line++;
            if($line>10){
                echo "\n";
            }
            break;
        }
    }
}
}

function exprctrl($expr){
    $aled ='[^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|-|"|#|\')).{8,}$]'; // je sais pas pourquoi ça marche, mais confirme si il y a au moins :1 maj, 1min, 1 nombre,1 caractère spéciale, 8 caractères
    if(preg_match($aled,$expr)){
        echo "SA MARCHE BORDEL !!! WOUHOUHOU";
    }else{
        echo "Prérequis non remplis";
    }
}
?>

    <!-- INTERDIT MAIS FONCTIONEL -->
    <!-- if((preg_match("([a-z])",$expr)) and (preg_match("([A-Z])",$expr)) and (preg_match("([0-9])",$expr)) and (preg_match("([-_+#-&é'\"/*])",$expr)) and (strlen($expr)>8)){
        echo "c'est bien ";
    } -->