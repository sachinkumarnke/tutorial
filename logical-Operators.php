<?php

//logical Operators in PHP


// PHP Logical Operators

/*
Operator    Name    Example         Result
-------------------------------------------------
and/&&      And     $x and $y       True if both $x and $y are true
or/||       Or      $x or $y        True if either $x or $y is true  
xor         Xor     $x xor $y       True if either $x or $y is true, but not both
!           Not     !$x             True if $x is not true
*/




$a=30;
$b=50;
$c=70;

// AND operator
// if($a==30 && $b==50){
//     echo "this is correct a is 30";
// }

// AND operator
// if($a==30 and $b==50){
//     echo "this is correct a is 30";
// }


// OR operator
// if($a==30 || $b==50){
//     echo "condition is true";
// }

// OR operator
// if($a==30 or $b==50){
//     echo "condition is true";
// }

// XOR operator
// if($a==30 xor $b==50){
//     echo "condition is true";
// }

// NOT operator
// if($a!=30){
//     echo " condition is true";
// }


// multiple condition with AND operator
if($a==30 && $b==50 &&$c==70){
    echo "all condition are true";
}







?>