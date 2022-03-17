<?php
 $age = array('Peter' =>22 ,'Clark'=> 32,"John"=>28 );

 $marks["Peter"]="93";
 $marks["John"]="45";
 $marks["Clark"]="67";
 $marks["Mark"]="90";

 echo "For Age";
 echo "<br>";
 foreach($age as $x => $x_value) {
    echo "Name=" . $x . ", Age=" . $x_value;
    echo "<br>";
 }
echo "<br>";
echo "For marks";
echo "<br>";

 foreach ($marks as $x => $x_value) {
     echo "Name=" . $x . ", Marks=" . $x_value;
     echo "<br>";
 }
?>