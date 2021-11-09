<?php 



echo occurrences("Je vais à la plage.", 'a');

function occurrences($str, $char) {
    for ( $i = 0, $counter= 0 ; isset ( $str [ $i ] ) == true ; $i++ ) {
        if ( $str [ $i ] == $char) {
            $counter++ ;
        }
    }

    return ($counter) ;
}

