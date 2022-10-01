<?php
$a = readline("enter number:\n");
$b = readline("enter number:\n");


if ($a > 100 || $b > 100) {
  echo "numbers are more than 100. Try again!\n";
  $num1 = readline("enter number:\n");
  $num2 = readline("enter number:\n");
  echo $num1 * $num2;

 } elseif ($num1 = 0 || $num2 = 0) {
   exit();
 }
   else {
     echo $a * $b;
   }

?>
