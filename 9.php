<?php
$string_1="welcome our students from the University ";
$string_2="students";
if(preg_match("/$string_2/",$string_1)){
    echo "The string $string_1 was found in $string_2";

}else{
    echo "the string $string_1 not found ";
}
?>
