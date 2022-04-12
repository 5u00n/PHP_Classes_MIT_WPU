<?php
$x= 100;
$y=200;
function add(){
    global $x,$y;
    $sum = $x+$y;
    echo "Sum of global no =".$sum;
}

function sub(){
    global $x,$y;
    $sub=$y-$x;
    echo "Subtraction of global no = ".$sub;
}

function mult(){
    global $x,$y;
    $sub=$y*$x;
    echo "Multiplication of global no = ".$sub;
}

function div(){
    global $x,$y;
    $sub=$y/$x;
    echo "Divission of global no = ".$sub;
}

add();
sub();
mult();
div();

?>