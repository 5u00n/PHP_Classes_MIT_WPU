<?php
 $age = array('Peter' =>22 ,'Clark'=> 32,"John"=>28 );

 $marks["Math"]="93";
 $marks["Science"]="55";
 $marks["Social"]="47";
 $marks["English"]="90";

 echo "For Age";
 echo "<br>";
 foreach($age as $x => $x_value) {
    echo "Name=" . $x . ", Age=" . $x_value;
    echo "<br>";
 }
echo "<br>";
echo "For marks";
echo "<br>";
$total=0;
 foreach ($marks as $x => $x_value) {
     echo "Subject" . $x . ",  Marks=" . $x_value;
     $total=$total+$x_value;
       echo "<br>";
 }

 echo "Total marks is : ".$total;
 echo "<br>";
 echo "<br>";
 echo "Grade is ";
 if($total/4>=90){
     echo "A";
 }
 else if($total/4>=80 && $total/4<90){
    echo "B";
}
else if($total/4>=70 && $total/4<80){
    echo "C";
}
else if($total/4>=60 && $total/4<70){
    echo "D";
}
else if($total/4>=40 && $total/4<60){
    echo "E";
}else{
    echo "Nill and you have failed";
}


echo "<br>";
echo "<br>";
echo "<br>";


echo "Multideimentional Array :";
echo "<br>";



echo "Contact details are: ";
$contact = array(array("name"=>"Peter","email"=>"peter@gmail.com"),array("name"=>"Clark","email"=>"ckark09@outlook.com"),array("name"=>"Harry","email"=>"potter7@hogward.com"));

foreach($contact as $n){
echo "<br>";
    foreach($n as $key=> $val){
        echo "<br>";
        echo $key." : ".$val;
    }
}
?>