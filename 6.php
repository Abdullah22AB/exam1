<?php
$numbers =[40,50,60];
$max=$numbers[0];
if($numbers[1] >$max){
    $max=$numbers[1];
}
if($numbers[2] > $max){
    $max=$numbers[2];
}
echo "the maximum number is $max";
?>
