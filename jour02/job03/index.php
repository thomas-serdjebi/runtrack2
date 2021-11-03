<?php

for ($var = 0; $var < 100 ; $var++) {
    if ( $var < 21) {
        echo '<i>'. $var . '</i><br/>';
    }
    elseif ($var>=25 && $var<= 50) {
        if ($var==42) {
            echo 'La Plateforme_ <br/>';}
        else echo '<u>'. $var . '</u><br/>';
        
    }
    else echo $var. '<br/>';
}

?>