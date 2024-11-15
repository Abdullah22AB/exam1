<?php



$curentT=new DateTime();
$curentT->modify('-1 month');
$final = $curentT->format('m');
echo "the month before the curent month is : ".$final;