<?php 

$tab = array(200, 204, 173, 98, 171, 404, 459);
$i=0;

while (isset($tab[$i])) {
    if ($tab[$i] % 2 ===1){
        echo ("$tab[$i] est impair <br>");
    }
    else echo ("$tab[$i] est pair <br>");
    $i++;
}





