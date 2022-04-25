<?php
// Variable to check
$intnum = 11.11;
if (filter_var($intnum, FILTER_VALIDATE_FLOAT)){
echo("$intnum is a valid float number");
}else{
echo("$intnum is not a valid float number");
}
?>