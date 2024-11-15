<?php
$date = "2012-12-21";
$dateObj = new DateTime($date);
$dateObj->modify('+1 month');
echo  $dateObj->format('Y-m-d ');
?>
