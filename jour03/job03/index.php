<?php 

$str ="I'm sorry Dave I'm afraid I can't do that.";
$i=0;

while(isset($str[$i])) {
    if ($str[$i] == "a" || $str[$i] == "e"|| $str[$i] == "I" || $str[$i] == "o" || $str[$i] == "u" || $str[$i] == "y" ) {
        echo ($str[$i]);
    }
    $i++;
}
