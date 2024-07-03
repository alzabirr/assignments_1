<?php

$num1 = 4;
$num2 = 2;
$num3 = 6;

if($num1 > $num2 && $num1 > $num3){
printf("number $num1 is a largest number");
}
elseif($num2> $num1 && $num2 > $num3){
    printf("number $num2 is a largest number ");

}
elseif($num3> $num1 && $num3 > $num1){
    printf("number $num3 is a largest number ");
}
else{
    printf("error");
}



