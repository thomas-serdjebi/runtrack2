<?php 

$str="Certaines choses changent, et d'autres ne changeront jamais.";
var_dump($str);
$i=0;
$u=($i+1);


while (isset($str[$i][$u])==true) {

    echo $str[$u];
    $i++;
}


