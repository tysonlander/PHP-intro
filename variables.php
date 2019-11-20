<?php
// single line comment
# Single line comment
/*
multiple 
comment
*/

#Variable
/*
 - Prefix $
 - start with a letter or an underscore
 - Only letters and numbers and underscorces
 - case sensitive
*/

#Data Types
/*
  String
  Integers
  Floats
  Booleans
  Arrays
  Objects
  Null
  Resource
*/


$output = 'Hello World!';
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 . ' ' . $string2;
$greeting2 = "$string1 $string2"; // double quotes parses the variable

$string3 = 'They\'re Here'; // forward slash ignores the character following it

define('GREETING', 'Hello Everyone'); // if you add a third argument of true than the first will not be case sensitive

echo GREETING;

$float1 = 4.4;
$bool1 = true;
  // echo $output;
?>