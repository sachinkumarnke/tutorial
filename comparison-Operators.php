<?php   
// comparison Operators in PHP
/*
$a=80;
$b=60;
 echo var_dump($a==$b); // equal operator
*/


$a=50;
$b=50;
$c="50";
$d=30;
    //echo var_dump($a==$b); 
   // echo var_dump($a==$c); // equal operator


  // var_dump($a===$b); // identical operator


// var_dump($a!=$b); // not equal operator

// var_dump($a<>$d); // not equal operator

// var_dump($a!==$c); // not identical operator
// var_dump($a!==$b)

// var_dump($a>$d); // greater than operator

// var_dump($d<$d); // less than operator  

// var_dump($a>=$d); // greater than or equal to operator

//var_dump($a<=$d); // less than or equal to operator 

var_dump($a <=> $d); // spaceship operator  

?>