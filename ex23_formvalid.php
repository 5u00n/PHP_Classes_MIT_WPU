<?php
if (session_id()) {
    $name=$_POST['name'];
    $passwd=$_POST['passwd'];
    echo $name."   :  ".$passwd;
}
else{
    header("location:ex23_formvalidf.php",true);
    exit;
}
?>