<?php
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Will";
$people[] = "Ernie";
$people[] = "Katie";
$people[] = "Mike";
$people[] = "Frank";
$people[] = "Tyler";

$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person){
    if(stristr($q, substr($person, 0, $len))){
      if($suggestion === ""){
        $suggestion = $person;
      } else{
        $suggestion .=", $perosn";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;