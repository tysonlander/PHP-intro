<?php

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

// strlen()

// $output = strlen('Hello World');
// echo $output;

// strpos()
// finds the positions of the first occurrence

// $output = strpos('Hello World', 'o');
// echo $output;

// strrpos()
// finds the position of the last occurrence

// trim()
// trims whitespace 

// strtoupper
// Makes everything uppercase

// strtolower()
// Makes everything lowercase

// ucwords()
// Capitalize every word

// str_replace()
// Replaces all occurrences of a search string with a replacement

// $text = 'Hello World';
// $output = str_replace('World', 'Everyone', $text);
// echo $output;

// is_string()
// check if string - returns 1 if it is

// $val = '22';
// $output = is_string($val);

// echo $output;

/*
$values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

foreach($values as $value){
  if(is_string($value)){
    echo "{$value} is a string<br>";
  }
}
*/

$string = "You got your heavy coat out yet? It's getting colder. Tree trunks grow however makes them happy. Maybe there was an old trapper that lived out here and maybe one day he went to check his beaver traps, and maybe he fell into the river and drowned. This is probably the greatest thing that's ever happened in my life. Volunteering your time; it pays you and your whole community fantastic dividends.";

$compressed = gzcompress($string);

// echo $compressed;

$original = gzuncompress($compressed);
echo $original;
