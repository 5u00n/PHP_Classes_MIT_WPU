<?php
$arr= [10,3,70,21,54];

usort ($arr,function($x,$y){
    return $x>$y;
});

foreach($arr as $x){
    echo $x."<br>";
}
?>
