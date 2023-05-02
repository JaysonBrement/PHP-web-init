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
?>