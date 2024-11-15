<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width:80%;
            margin:auto;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php

echo "1 <br> <br>";
$n = 5; 
for ($i = 1; $i <= $n; $i++) {
    
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "* ";
    }
    echo "<br>";
}


////********* 2
echo "2 <br> <br>";
$rows = 5;

for ($i = 1; $i <= $rows; $i++)
{
   for ($j = 1; $j <= $i; $j++)
   {
       echo "* ";
   }
   echo "<br>";
}

for ($i = $rows; $i >= 1; $i--)
{
   for ($j = 1; $j <= $i; $j++)
   {
       echo "* ";
   }
   echo "<br>";
}

////********** 3
echo "3 <br> <br>";
$rows = 3;

for ($i = 1; $i <= $rows; $i++)
{
   for ($j = 1; $j <= (2 * $i - 1); $j++)
   {
       echo "* ";
   }
   echo "<br>";
}



for ($i = $rows - 1; $i >= 1; $i--)
{
   for ($j = 1; $j <= (2 * $i - 1); $j++)
   {
       echo "* ";
   }
   echo "<br>";
}



////******* Sort Asc
//$array = [2,4,3,1,6,7,5,8,0,9];
//
//for($j = 0; $j < count($array); $j ++)
//{
//    for($i = 0; $i < count($array)-1; $i ++)
//    {
//        if($array[$i] > $array[$i+1])
//        {
//            $temp = $array[$i+1];
//            $array[$i+1]=$array[$i];
//            $array[$i]=$temp;
//        }
//    }
//}
//
//print_r($array);
//
////******* Sort Descending
//
//$array = [2,4,3,1,6,7,5,8,0,9];
//
//for($j = 0; $j < count($array); $j ++)
//{
//    for($i = 0; $i < count($array)-1; $i ++)
//    {
//        if($array[$i] < $array[$i+1])
//        {
//            $temp = $array[$i+1];
//            $array[$i+1]=$array[$i];
//            $array[$i]=$temp;
//        }
//    }
//}
//
//print_r($array);