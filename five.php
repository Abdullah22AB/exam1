<?php



// this is way one 
/*
 $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
 $odd = [];
 for ($i = 0; $i < count($array); $i++) {
     if ($array[$i] % 2 != 0) {
         $odd[] = $array[$i];
     }
 }
 $array = $odd;
 echo "<pre>";
 print_r($array);
 echo "</pre>";
 echo "<pre> Odd Numbers: ";
 print_r($odd);
 echo "</pre>";
*/
/* this is way two 

*/
$numbers = [1,2,3,4,5,6,7,8,9,10];
$filteredNumbers = array_filter($numbers, function($number) {
    return $number % 2 !== 0; 
});
$filteredNumbers = array_values($filteredNumbers);
echo "<pre>";
print_r($filteredNumbers);
echo "</pre>";


?>