<?php
function passVal($num){
    echo "Pass by value <br>";
    $num +2;
    return $num;
}

function Passref(&$num){
    echo "Pass by Reference <br>";
    $num +=10;
    return $num;
}

$n=10;
passVal($n);
echo "The original value is still $n <br><br>";
Passref($n);
echo "The Original value changes to $n";
?>