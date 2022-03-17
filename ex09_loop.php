<?php
$l = 0;
do {
    echo "In  do while the loop : ".$l."<br>";
    $l++;
} while ($l < 10);

echo "<br>";

$w = 10;
while ($w > 0) {
    echo "in while loop : ".$w."<br>";
    $w--;
};

echo "<br>";

for($f=20;$f>10;$f--){
    echo "In for loop : ".$f."<br>";
}

echo "<br>";

$arr=array("red","blue","green");
foreach($arr as $mn){
    echo "Inside foreach array : ".$mn."<br>";
} 
?>