<?php 



echo (bonjour(1));

function bonjour($jour) {
    if ($jour == true) {
        echo ("Bonjour");
    }
    else echo ("Bonsoir");
}