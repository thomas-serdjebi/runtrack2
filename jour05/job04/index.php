<?php 
echo calcule(10,'*',2);

function calcule($a, $operation, $b) {
   if ($operation=='+') {
       $resultat == $a + $b;
       return $resultat;
    }

    elseif ($operation=='-') {
        $resultat = $a - $b;
        return $resultat;
    }
    
    elseif ($operation=='*') {
        $resultat = $a * $b;
        return $resultat;
    }

    elseif ($operation=='/') {
        $resultat = $a / $b;
        return $resultat;
    }

    elseif ($operation=='%') {
        $resultat = $a % $b;
        return $resultat;
    }

    return (0);
}