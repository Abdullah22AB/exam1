<?php




////******* Sort Asc
$array = [2,4,3,1,6,7,5,8,0,9];

for($j = 0; $j < count($array); $j ++)
{
   for($i = 0; $i < count($array)-1; $i ++)
   {
       if($array[$i] > $array[$i+1])
       {
           $temp = $array[$i+1];
           $array[$i+1]=$array[$i];
           $array[$i]=$temp;
       }
   }
}

print_r($array);

//******* Sort Descending

$array = [2,4,3,1,6,7,5,8,0,9];

for($j = 0; $j < count($array); $j ++)
{
   for($i = 0; $i < count($array)-1; $i ++)
   {
       if($array[$i] < $array[$i+1])
       {
           $temp = $array[$i+1];
           $array[$i+1]=$array[$i];
           $array[$i]=$temp;
       }
   }
}

print_r($array);


?>